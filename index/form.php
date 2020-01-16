<?php
require_once('assets/library/PHPMailer/src/PHPMailer.php');
require_once('assets/library/PHPMailer/src/Exception.php');
require_once('assets/library/PHPMailer/src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'auth.smtp.1and1.fr';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     // SMTP username
    $mail->Password   = 'secret';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sebastien', 'Mailer');
    $mail->addAddress('sebastien.courion@lepeage-unenouvelledynamique.fr', 'Joe User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//htmlspecialchars($_POST);
//var_dump(htmlspecialchars($_POST));
//if (!isset($_POST)) {
//
//    if (isset($_POST['name']))
//        $name = htmlspecialchars($_POST['name']);
//    if (isset($_POST['email']))
//        $email = htmlspecialchars($_POST['email']);
//    if (isset($_POST['message']))
//        $message = htmlspecialchars($_POST['message']);
//    if (isset($_POST['subject']))
//        $subject = htmlspecialchars($_POST['subject']);
//    if ($name === '') {
//        echo "Name cannot be empty.";
//        die();
//    }
//    if ($email === '') {
//        echo "Email cannot be empty.";
//        die();
//    } else {
//        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            echo "Email format invalid.";
//            die();
//        }
//    }
//    if ($subject === '') {
//        echo "Subject cannot be empty.";
//        die();
//    }
//    if ($message === '') {
//        echo "Message cannot be empty.";
//        die();
//    }
//    $content = "From: $name \nEmail: $email \nMessage: $message";
//    $recipient = "christian.coley@hotmail.fr";
//    $mailheader = "From: $email \r\n";
//    mail($recipient, $subject, $content, $mailheader) or die("Error!");
//    echo "Email sent!";
//
//}
//

?>