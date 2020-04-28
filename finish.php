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

<body class="emailFinal">

    <!-- Navbar Starts Here -->
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #254D7E;">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Logo" style="width:40px;">
            </a>
            <span class="navbar-text nav-text">
                Scotland Bookings
            </span>
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
                    <b>Selected Hotel: </b>";
                    if(isset(($_POST["hotel1"]))){
                        (($_POST["hotel1"]) ? "Yotel Hotel" : "");
                    }if(isset(($_POST["hotel2"]))){
                        (($_POST["hotel2"]) ? "Ibis Hotel" : "");
                    }if(isset(($_POST["hotel3"]))){
                        (($_POST["hotel3"]) ? "Hotel Indigo" : "");
                    }if(isset(($_POST["hotel4"]))){
                        (($_POST["hotel4"]) ? "Sandman Hotel" : "");
                    }if(isset(($_POST["hotel5"]))){
                        (($_POST["hotel5"]) ? "Sleeperz Hotel" : "");
                    }if(isset(($_POST["hotel6"]))){
                        (($_POST["hotel6"]) ? "Motel One Hotel" : "");
                    }if(isset(($_POST["hotel7"]))){
                        (($_POST["hotel7"]) ? "Radisson Hotel" : "");
                    }if(isset(($_POST["hotel8"]))){
                        (($_POST["hotel8"]) ? "Residence Inn Hotel" : "");
                    }if(isset(($_POST["hotel9"]))){
                        (($_POST["hotel9"]) ? "Hampton Hotel" : "");
                    }if(isset(($_POST["hotel10"]))){
                        (($_POST["hotel10"]) ? "Alexandra Hotel" : "");
                    }
             "<br>
                    <b>From :</b> " . $_SESSION['in'] . " to : " . $_SESSION['out'] . "<br>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // Client Disply
        $mail->send();
        echo "<div class=\"box\" id=\"move\">";
        echo 'Thank you for your Enquiry, we will be in touch shortly to finalise the booking!';
        echo "<br>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    echo "<div class=\"control\" id=\"back\" action=\"index.php\">";
    echo "<a href =\"index.php\"> <button class=\"button\">Home Page</button></a>";
    echo "</div>";
    echo "</div>";

    ?>

    <!-- Footer -->
    <footer>

        <div class="footer" id="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> About </h3>
                        <ul>
                            <li> <a href="#"> Our Company </a> </li>
                            <li> <a href="#"> About Us </a> </li>
                            <li> <a href="#"> Terms of Services </a> </li>
                            <li> <a href="#"> Our Team </a> </li>
                        </ul>
                    </div>

                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Contact </h3>
                        <ul>
                            <li> <a href="#"> Contact Marketing </a> </li>
                            <li> <a href="#"> Contact Sales </a> </li>
                            <li> <a href="#"> Contact HR </a> </li>
                            <li> <a href="#"> Contact Admin </a> </li>
                        </ul>

                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3> Subscribe with Us </h3>
                        <ul>
                            <li>
                                <div class="input-append subscribe-btn text-center">
                                    <input type="text" class="full text-center" placeholder="Email ">
                                    <button class="btn  btn-success" type="button"> Subscribe <i class="fa fa-save"> </i> </button>
                                </div>
                            </li>
                        </ul>

                        <ul class="social">
                            <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-instagram"></i> </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> We Accept: </h3>
                        <ul>
                            <li class="payments"><i class="fa fa-cc-paypal"></i>    PayPal</li>
                            <li class="payments"><i class="fa fa-cc-mastercard"></i>    Master Card</li>
                            <li class="payments"><i class="fa fa-cc-amex"></i>    American Express</li>
                            <li class="payments"><i class="fa fa-cc-visa"></i>    Visa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="containers">
                <p> Copyright © 2020. All rights reserved. </p>
            </div>
        </div>
    </footer>
</body>

</html>