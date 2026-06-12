<?php
/**
 * Returns a configured PHPMailer instance ready to send.
 * Usage: $mail = cwp_mailer(); $mail->addAddress(...); $mail->send();
 */

use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . '/../vendor/autoload.php';

function cwp_mailer(): PHPMailer
{
    $cfg  = require __DIR__ . '/mail.php';
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host      = 'smtp.gmail.com';
    $mail->SMTPAuth  = true;
    $mail->Username  = $cfg['username'];
    // Strip spaces — Gmail shows App Passwords with spaces for readability
    // but the actual password must be the raw 16-character string
    $mail->Password  = str_replace(' ', '', $cfg['password']);
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL on port 465
    $mail->Port      = 465;
    $mail->Timeout   = 15; // fail fast — don't hang the page

    // Bypass SSL cert issues common on shared hosting
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];

    $mail->CharSet  = 'UTF-8';
    $mail->Encoding = 'base64';

    $mail->setFrom($cfg['from_email'], $cfg['from_name']);
    $mail->addAddress($cfg['to_email'], $cfg['to_name']);

    return $mail;
}
