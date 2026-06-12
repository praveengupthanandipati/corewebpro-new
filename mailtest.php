<?php
/**
 * TEMPORARY MAIL DIAGNOSTIC — delete this file after fixing the issue.
 * Access via: https://yoursite.com/mailtest.php
 */

// Basic auth — change this password before uploading
$access = 'cwptest2024';
if (($_GET['key'] ?? '') !== $access) {
    http_response_code(403);
    die('<h2>403 — Add ?key=cwptest2024 to the URL to run diagnostics.</h2>');
}

echo '<pre style="font-family:monospace;font-size:14px;padding:20px;">';
echo "=== Core Web Pro — Mail Diagnostic ===\n\n";

// 1. PHP version
echo "PHP Version  : " . PHP_VERSION . "\n";
echo "OS           : " . PHP_OS . "\n\n";

// 2. Vendor autoload
$autoload = __DIR__ . '/vendor/autoload.php';
echo "vendor/autoload.php exists : " . (file_exists($autoload) ? "YES ✓" : "NO ✗ — vendor/ folder missing, run composer install") . "\n";

// 3. OpenSSL
echo "OpenSSL loaded : " . (extension_loaded('openssl') ? "YES ✓" : "NO ✗ — enable extension=openssl in php.ini") . "\n\n";

// 4. TCP connectivity to Gmail SMTP
echo "--- TCP Socket Test ---\n";
foreach ([465 => 'ssl', 587 => 'tls'] as $port => $enc) {
    $errno = 0; $errstr = '';
    $sock = @fsockopen('ssl://smtp.gmail.com', $port, $errno, $errstr, 8);
    if ($sock) {
        echo "Port $port ($enc) : OPEN ✓\n";
        fclose($sock);
    } else {
        echo "Port $port ($enc) : BLOCKED ✗  ($errno: $errstr)\n";
    }
}
echo "\n";

// 5. PHPMailer test send
if (!file_exists($autoload)) {
    echo "SKIPPING send test — vendor/ missing.\n";
    echo '</pre>';
    exit;
}

require_once $autoload;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$cfg = require __DIR__ . '/config/mail.php';

echo "--- PHPMailer Send Test ---\n";
echo "From     : {$cfg['from_email']}\n";
echo "To       : {$cfg['to_email']}\n";
echo "Password : " . str_repeat('*', strlen(str_replace(' ', '', $cfg['password']))) . " (" . strlen(str_replace(' ', '', $cfg['password'])) . " chars)\n\n";

try {
    $mail = new PHPMailer(true);
    $mail->SMTPDebug  = 3; // full output
    $mail->Debugoutput = function($str, $level) {
        echo htmlspecialchars(trim($str)) . "\n";
    };

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $cfg['username'];
    $mail->Password   = str_replace(' ', '', $cfg['password']);
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->Timeout    = 15;
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];
    $mail->CharSet = 'UTF-8';

    $mail->setFrom($cfg['from_email'], $cfg['from_name']);
    $mail->addAddress($cfg['to_email'], 'Test');
    $mail->Subject = 'Core Web Pro — Mail Test';
    $mail->Body    = "This is a test email from the Core Web Pro mail diagnostic.\n\nServer: " . ($_SERVER['HTTP_HOST'] ?? 'unknown');

    $mail->send();
    echo "\n✓ Email sent successfully!\n";

} catch (\Exception $e) {
    echo "\n✗ FAILED: " . $e->getMessage() . "\n";
    echo "Last SMTP error: " . $mail->ErrorInfo . "\n";
}

echo '</pre>';
