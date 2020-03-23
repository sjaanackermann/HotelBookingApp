<?php 
//Required Includes
require_once "incl/HotelClass.php";


?>

<?php

//hotel ammenities///Name,Price,Wifi,pool,bar,spa,buffet, smoking, parking
$Yotel = new Hotel("Yotel", 500, true, false, true, false, true, false, true);
$Ibis = new Hotel("Ibis Styles", 750, true, true, true, false, true, false, true);
$Indigo = new Hotel("Indigo", 1000, true, true, true, true, true, false, true);
$Sandman = new Hotel("Sandman Signature", 800, true, false, true, false, false, true, false);
$Sleeperz = new Hotel("Sleeperz", 600, false, false, true, false, false, true, false);
$Motel = new Hotel("Motel One", 550, false, false, true, false, true, false, true);
$Radisson = new Hotel("Radisson Red", 1000, true, true, true, true, true, false, true);
$Residence = new Hotel("Residence Inn", 1000, true, false, true, true, true, false, true);
$Hampton = new Hotel("Hampton", 1000, true, false, true, true, true, false, true);
$Alexandra = new Hotel("Alexandra", 1200, true, false, true, true, true, false, true);

$allHotels = array($Yotel, $Ibis, $Indigo, $Sandman, $Sleeperz, $Motel, $Radisson, $Residence, $Hampton, $Alexandra);
?>