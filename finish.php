<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Completed Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <?php


    //Composer's autoloader
    require 'vendor/autoload.php';

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = '21f32e58d44adf';                     // SMTP username
        $mail->Password   = '90c09616c21cc4';                               // SMTP password
        $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($_SESSION['email'], 'Mailer');                      // Add a client email
        $mail->addAddress('scotlandbookings@scotland.com', 'Client');     // Add a recipient           
        $mail->addReplyTo('info@example.com', 'Information');              // Add reply to email

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Booking Alert';
        $mail->Body    = 
                    "Dear Bookings Manager, <br><br>
                    Please see details of the booking new enquiry below: <br>
                    <b>Client Name & Surname:</b> ".$_SESSION['name']." ".$_SESSION['surname']."<br>
                    <b>Client Email:</b> ".$_SESSION['email']."<br>
                    <b>Selected Hotel: </b>".
                    (($_POST["hotel1"] == "hotel1") ? "Yotel Hotel" : "").
                    (($_POST["hotel2"]) ? "Ibis Hotel" : "").
                    (($_POST["hotel3"]) ? "Indigo Hotel" : "").
                    (($_POST["hotel4"]) ? "Sandman Hotel" : "").
                    (($_POST["hotel5"]) ? "Sleeperz Hotel" : "").
                    (($_POST["hotel6"]) ? "Motel Hotel" : "").
                    (($_POST["hotel7"]) ? "Radisson Hotel" : "").
                    (($_POST["hotel8"]) ? "Residence Hotel" : "").
                    (($_POST["hotel9"]) ? "Hampton Hotel" : "").
                    (($_POST["hotel10"]) ? "Alexandra Hotel" : "").
                    "<br>
                    <b>From :</b> ".$_SESSION['in']." to : ".$_SESSION['out']. "<br>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        '<div class="emailFeedback">';
        echo "<div class=\"column\">";
        echo "<div class=\"box\" id=\"move\">";
        echo 'Thank you for your Enquiry, we will be in touch shortly to finalise the booking!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    '</div';
    ?>
</body>

</html>