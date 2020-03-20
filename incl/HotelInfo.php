<?php 
//Required Includes
require_once "incl/HotelClass.php";


?>

<?php

//hotel ammenities///Name,Price,Wifi,pool,bar,spa,buffet, smoking, parking
$Yotel = new Hotel("Yotel", 500, true, false, true, false, true, false, true);
$Ibis = new Hotel("Ibis_Styles", 750, true, true, true, false, true, false, true);
$Indigo = new Hotel("Hotel_Indigo", 1000, true, true, true, true, true, false, true);
$Sandman = new Hotel("Sandman_Signature", 800, true, false, true, false, false, true, false);
$Sleeperz = new Hotel("Sleeperz_Hotel", 600, false, false, true, false, false, true, false);
$Motel = new Hotel("Motel_One", 550, false, false, true, false, true, false, true);
$Radisson = new Hotel("Radisson_Red", 1000, true, true, true, true, true, false, true);
$Residence = new Hotel("Residence_Inn", 1000, true, false, true, true, true, false, true);
$Hampton = new Hotel("Hampton", 1000, true, false, true, true, true, false, true);
$Alexandra = new Hotel("Alexandra_Hotel", 1200, true, false, true, true, true, false, true);

$allHotels = array($Yotel, $Ibis, $Indigo, $Sandman, $Sleeperz, $Motel, $Raddisons, $Residence, $Hampton, $Alexandra);
?>