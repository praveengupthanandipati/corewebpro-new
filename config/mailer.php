<?php
/**
 * Returns a configured PHPMailer instance ready to send.
 * Usage: $mail = cwp_mailer(); $mail->addAddress(...); $mail->send();
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

function cwp_mailer(): PHPMailer
{
    $cfg  = require __DIR__ . '/mail.php';
    $mail = new PHPMailer(true); // true = throw exceptions

    $mail->isSMTP();
    $mail->Host        = $cfg['host'];
    $mail->SMTPAuth    = true;
    $mail->Username    = $cfg['username'];
    $mail->Password    = $cfg['password'];
    $mail->SMTPSecure  = $cfg['encryption'] === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port        = $cfg['port'];
    $mail->CharSet     = 'UTF-8';
    $mail->Encoding    = 'base64';

    $mail->setFrom($cfg['from_email'], $cfg['from_name']);
    $mail->addAddress($cfg['to_email'], $cfg['to_name']);

    return $mail;
}
