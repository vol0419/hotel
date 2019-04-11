<?php

include "polacz.php";
$id_adresy = null;
$miasto = wczytaj("miasto");
$ulica = wczytaj("ulica");
$numer = wczytaj("numer");
$kod = wczytaj("kod");
$quest = ("INSERT INTO `adresy` ( `miasto`, `ulica`, `numer`, `kod_pocztowy`) VALUES ( '$miasto', '$ulica', $numer, $kod) ");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed adding record...";
}
$baza->close();
?>
