<?php
/**
 * Crown Asia - Contact Form Handler
 * Validates inquiries, dispatches admin notification and user auto-reply via PHPMailer
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/mailer.php';

// Detect if request is AJAX
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
       || (isset($_POST['is_ajax']) && $_POST['is_ajax'] == '1')
       || (isset($_SERVER['CONTENT_TYPE']) && strpos($_SERVER['CONTENT_TYPE'], 'application/json') !== false);

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
        exit;
    }
    header("Location: " . $base_url . "contact/");
    exit;
}

// Extract and sanitize input data
$name         = trim($_POST['name'] ?? '');
$email        = trim($_POST['email'] ?? '');
$phone        = trim($_POST['phone'] ?? '');
$enquiry_type = trim($_POST['enquiry_type'] ?? 'General Corporate Enquiry');
$sector       = trim($_POST['sector'] ?? 'All / Corporate Group');
$subject      = trim($_POST['subject'] ?? 'Website Contact Inquiry');
$message      = trim($_POST['message'] ?? '');

// Validation
$errors = [];
if (empty($name) || mb_strlen($name) < 2) {
    $errors[] = 'Please enter your full name.';
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please provide a valid email address.';
}
if (empty($subject) || mb_strlen($subject) < 3) {
    $errors[] = 'Please provide a clear subject line.';
}
if (empty($message) || mb_strlen($message) < 5) {
    $errors[] = 'Please enter your message or project details.';
}

if (!empty($errors)) {
    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => implode(' ', $errors),
            'errors'  => $errors
        ]);
        exit;
    }
    header("Location: " . $base_url . "contact/?status=error#enquiry-form");
    exit;
}

// Prepare payload
$inquiryData = [
    'name'         => $name,
    'email'        => $email,
    'phone'        => $phone ?: 'Not provided',
    'enquiry_type' => $enquiry_type,
    'sector'       => $sector,
    'subject'      => $subject,
    'message'      => $message,
    'timestamp'    => time()
];

// 0. Store message in database (contact_messages table for Admin CMS)
try {
    $dbFile = __DIR__ . '/db.php';
    if (file_exists($dbFile)) {
        require_once $dbFile;
        if (isset($conn)) {
            $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, subject, service, message, is_read, created_at) VALUES (?, ?, ?, ?, ?, ?, 0, NOW())");
            $stmt->execute([$name, $email, $phone, $subject, $sector, $message]);
        }
    }
} catch (Exception $e) {
    // Database log failure shouldn't abort email dispatch
}

// 1. Dispatch Email to Admin Desk
$adminResult = CrownAsiaMailer::sendAdminNotification($inquiryData);

// 2. Dispatch Confirmation Email to the User
$userResult  = CrownAsiaMailer::sendUserConfirmation($inquiryData);

// Success Response
$successMessage = "Thank you, " . htmlspecialchars($name) . "! Your inquiry has been routed to our corporate desk. A confirmation email has been dispatched to your inbox.";

if ($isAjax) {
    header('Content-Type: application/json');
    echo json_encode([
        'success'      => true,
        'message'      => $successMessage,
        'admin_status' => $adminResult['success'] ?? true,
        'user_status'  => $userResult['success'] ?? true
    ]);
    exit;
}

header("Location: " . $base_url . "contact/?status=success#enquiry-form");
exit;
