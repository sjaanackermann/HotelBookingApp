<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">


    <!-- My CSS -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Gothic A1' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Trade Winds' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Thank you!</title>

</head>

<body>

    <!-- Navbar Starts Here -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Logo" style="width:40px;">
        </a>
    </nav>

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
                    <b>Client Name & Surname:</b> " . $_SESSION['name'] . " " . $_SESSION['surname'] . "<br>
                    <b>Client Email:</b> " . $_SESSION['email'] . "<br>
                    <b>Selected Hotel: </b>" .
            (($_POST["hotel1"]) ? "Yotel Hotel" : "") .
            (($_POST["hotel2"]) ? "Ibis Hotel" : "") .
            (($_POST["hotel3"]) ? "Hotel Indigo" : "") .
            (($_POST["hotel4"]) ? "Sandman Hotel" : "") .
            (($_POST["hotel5"]) ? "Sleeperz Hotel" : "") .
            (($_POST["hotel6"]) ? "Motel One Hotel" : "") .
            (($_POST["hotel7"]) ? "Radisson Hotel" : "") .
            (($_POST["hotel8"]) ? "Residence Inn Hotel" : "") .
            (($_POST["hotel9"]) ? "Hampton Hotel" : "") .
            (($_POST["hotel10"]) ? "Alexandra Hotel" : "") .
            "<br>
                    <b>From :</b> " . $_SESSION['in'] . " to : " . $_SESSION['out'] . "<br>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

         // Client Disply
        $mail->send();
        echo "<div class=\"column\">";
        echo "<div class=\"box\" id=\"move\">";
        echo 'Thank you for your Enquiry, we will be in touch shortly to finalise the booking!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    echo "<div class=\"control\" id=\"back\" action=\"index.php\">";
    echo "<a href =\"index.php\"> <button class=\"button\">Home Page</button></a>";
    echo "</div>";
    "</div>";
   


    ?>


</body>

</html>