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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Confirm Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="./css/styles.css">

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

<body>
     <!-- Navbar Starts Here -->
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="Logo" style="width:40px;">
        </a>
    </nav>
    <div class="display">
        <div class="column">
            <!-- PHP scripts that takes the information from the index page and displays it on this one -->
            <?php
            echo "<h2 id=\"text\">Greetings " . $_POST['name'] . " " . $_POST['surname'];
            "</h2>";
            echo "<h3 id=\"text\">Please see the details of the Hotels you selected below:</h3>";


            echo "<div class=\"control\" >";
            echo "<form action=\"finish.php\" method=\"post\">";
            if($_POST['hotel1']) {
                echo "<div class=\"column\">";
                echo "<div class=\"box\" id=\"move\">";
                echo "You are viewing the ";
                echo $Yotel->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                echo $diff . " nights. <br> The total cost will be " . "R";
                echo $Yotel->price * $diff;
                echo "<br>Facilities Include:<br>";
                echo "Wifi<br>";
                echo "Bar<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel1\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel1\" class=\"labeled\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            if($_POST['hotel2']) {
                echo "<div class=\"column\">";
                echo "<div class=\"box\" id=\"move\">";
                echo "You are viewing the ";
                echo $Ibis->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                echo $diff . " nights. <br> The total cost will be " . "R";
                echo $Ibis->price * $diff;
                echo " <br>Facilities Include:<br>";
                echo "Wifi<br>";
                echo "Pool<br>";
                echo "Bar<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel2\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel2\" class=\"labeled\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            if($_POST['hotel3']) {
                echo "<div class=\"column\">";
                echo "<div class=\"box\" id=\"move\">";
                echo "You are viewing the ";
                echo $Indigo->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                echo $diff . " nights. <br> The total cost will be " . "R";
                echo $Indigo->price * $diff;
                echo " <br>Facilities Include:<br>";
                echo "Wifi<br>";
                echo "Pool<br>";
                echo "Bar<br>";
                echo "Spa<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel3\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel3\" class=\"labeled\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if($_POST['hotel4']) {
                echo "<div class=\"column\">";
                echo "<div class=\"box\" id=\"move\">";
                echo "You are viewing the ";
                echo $Sandman->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                echo $diff . " nights. <br> The total cost will be " . "R";
                echo $Sandman->price * $diff;
                echo " <br>Facilities Include:<br>";
                echo "Wifi<br>";
                echo "Bar<br>";
                echo "Smoking Friendly<br><br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel4\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel4\" class=\"labeled\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if($_POST['hotel5']) {
                echo "<div class=\"column\">";
                echo "<div class=\"box\" id=\"move\">";
                echo "You are viewing the ";
                echo $Sleeperz->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                echo $diff . " nights. <br> The total cost will be " . "R";
                echo $Sleeperz->price * $diff;
                echo " <br>Facilities Include:<br>";
                echo "Bar<br>";
                echo "Smoking Friendly<br><br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel5\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel5\" class=\"labeled\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if($_POST['hotel6']) {
                echo "<div class=\"column\">";
                echo "<div class=\"box\" id=\"move\">";
                echo "You are viewing the ";
                echo $Motel->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                echo $diff . " nights. <br> The total cost will be " . "R";
                echo $Motel->price * $diff;
                echo " <br>Facilities Include:<br>";
                echo "Bar<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel6\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel6\" class=\"labeled\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if($_POST['hotel7']) {
                echo "<div class=\"column\">";
                echo "<div class=\"box\" id=\"move\">";
                echo "You are viewing the ";
                echo $Radisson->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                echo $diff . " nights. <br> The total cost will be " . "R";
                echo $Radisson->price * $diff;
                echo " <br>Facilities Include:<br>";
                echo "Wifi<br>";
                echo "Pool<br>";
                echo "Bar<br>";
                echo "Spa<br>";
                echo "Buffet<br>";
                echo "Parking<br><br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel7\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel7\" class=\"labeled\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if($_POST['hotel8']) {
                echo "<div class=\"column\">";
                echo "<div class=\"box\" id=\"move\">";
                echo "You are viewing the ";
                echo $Residence->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                echo $diff . " nights. <br> The total cost will be " . "R";
                echo $Residence->price * $diff;
                echo " <br>Facilities Include:<br>";
                echo "Wifi<br>";
                echo "Bar<br>";
                echo "Spa<br>";
                echo "Buffet<br><br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel8\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel8\" class=\"labeled\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if($_POST['hotel9']) {
                echo "<div class=\"column\">";
                echo "<div class=\"box\" id=\"move\">";
                echo "You are viewing the ";
                echo $Hampton->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                echo $diff . " nights. <br> The total cost will be " . "R";
                echo $Hampton->price * $diff;
                echo " <br>Facilities Include:<br>";
                echo "Wifi<br>";
                echo "Bar<br>";
                echo "Spa<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel9\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel9\" class=\"labeled\">Select this hotel</label>";
                echo "</div>";
                echo "<div class=\"control\" id=\"cancel\">";
                echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if($_POST['hotel10']) {
                echo "<div class=\"column\">";
                echo "<div class=\"box\" id=\"move\">";
                echo "You are viewing the ";
                echo $Alexandra->name . " Hotel for ";
                $date1 = $_POST['in'];
                $date2 = $_POST['out'];
                // Formula to convert the dates into days   
                $diff = floor(strtotime($date2) - strtotime($date1)) / 86400;
                echo $diff . " nights. <br> The total cost will be " . "R";
                echo $Alexandra->price * $diff;
                echo " <br>Facilities Include:<br>";
                echo "Wifi<br>";
                echo "Bar<br>";
                echo "Spa<br>";
                echo "Buffet<br>";
                echo "Free Parking<br><br>";
                //Div that contains buttons to confirm booking or cancel them 
                echo "<div class=\"control\" >";
                echo "<form action=\"finish.php\" method=\"post\">";
                echo "<input type=\"checkbox\" name=\"hotel10\" value=\"Select this hotel\" class=\"check\"/>";
                echo "<label for=\"hotel10\" class=\"labeled\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            echo "<button class=\"button\">Book</button>";
            echo "</form>";
            echo "<div class=\"control\" id=\"cancel\">";
            echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
            echo "</div>";
            echo "</div>";

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
            <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">

            </div>
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="container">
        <p class="pull-left"> Copyright © 2020. All rights reserved. </p>
        <div class="pull-right">
            <ul class="nav nav-pills payments">
                <li>We Accept: </li>
                <li><i class="fa fa-cc-paypal"></i></li>
                <li><i class="fa fa-cc-mastercard"></i></li>
                <li><i class="fa fa-cc-amex"></i></li>
                <li><i class="fa fa-cc-visa"></i></li>
            </ul>
        </div>
    </div>
</div>
</footer>

</body>

</html>