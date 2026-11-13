<?php
/**
 * Crown Asia - Contact Form Handler
 */
require_once __DIR__ . '/config.php';

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name          = trim($_POST['name'] ?? '');
    $email         = trim($_POST['email'] ?? '');
    $phone         = trim($_POST['phone'] ?? '');
    $enquiry_type  = trim($_POST['enquiry_type'] ?? 'General Enquiry');
    $sector        = trim($_POST['sector'] ?? 'All / Not Applicable');
    $subject       = trim($_POST['subject'] ?? 'Website Contact Enquiry');
    $message       = trim($_POST['message'] ?? '');

    // Basic validation
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // In production, send email to info@crownasia.io or log to secure database
        // For demonstration & local testing, redirect back with success status
        header("Location: " . $base_url . "contact/?status=success#enquiry-form");
        exit;
    } else {
        header("Location: " . $base_url . "contact/?status=error#enquiry-form");
        exit;
    }
}

// Redirect if accessed directly
header("Location: " . $base_url . "contact/");
exit;

