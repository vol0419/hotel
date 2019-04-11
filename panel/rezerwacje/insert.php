<?php

include "polacz.php";
$id = null;
$goscID = wczytaj("goscID");
$pokojID = wczytaj("pokojID");
$datap = wczytaj("datap");
$dataw = wczytaj("dataw");
$quest = ("INSERT INTO `rezerwacje` ( `goscID`, `pokojID`, `datap`, `dataw`) VALUES ( $goscID, $pokojID, '$datap', '$dataw') ");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed adding record...";
}
$baza->close();
?>
