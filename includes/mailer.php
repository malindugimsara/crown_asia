<?php

/**
 * Crown Asia - Mailer Service
 * Powered by PHPMailer with luxury HTML templates & logging
 */

require_once dirname(__DIR__) . '/config.php';
require_once __DIR__ . '/phpmailer/Exception.php';
require_once __DIR__ . '/phpmailer/PHPMailer.php';
require_once __DIR__ . '/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class CrownAsiaMailer
{
    /**
     * Build and configure a PHPMailer instance from .env settings
     */
    private static function createMailer()
    {
        $mail = new PHPMailer(true);

        $smtpHost = env('SMTP_HOST');
        $smtpUser = env('SMTP_USER');
        $smtpPass = env('SMTP_PASS');
        $smtpPort = (int) env('SMTP_PORT', 587);
        $smtpSec  = strtolower(env('SMTP_SECURE', 'tls'));
        $smtpAuth = env('SMTP_AUTH', true);

        // If SMTP host is configured, enable SMTP
        if (!empty($smtpHost) && $smtpHost !== 'localhost') {
            $mail->isSMTP();
            $mail->Host       = $smtpHost;
            $mail->SMTPAuth   = (bool) $smtpAuth;
            $mail->Username   = $smtpUser;
            $mail->Password   = $smtpPass;
            $mail->Port       = $smtpPort;

            if ($smtpSec === 'ssl' || $smtpPort === 465) {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            } elseif ($smtpSec === 'tls' || $smtpPort === 587) {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            } else {
                $mail->SMTPSecure = false;
                $mail->SMTPAutoTLS = false;
            }

            // Connection timeout
            $mail->Timeout = 10;
        }

        $fromAddress = env('MAIL_FROM_ADDRESS', 'web@crownasia.io');
        $fromName    = env('MAIL_FROM_NAME', 'Crown Asia LLC');
        $mail->setFrom($fromAddress, $fromName);
        $mail->CharSet = 'UTF-8';

        return $mail;
    }

    /**
     * Send Inquiry Notification to the Admin Desk
     */
    public static function sendAdminNotification(array $data)
    {
        $refId     = 'CA-' . date('Ymd') . '-' . strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 5));
        $adminTo   = env('ADMIN_EMAIL', 'admin@crownasia.io');
        $adminName = env('ADMIN_NAME', 'Crown Asia Inquiries Desk');

        $name     = htmlspecialchars($data['name'] ?? 'Website Visitor');
        $email    = htmlspecialchars($data['email'] ?? '');
        $phone    = htmlspecialchars($data['phone'] ?? 'Not provided');
        $category = htmlspecialchars($data['enquiry_type'] ?? 'General Corporate Enquiry');
        $sector   = htmlspecialchars($data['sector'] ?? 'All / Corporate Group');
        $subject  = htmlspecialchars($data['subject'] ?? 'New Website Inquiry');
        $message  = nl2br(htmlspecialchars($data['message'] ?? ''));
        $datetime = date('F j, Y, g:i A T');
        $ip       = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';

        $emailSubject = "[New Inquiry #{$refId}] {$subject} - {$name}";

        $html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$emailSubject}</title>
    <style>
        body { margin: 0; padding: 0; background-color: #F4F7F5; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #2B3830; }
        .wrapper { max-width: 640px; margin: 30px auto; background: #FFFFFF; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #E1E8E3; }
        .header { background: linear-gradient(135deg, #060A08 0%, #0B1D13 50%, #0F3320 100%); padding: 36px 32px; text-align: center; border-bottom: 2px solid #1DB954; }
        .brand-title { color: #FFFFFF; font-size: 22px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; margin: 0; }
        .brand-sub { color: #1DB954; font-size: 11px; letter-spacing: 1.5px; text-transform: uppercase; margin-top: 4px; }
        .badge { display: inline-block; background: rgba(29, 185, 84, 0.15); color: #0F9D58; padding: 6px 14px; border-radius: 20px; font-size: 11.5px; font-weight: 700; letter-spacing: 1px; margin-top: 15px; border: 1px solid rgba(29,185,84,0.3); }
        .body { padding: 36px 32px; }
        .ref-box { background: #F8FAF9; border-left: 4px solid #1DB954; padding: 14px 18px; border-radius: 8px; margin-bottom: 26px; }
        .ref-box .title { font-size: 14px; font-weight: 700; color: #0B1D13; margin: 0; }
        .ref-box .meta { font-size: 12px; color: #6C7A72; margin-top: 3px; }
        .info-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; font-size: 14px; }
        .info-table td { padding: 11px 12px; border-bottom: 1px solid #EDF2EF; vertical-align: top; }
        .info-table td.label { font-weight: 600; color: #55605A; width: 34%; }
        .info-table td.val { color: #111A15; font-weight: 500; }
        .msg-box { background: #FFFFFF; border: 1px solid #DCE4DE; border-radius: 12px; padding: 20px; margin-top: 15px; font-size: 14.5px; line-height: 1.7; color: #1E2822; }
        .action-row { text-align: center; margin: 32px 0 10px; }
        .btn-reply { display: inline-block; background: #0F9D58; color: #FFFFFF !important; text-decoration: none; padding: 12px 28px; border-radius: 30px; font-weight: 600; font-size: 13.5px; letter-spacing: 0.5px; }
        .footer { background: #F8FAF9; padding: 22px 32px; text-align: center; font-size: 11.5px; color: #7E8C83; border-top: 1px solid #EDF2EF; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1 class="brand-title">CROWN ASIA LLC</h1>
            <div class="brand-sub">United States Investment &amp; Corporate Group</div>
            <div class="badge">DIRECT INQUIRY ROUTING</div>
        </div>

        <div class="body">
            <div class="ref-box">
                <div class="title">New Website Lead Inquiry [Ref: {$refId}]</div>
                <div class="meta">Received on {$datetime} via SSL Encrypted Portal</div>
            </div>

            <table class="info-table">
                <tr>
                    <td class="label">Full Name</td>
                    <td class="val"><strong>{$name}</strong></td>
                </tr>
                <tr>
                    <td class="label">Email Address</td>
                    <td class="val"><a href="mailto:{$email}" style="color: #0F9D58; text-decoration: none; font-weight: 600;">{$email}</a></td>
                </tr>
                <tr>
                    <td class="label">Phone / WhatsApp</td>
                    <td class="val">{$phone}</td>
                </tr>
                <tr>
                    <td class="label">Enquiry Category</td>
                    <td class="val">{$category}</td>
                </tr>
                <tr>
                    <td class="label">Strategic Sector</td>
                    <td class="val">{$sector}</td>
                </tr>
                <tr>
                    <td class="label">Subject</td>
                    <td class="val">{$subject}</td>
                </tr>
                <tr>
                    <td class="label">Sender IP</td>
                    <td class="val"><code>{$ip}</code></td>
                </tr>
            </table>

            <div style="font-weight: 700; font-size: 13.5px; color: #0B1D13; margin-top: 20px;">Submitted Message:</div>
            <div class="msg-box">
                {$message}
            </div>

            <div class="action-row">
                <a href="mailto:{$email}?subject=Re:%20[Crown%20Asia%20{$refId}]%20{$subject}" class="btn-reply">
                    &rarr; Reply Directly to {$name}
                </a>
            </div>
        </div>

        <div class="footer">
            Crown Asia LLC &bull; 10242 Coors Bypass Blvd. N.W., Albuquerque, NM 87114, USA<br>
            Confidential Transmission intended strictly for authorized corporate officers.
        </div>
    </div>
</body>
</html>
HTML;

        $plain = "NEW INQUIRY RECEIVED [Ref: {$refId}]\n\n"
            . "Name: {$data['name']}\n"
            . "Email: {$data['email']}\n"
            . "Phone: {$data['phone']}\n"
            . "Category: {$data['enquiry_type']}\n"
            . "Sector: {$data['sector']}\n"
            . "Subject: {$data['subject']}\n"
            . "Date: {$datetime}\n"
            . "IP: {$ip}\n\n"
            . "Message:\n{$data['message']}\n";

        return self::executeSend($adminTo, $adminName, $emailSubject, $html, $plain, $data['email'], $data['name']);
    }

    /**
     * Send Automated Confirmation / Reply to the User
     */
    public static function sendUserConfirmation(array $data)
    {
        $refId    = 'CA-' . date('Ymd') . '-' . strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 5));
        $userTo   = $data['email'];
        $userName = $data['name'];

        $name     = htmlspecialchars($userName);
        $subject  = htmlspecialchars($data['subject'] ?? 'Website Inquiry');
        $sector   = htmlspecialchars($data['sector'] ?? 'Corporate Group');
        $datetime = date('F j, Y');

        $portalUrl     = 'https://portal.crownasia.io';
        $siteUrl       = 'https://crownasia.io';
        $opportunities = 'https://crownasia.io/investment-opportunities/';

        $emailSubject = "Thank you for contacting Crown Asia LLC [Ref: {$refId}]";

        $html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$emailSubject}</title>
    <style>
        body { margin: 0; padding: 0; background-color: #F4F7F5; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #2B3830; }
        .wrapper { max-width: 640px; margin: 30px auto; background: #FFFFFF; border-radius: 16px; overflow: hidden; box-shadow: 0 12px 36px rgba(0,0,0,0.06); border: 1px solid #E1E8E3; }
        .header { background: linear-gradient(135deg, #060A08 0%, #0B1D13 50%, #0F3320 100%); padding: 40px 32px; text-align: center; border-bottom: 2px solid #1DB954; }
        .brand-title { color: #FFFFFF; font-size: 24px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; margin: 0; }
        .brand-sub { color: #1DB954; font-size: 11px; letter-spacing: 1.5px; text-transform: uppercase; margin-top: 5px; }
        .body { padding: 40px 34px; font-size: 14.5px; line-height: 1.75; color: #2C3831; }
        .greeting { font-size: 17px; font-weight: 700; color: #060A08; margin-bottom: 16px; }
        .highlight-card { background: #F8FAF9; border-radius: 12px; padding: 22px 24px; margin: 26px 0; border: 1px solid #E1E8E3; border-left: 4px solid #1DB954; }
        .highlight-card .item { margin-bottom: 8px; font-size: 13.5px; }
        .highlight-card .item:last-child { margin-bottom: 0; }
        .highlight-card strong { color: #0B1D13; }
        .cta-grid { display: flex; gap: 12px; margin: 30px 0 10px; }
        .btn-portal { display: inline-block; background: #0F9D58; color: #FFFFFF !important; text-decoration: none; padding: 13px 26px; border-radius: 30px; font-weight: 600; font-size: 13.5px; text-align: center; }
        .btn-ghost { display: inline-block; background: #FFFFFF; color: #0B1D13 !important; text-decoration: none; padding: 12px 24px; border-radius: 30px; font-weight: 600; font-size: 13.5px; border: 1px solid #DCE4DE; text-align: center; }
        .footer { background: #060A08; padding: 32px 30px; text-align: center; font-size: 12px; color: rgba(255,255,255,0.6); line-height: 1.7; }
        .footer-brand { color: #FFFFFF; font-weight: 700; font-size: 13px; letter-spacing: 1px; margin-bottom: 6px; }
        .footer a { color: #1DB954; text-decoration: none; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1 class="brand-title">CROWN ASIA LLC</h1>
            <div class="brand-sub">United States Investment &amp; Corporate Group</div>
        </div>

        <div class="body">
            <div class="greeting">Dear {$name},</div>

            <p>
                Thank you for contacting <strong>Crown Asia LLC</strong>. This automated confirmation serves to confirm that our corporate communications desk has successfully received your message regarding <em>"{$subject}"</em> under our <strong>{$sector}</strong> division.
            </p>

            <div class="highlight-card">
                <div class="item"><strong>Reference Number:</strong> {$refId}</div>
                <div class="item"><strong>Inquiry Topic:</strong> {$subject}</div>
                <div class="item"><strong>Strategic Sector:</strong> {$sector}</div>
                <div class="item"><strong>Date Logged:</strong> {$datetime}</div>
                <div class="item"><strong>Guaranteed SLA:</strong> Within 24 Business Hours (Mon – Fri, 9:00 AM – 6:00 PM MST)</div>
            </div>

            <p>
                Our compliance and investor relations desks review all submissions thoroughly. An authorized representative will follow up with you directly via this email address.
            </p>

            <p style="margin-bottom: 24px;">
                If you are an active investor seeking to execute allocations, verify KYC documentation, or review USDT deposit statements, please access the dedicated self-service Investor Portal:
            </p>

            <div style="text-align: center; margin: 30px 0;">
                <a href="{$portalUrl}" class="btn-portal" style="margin-right: 8px;">Access Investor Portal &rarr;</a>
                <a href="{$opportunities}" class="btn-ghost">View Active Offerings</a>
            </div>

            <p style="font-size: 13px; color: #6C7A72; border-top: 1px solid #EDF2EF; padding-top: 20px; margin-top: 30px;">
                <em>Notice: Crown Asia LLC representatives will never request private wallet seed phrases, passwords, or direct cryptocurrency transfers outside the verified Investor Portal.</em>
            </p>
        </div>

        <div class="footer">
            <div class="footer-brand">CROWN ASIA LLC</div>
            10242 Coors Bypass Blvd. N.W., Albuquerque, New Mexico 87114, USA<br>
            Primary Desk: <a href="mailto:web@crownasia.io">web@crownasia.io</a> &bull; Web: <a href="{$siteUrl}">crownasia.io</a><br>
            <span style="font-size: 11px; color: rgba(255,255,255,0.4);">&copy; {$datetime} Crown Asia LLC. All Rights Reserved.</span>
        </div>
    </div>
</body>
</html>
HTML;

        $plain = "Dear {$name},\n\n"
            . "Thank you for reaching out to Crown Asia LLC. Your inquiry [Ref: {$refId}] regarding '{$subject}' has been received.\n\n"
            . "An authorized desk officer will respond to you within 24 business hours.\n\n"
            . "Investor Portal: {$portalUrl}\n"
            . "Crown Asia: {$siteUrl}\n\n"
            . "Crown Asia LLC\n"
            . "10242 Coors Bypass Blvd. N.W., Albuquerque, NM 87114, USA\n";

        return self::executeSend($userTo, $userName, $emailSubject, $html, $plain);
    }

    /**
     * Dispatch email with PHPMailer; log to file if error occurs or in dev mode
     */
    private static function executeSend($to, $toName, $subject, $htmlBody, $plainBody, $replyToEmail = null, $replyToName = null)
    {
        $logDir = dirname(__DIR__) . '/logs';
        if (!is_dir($logDir)) {
            @mkdir($logDir, 0755, true);
        }
        $logFile = $logDir . '/mail.log';

        $timestamp = date('Y-m-d H:i:s');

        try {
            $mail = self::createMailer();

            $mail->addAddress($to, $toName);
            if (!empty($replyToEmail)) {
                $mail->addReplyTo($replyToEmail, $replyToName ?: $replyToEmail);
            }

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $htmlBody;
            $mail->AltBody = $plainBody;

            // Only attempt network SMTP send if SMTP_USER is set and not a placeholder
            $smtpUser = env('SMTP_USER', '');
            $canSendSmtp = !empty($smtpUser) && $smtpUser !== 'your_email@gmail.com' && env('SMTP_PASS') !== 'your_app_password_here';

            if ($canSendSmtp) {
                $mail->send();
                $logEntry = "[{$timestamp}] SUCCESS: Sent to {$to} ({$toName}) | Subject: {$subject}\n";
                @file_put_contents($logFile, $logEntry, FILE_APPEND);
                return ['success' => true, 'message' => 'Email sent successfully via SMTP'];
            } else {
                // In local dev/testing without active credentials, log the email safely
                $logEntry = "[{$timestamp}] LOCAL_DEV_MOCK: To: {$to} ({$toName}) | Subject: {$subject} (Configure SMTP in .env to send over live network)\n";
                @file_put_contents($logFile, $logEntry, FILE_APPEND);
                return ['success' => true, 'message' => 'Email logged successfully in local environment'];
            }
        } catch (Exception $e) {
            $errMsg = $e->getMessage();
            $logEntry = "[{$timestamp}] ERROR: Failed sending to {$to} | Error: {$errMsg}\n";
            @file_put_contents($logFile, $logEntry, FILE_APPEND);

            // Return success with logged notice so user is not blocked if local SMTP is offline
            return ['success' => false, 'error' => $errMsg];
        }
    }
}
