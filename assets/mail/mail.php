<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php'; // Only file you REALLY need
require 'PHPMailer-master/src/Exception.php'; // If you want to debug

session_destroy();
session_start();

// Form details
$email_to = "elvinas.lukasevicius@gmail.com";
$backUrl = "https://www.uabmogis.com/";

$fullname = $_POST['name']; // required
$email_from = $_POST['email']; // required
$message = $_POST['message']; // required

$email_message .= "Vardas: ". $fullname ."\n <br />";
$email_message .= "Email: ". $email_from."\n<br />";
$email_message .= "Tekstas: ". $message ."\n<br />";
$email_message = wordwrap($email_message, 70, "\r\n");

$mail = new PHPMailer(true);
try {
    //Recipients
    $mail->setFrom($email_from, $fullname);
    $mail->addAddress($email_to, $fullname);

    $mail->CharSet = "UTF-8";

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Žinutė iš puslapio uabmogis.com';
    $mail->Body    = $email_message;

    $mail->send();
    $_SESSION['message'] = '<div class="alert alert-success" role="alert">Ačiū, Jūsų žinutė gauta.</div>';
} catch (Exception $e) {
    $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Apgailestaujame, įvyko klaida. Susisiekite: ' . $email_to . '</div>';
}

header('Location: '.$backUrl);
