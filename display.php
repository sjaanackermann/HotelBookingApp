<?php
session_start();
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
        <div class="box" id="move">
            <!-- PHP scripts that takes the information from the index page and displays it on this one -->
            <?php 
if ($_POST['hotel1']) {
   echo "<div class=\"column\">";
    echo "<div class=\"box\" id=\"move\">";
     echo "Greetings " .$_POST['name']; 
     echo " ". $_POST['surname']; 
     echo " You are booking the ";
     echo $Yotel->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. It will cost " . "R"; echo $Yotel->price*$diff;
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
     echo " You are booking the ";
     echo $Ibis->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. It will cost " . "R"; echo $Ibis->price*$diff;
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
     echo " You are booking the ";
     echo $Indigo->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. It will cost " . "R"; echo $Indigo->price*$diff;
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
     echo " You are booking the ";
     echo $$Indigo->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. It will cost " . "R"; echo $$Indigo->price*$diff;
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
     echo " You are booking the ";
     echo $$Indigo->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. It will cost " . "R"; echo $$Indigo->price*$diff;
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
     echo " You are booking the ";
     echo $$Indigo->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. It will cost " . "R"; echo $$Indigo->price*$diff;
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
     echo " You are booking the ";
     echo $$Indigo->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. It will cost " . "R"; echo $$Indigo->price*$diff;
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
     echo " You are booking the ";
     echo $$Indigo->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. It will cost " . "R"; echo $$Indigo->price*$diff;
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
     echo " You are booking the ";
     echo $$Indigo->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. It will cost " . "R"; echo $$Indigo->price*$diff;
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
     echo " You are booking the ";
     echo $Alexandra ->name. " Hotel for ";
     $date1 = $_POST['in'];  
     $date2 = $_POST['out'];
    // Formula to convert the dates into days   
    $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
    echo $diff. " nights. It will cost " . "R"; echo $Alexandra->price*$diff;
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