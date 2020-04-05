<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['in'] = $_POST['in'];
$_SESSION['out'] = $_POST['out'];
//Required Includes
require "incl/HotelInfo.php";

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Confirm Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

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

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.check').click(function() {
                $('.check').not(this).prop('checked', false);
            });
        });
    </script>

</head>

<body class="index">
    <!-- Navbar Starts Here -->
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #254D7E;">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Logo" style="width:40px;">
            </a>
            <span class="navbar-text nav-text">
                Scotland Bookings
            </span>
        </nav>

        <br>
        <br>

    <div class="display">
        <div class="column">

        <div class="form entry title">
            <!-- PHP scripts that takes the information from the index page and displays it on this one -->
            <?php
            echo "<br>";
            echo "<h2 class=\"text\">Greetings " . $_POST['name'] . " " . $_POST['surname']."!";
            "</h2>";
            echo "<br>";
            echo "<br>";
            echo "<hr>";
            echo "<br>";
            echo "<h3 class=\"text1\">Please see the details of the Hotels you selected below:</h3>";
            echo "<br>";
            echo "<hr>";
            echo "<br>";
            ?>
            </div>
            

            <?php

            //Yotel Hotel 

            if ($_POST['hotel1']) {
                echo "<div class=\"column\">";
                echo "<div class=\"card mx-auto mt-4\" style=\"width: 18rem;\">";
                echo "<img src=\"images/yotelMain.jpg\" class=\"card-img-top\" alt=\"Yotel Hotel\"><br>";
                echo "<div class=\"card-body\">";
                echo "<b  class=\"card-title\">You are viewing the ";
                echo $Yotel->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                if ($diff >= 1) {
                    echo $diff . " nights</b>. <hr><br> The Daily Rate is: R<b>" . $Yotel->price . "</b><br><br> The Total Cost for your stay will be " . "R";
                    echo "<b>".floor($Yotel->price * $diff)."</b>";
                } elseif ($diff < 1) {
                    echo ": <br>ERROR: PLEASE SELECT VALID DATES, DATES MUST BE ONE NIGHT OR MORE. <BR> PLEASE CLICK ON CANCEL AND TRY AGAIN!";
                }
                echo "<br><br><u><b>Facilities Include:</b></u><br>";
                echo "Wifi<br>";
                echo "Bar<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                echo "<hr>";
                echo "<br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel1\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel1\" class=\"labeled\"><b>   Select this hotel</b></label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            //Ibis Hotel

            if ($_POST['hotel2']) {
                echo "<div class=\"column\">";
                echo "<div class=\"card mx-auto mt-4\" style=\"width: 18rem;\">";
                echo "<img src=\"images/ibisMain.jpg\" class=\"card-img-top\" alt=\"Ibis Hotel\"><br>";
                echo "<div class=\"card-body\">";
                echo "<b  class=\"card-title\">You are viewing the ";
                echo $Ibis->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                if ($diff >= 1) {
                    echo $diff . " nights</b>. <hr><br> The Daily Rate is: R<b>" . $Ibis->price . "</b><br><br> The Total Cost will be " . "R";
                    echo "<b>".floor($Ibis->price * $diff)."</b>";
                }
                if ($diff < 1) {
                    echo ": <br>ERROR: PLEASE SELECT VALID DATES, DATES MUST BE ONE NIGHT OR MORE. <BR> PLEASE CLICK ON CANCEL AND TRY AGAIN!";
                }
                echo " <br><br><u><b>Facilities Include:</b></u><br>";
                echo "Wifi<br>";
                echo "Pool<br>";
                echo "Bar<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                echo "<hr>";
                echo "<br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel2\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel2\" class=\"labeled\"><b>Select this hotel</b></label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            //Hotel Indigo

            if ($_POST['hotel3']) {
                echo "<div class=\"column\">";
                echo "<div class=\"card mx-auto mt-4\" style=\"width: 18rem;\">";
                echo "<img src=\"images/indigoMain.jpg\" class=\"card-img-top\" alt=\"Hotel Indigo\"><br>";
                echo "<div class=\"card-body\">";
                echo "<b  class=\"card-title\">You are viewing the ";
                echo $Indigo->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                if ($diff >= 1) {
                    echo $diff . " nights</b>.  <hr><br> The Daily Rate is: R<b>" . $Indigo->price . "</b><br><br> The Total Cost will be " . "R";
                    echo "<b>".floor($Indigo->price * $diff)."</b>";
                }
                if ($diff < 1) {
                    echo ": <br>ERROR: PLEASE SELECT VALID DATES, DATES MUST BE ONE NIGHT OR MORE. <BR> PLEASE CLICK ON CANCEL AND TRY AGAIN!";
                }
                echo " <br><br><u><b>Facilities Include:</b></u><br>";
                echo "Wifi<br>";
                echo "Pool<br>";
                echo "Bar<br>";
                echo "Spa<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                echo "<hr>";
                echo "<br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel3\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel3\" class=\"labeled\"><b>Select this hotel</b></label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            //Sandman Hotel

            if ($_POST['hotel4']) {
                echo "<div class=\"column\">";
                echo "<div class=\"card mx-auto mt-4\" style=\"width: 18rem;\">";
                echo "<img src=\"images/sandmanMain.jpg\" class=\"card-img-top\" alt=\"Sandman Hotel\"><br>";
                echo "<div class=\"card-body\">";
                echo "<b  class=\"card-title\">You are viewing the ";
                echo $Sandman->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                if ($diff >= 1) {
                    echo $diff . " nights</b>.   <hr><br> The Daily Rate is: R<b>" . $Sandman->price . "</b><br><br> The Total Cost will be " . "R";
                    echo "<b>".floor($Sandman->price * $diff)."</b>";
                }
                if ($diff < 1) {
                    echo ": <br>ERROR: PLEASE SELECT VALID DATES, DATES MUST BE ONE NIGHT OR MORE. <BR> PLEASE CLICK ON CANCEL AND TRY AGAIN!";
                }
                echo " <br><br><u><b>Facilities Include:</b></u><br>";
                echo "Wifi<br>";
                echo "Bar<br>";
                echo "Smoking Friendly<br><br>";
                echo "<hr>";
                echo "<br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel4\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel4\" class=\"labeled\"><b>Select this hotel</b></label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            //Motel One Hotel

            if ($_POST['hotel6']) {
                echo "<div class=\"column\">";
                echo "<div class=\"card mx-auto mt-4\" style=\"width: 18rem;\">";
                echo "<img src=\"images/motelMain.jpg\" class=\"card-img-top\" alt=\"Motel One Hotel\"><br>";
                echo "<div class=\"card-body\">";
                echo "<b  class=\"card-title\">You are viewing the ";
                echo $Motel->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                if ($diff >= 1) {
                    echo $diff . " nights</b>.   <hr><br> The Daily Rate is: R<b>" . $Motel->price . "</b><br><br> The Total Cost will be " . "R";
                    echo "<b>".floor($Motel->price * $diff)."</b>";
                }
                if ($diff < 1) {
                    echo ": <br>ERROR: PLEASE SELECT VALID DATES, DATES MUST BE ONE NIGHT OR MORE. <BR> PLEASE CLICK ON CANCEL AND TRY AGAIN!";
                }
                echo " <br><br><u><b>Facilities Include:</b></u><br>";
                echo "Bar<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                echo "<hr>";
                echo "<br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel6\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel6\" class=\"labeled\"><b>Select this hotel</b></label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            //Radisson Hotel

            if ($_POST['hotel7']) {
                echo "<div class=\"column\">";
                echo "<div class=\"card mx-auto mt-4\" style=\"width: 18rem;\">";
                echo "<img src=\"images/radissonMain.jpg\" class=\"card-img-top\" alt=\"Radisson Red Hotel\"><br>";
                echo "<div class=\"card-body\">";
                echo "<b  class=\"card-title\">You are viewing the ";
                echo $Radisson->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                if ($diff >= 1) {
                    echo $diff . " nights</b>.  <hr><br> The Daily Rate is: R<b>" . $Radisson->price . "</b><br><br> The Total Cost will be " . "R";
                    echo "<b>".floor($Radisson->price * $diff)."</b>";
                }
                if ($diff < 1) {
                    echo ": <br>ERROR: PLEASE SELECT VALID DATES, DATES MUST BE ONE NIGHT OR MORE. <BR> PLEASE CLICK ON CANCEL AND TRY AGAIN!";
                }
                echo " <br><br><u><b>Facilities Include:</b></u><br>";
                echo "Wifi<br>";
                echo "Pool<br>";
                echo "Bar<br>";
                echo "Spa<br>";
                echo "Buffet<br>";
                echo "Parking<br><br>";
                echo "<hr>";
                echo "<br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel7\" value=\"  Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel7\" class=\"labeled\"><b>Select this hotel</b></label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            //Residence Inn Hotel

            if ($_POST['hotel8']) {
                echo "<div class=\"column\">";
                echo "<div class=\"card mx-auto mt-4\" style=\"width: 18rem;\">";
                echo "<img src=\"images/residenceMain.jpg\" class=\"card-img-top\" alt=\"Residence Inn\"><br>";
                echo "<div class=\"card-body\">";
                echo "<b  class=\"card-title\">You are viewing the ";
                echo $Residence->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                if ($diff >= 1) {
                    echo $diff . " nights</b>.   <hr><br> The Daily Rate is: R<b>" . $Residence->price . "</b><br><br> The Total Cost will be " . "R";
                    echo "<b>".floor($Residence->price * $diff)."</b>";
                }
                if ($diff < 1) {
                    echo ": <br>ERROR: PLEASE SELECT VALID DATES, DATES MUST BE ONE NIGHT OR MORE. <BR> PLEASE CLICK ON CANCEL AND TRY AGAIN!";
                }
                echo " <br><br><u><b>Facilities Include:</b></u><br>";
                echo "Wifi<br>";
                echo "Bar<br>";
                echo "Spa<br>";
                echo "Buffet<br><br>";
                echo "<hr>";
                echo "<br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel8\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel8\" class=\"labeled\"><b>Select this hotel</b></label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            //Hampton Hotel

            if ($_POST['hotel9']) {
                echo "<div class=\"column\">";
                echo "<div class=\"card mx-auto mt-4\" style=\"width: 18rem;\">";
                echo "<img src=\"images/hamptonMain.jpg\" class=\"card-img-top\" alt=\"Hampton Hotel\"><br>";
                echo "<div class=\"card-body\">";
                echo "<b  class=\"card-title\">You are viewing the ";
                echo $Hampton->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                if ($diff >= 1) {
                    echo $diff . " nights</b>.   <hr><br> The Daily Rate is: R<b>" . $Hampton->price . "</b><br><br> The Total Cost will be " . "R";
                    echo "<b>".floor($Hampton->price * $diff)."</b>";
                }
                if ($diff < 1) {
                    echo ": <br>ERROR: PLEASE SELECT VALID DATES, DATES MUST BE ONE NIGHT OR MORE. <BR> PLEASE CLICK ON CANCEL AND TRY AGAIN!";
                }
                echo " <br><br><u><b>Facilities Include:</b></u><br>";
                echo "Wifi<br>";
                echo "Bar<br>";
                echo "Spa<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                echo "<hr>";
                echo "<br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel9\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel9\" class=\"labeled\"><b>Select this hotel</b></label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            //Alexandra Hotel

            if ($_POST['hotel10']) {
                echo "<div class=\"column\">";
                echo "<div class=\"card mx-auto mt-4\" style=\"width: 18rem;\">";
                echo "<img src=\"images/alexandraMain.jpg\" class=\"card-img-top\" alt=\"Alexandra Hotel\"><br>";
                echo "<div class=\"card-body\">";
                echo "<b  class=\"card-title\">You are viewing the ";
                echo $Alexandra->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                if ($diff >= 1) {
                    echo $diff . " nights</b>.   <hr><br> The Daily Rate is: R<b>" . $Alexandra->price . "</b><br><br> The Total Cost will be " . "R";
                    echo "<b>".floor($Alexandra->price * $diff)."</b>";
                }
                if ($diff < 1) {
                    echo ": <br>ERROR: PLEASE SELECT VALID DATES, DATES MUST BE ONE NIGHT OR MORE. <BR> PLEASE CLICK ON CANCEL AND TRY AGAIN!";
                }
                echo " <br><br><u><u><b>Facilities Include:</b></u></u><br>";
                echo "Wifi<br>";
                echo "Bar<br>";
                echo "Spa<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                echo "<hr>";
                echo "<br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel10\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel10\" class=\"labeled\"><b>Select this hotel</b></label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            //Book & Cancel Buttons
            echo "<br>";
            echo "<div class=\"control\" >";
            echo "<input type=\"submit\"disabled>";
            echo "</div>";
            echo "</form>";
            echo "<div class=\"control\" id=\"cancel\" action=\"index.php\">";
            echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
            echo "</div>";
            echo "</div>";
            echo "<br>";

            ?>

            <!-- End of the scrips to display information -->
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
                                    <li class="payments"><i class="fa fa-cc-paypal"></i> PayPal</li>
                                    <li class="payments"><i class="fa fa-cc-mastercard"></i> Master Card</li>
                                    <li class="payments"><i class="fa fa-cc-amex"></i> American Express</li>
                                    <li class="payments"><i class="fa fa-cc-visa"></i> Visa</li>
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

            <script>
                var checkboxes = $("input[type='checkbox']"),
                    submitButt = $("input[type='submit']");

                checkboxes.click(function() {
                    submitButt.attr("disabled", !checkboxes.is(":checked"));
                });

            </script>

</body>

</html>