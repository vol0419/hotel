<?php

include "polacz.php";
$id = null;
$nazwa = wczytaj("nazwa");
$adresid = wczytaj("adresid");
$quest = ("INSERT INTO `hotele` ( `nazwa`, `adresID`) VALUES ( '$nazwa', $adresid) ");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed adding record...";
}
$baza->close();
?>
