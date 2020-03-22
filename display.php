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
    !-- Required meta tags -->
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
    <div class="display">
        <div class="column">
            <!-- PHP scripts that takes the information from the index page and displays it on this one -->
            <?php
            echo "<h2>Greetings " . $_POST['name'] . " " . $_POST['surname'];
            "</h2>";
            echo "<h3>Please see the details of the Hotels you selected below:</h3>";


            echo "<div class=\"control\" >";
            echo "<form action=\"finish.php\" method=\"post\">";
            if ($_POST['hotel1']) {
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
                echo "<label for=\"hotel1\" class=\"label\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            if ($_POST['hotel2']) {
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
                echo "<label for=\"hotel2\" class=\"label\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }

            if ($_POST['hotel3']) {
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
                echo "<label for=\"hotel3\" class=\"label\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if ($_POST['hotel4']) {
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
                echo "<label for=\"hotel4\" class=\"label\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if ($_POST['hotel5']) {
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
                echo "<label for=\"hotel5\" class=\"label\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if ($_POST['hotel6']) {
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
                echo "<label for=\"hotel6\" class=\"label\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if ($_POST['hotel7']) {
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
                echo "<label for=\"hotel7\" class=\"label\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if ($_POST['hotel8']) {
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
                echo "<label for=\"hotel8\" class=\"label\">Select this hotel</label>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if ($_POST['hotel9']) {
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
                echo "<label for=\"hotel9\" class=\"label\">Select this hotel</label>";
                echo "</div>";
                echo "<div class=\"control\" id=\"cancel\">";
                echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //End of Div 
            }
            if ($_POST['hotel10']) {
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
                echo "<label for=\"hotel10\" class=\"label\">Select this hotel</label>";
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

</body>

</html>