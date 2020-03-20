<?php
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['surname']=$_POST['surname'];
$_SESSION['email']=$_POST['email'];
$_SESSION['in']=$_POST['in'];
$_SESSION['out']=$_POST['out'];
//Required Includes
require "incl/HotelInfo.php";

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Confirm Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="column">
            <!-- PHP scripts that takes the information from the index page and displays it on this one -->
            <?php 
if ($_POST['hotel1']) {
   echo "<div class=\"column\">";
    echo "<div class=\"box\" id=\"move\">";
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo "! <br> You are viewing the ";
     echo $Yotel->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. <br> The total cost will be " . "R"; echo $Yotel->price*$diff;
    echo "<br>Facilities Include:<br>";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";

   //Div that contains buttons to confirm booking or cancel them 
    echo "<div class=\"control\" >";
        echo "<form action=\"finish.php\">";
        echo "<button class=\"button\" name=\"book\">Book</button>";
        echo "</form>";
        echo "</div>";
        echo "<div class=\"control\" id=\"cancel\">";
        echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    //End of Div 
}

if ($_POST['hotel2']) {
    echo "<div class=\"column\">";
    echo "<div class=\"box\" id=\"move\">";
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo "! <br> You are viewing the ";
     echo $Ibis->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. <br> The total cost will be " . "R"; echo $Ibis->price*$diff;
    echo " <br>Facilities Include:<br>";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
   //Div that contains buttons to confirm booking or cancel them 
    echo "<div class=\"control\" >";
        echo "<form action=\"finish.php\" >";
        echo "<button class=\"button\" name=\"book\">Book</button>";
        echo "</form>";
        echo "</div>";
        echo "<div class=\"control\" id=\"cancel\">";
        echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    //End of Div 
}

if ($_POST['hotel3']) {
    echo "<div class=\"column\">";
    echo "<div class=\"box\" id=\"move\">";
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo "! <br> You are viewing the ";
     echo $Indigo->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. <br> The total cost will be " . "R"; echo $Indigo->price*$diff;
    echo " <br>Facilities Include:<br>";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
   //Div that contains buttons to confirm booking or cancel them 
    echo "<div class=\"control\" >";
        echo "<form action=\"finish.php\" >";
        echo "<button class=\"button\" name=\"book\">Book</button>";
        echo "</form>";
        echo "</div>";
        echo "<div class=\"control\" id=\"cancel\">";
        echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    //End of Div 
}
if ($_POST['hotel4']) {
    echo "<div class=\"column\">";
    echo "<div class=\"box\" id=\"move\">";
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo "! <br> You are viewing the ";
     echo $Sandman->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. <br> The total cost will be " . "R"; echo $Sandman->price*$diff;
    echo " <br>Facilities Include:<br>";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
   //Div that contains buttons to confirm booking or cancel them 
    echo "<div class=\"control\" >";
        echo "<form action=\"finish.php\" >";
        echo "<button class=\"button\" name=\"book\">Book</button>";
        echo "</form>";
        echo "</div>";
        echo "<div class=\"control\" id=\"cancel\">";
        echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    //End of Div 
}
if ($_POST['hotel5']) {
    echo "<div class=\"column\">";
    echo "<div class=\"box\" id=\"move\">";
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo "! <br> You are viewing the ";
     echo $Sleeperz->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. <br> The total cost will be " . "R"; echo $Sleeperz->price*$diff;
    echo " <br>Facilities Include:<br>";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
   //Div that contains buttons to confirm booking or cancel them 
    echo "<div class=\"control\" >";
        echo "<form action=\"finish.php\" >";
        echo "<button class=\"button\" name=\"book\">Book</button>";
        echo "</form>";
        echo "</div>";
        echo "<div class=\"control\" id=\"cancel\">";
        echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    //End of Div 
}
if ($_POST['hotel6']) {
    echo "<div class=\"column\">";
    echo "<div class=\"box\" id=\"move\">";
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo "! <br> You are viewing the ";
     echo $Motel->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. <br> The total cost will be " . "R"; echo $Motel->price*$diff;
    echo " <br>Facilities Include:<br>";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
   //Div that contains buttons to confirm booking or cancel them 
    echo "<div class=\"control\" >";
        echo "<form action=\"finish.php\" >";
        echo "<button class=\"button\" name=\"book\">Book</button>";
        echo "</form>";
        echo "</div>";
        echo "<div class=\"control\" id=\"cancel\">";
        echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    //End of Div 
}
if ($_POST['hotel7']) {
    echo "<div class=\"column\">";
    echo "<div class=\"box\" id=\"move\">";
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo "! <br> You are viewing the ";
     echo $Radisson->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. <br> The total cost will be " . "R"; echo $Radisson->price*$diff;
    echo " <br>Facilities Include:<br>";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
   //Div that contains buttons to confirm booking or cancel them 
    echo "<div class=\"control\" >";
        echo "<form action=\"finish.php\" >";
        echo "<button class=\"button\" name=\"book\">Book</button>";
        echo "</form>";
        echo "</div>";
        echo "<div class=\"control\" id=\"cancel\">";
        echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    //End of Div 
}
if ($_POST['hotel8']) {
    echo "<div class=\"column\">";
    echo "<div class=\"box\" id=\"move\">";
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo "! <br> You are viewing the ";
     echo $Residence->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. <br> The total cost will be " . "R"; echo $Residence->price*$diff;
    echo " <br>Facilities Include:<br>";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
   //Div that contains buttons to confirm booking or cancel them 
    echo "<div class=\"control\" >";
        echo "<form action=\"finish.php\" >";
        echo "<button class=\"button\" name=\"book\">Book</button>";
        echo "</form>";
        echo "</div>";
        echo "<div class=\"control\" id=\"cancel\">";
        echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    //End of Div 
}
if ($_POST['hotel9']) {
    echo "<div class=\"column\">";
    echo "<div class=\"box\" id=\"move\">";
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo "! <br> You are viewing the ";
     echo $Hampton->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. <br> The total cost will be " . "R"; echo $Hampton->price*$diff;
    echo " <br>Facilities Include:<br>";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
   //Div that contains buttons to confirm booking or cancel them 
    echo "<div class=\"control\" >";
        echo "<form action=\"finish.php\" >";
        echo "<button class=\"button\" name=\"book\">Book</button>";
        echo "</form>";
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
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo "! <br> You are viewing the ";
     echo $Alexandra ->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. <br> The total cost will be " . "R"; echo $Alexandra->price*$diff;
    echo " <br>Facilities Include:<br>";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
    echo "";
   //Div that contains buttons to confirm booking or cancel them 
    echo "<div class=\"control\" >";
        echo "<form action=\"finish.php\" >";
        echo "<button class=\"button\" name=\"book\">Book</button>";
        echo "</form>";
        echo "</div>";
        echo "<div class=\"control\" id=\"cancel\">";
        echo "<a href =\"index.php\"> <button class=\"button\">Cancel</button></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    //End of Div 
}

            ?>
                   
            <!-- End of the scrips to display information -->
      
</body>
</html>