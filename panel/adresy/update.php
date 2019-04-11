<?php

include "polacz.php";
$id_adresy = wczytaj("nr");
$miasto = wczytaj("miasto");
$ulica = wczytaj("ulica");
$numer = wczytaj("numer");
$kod = wczytaj("kod");

$quest = ("UPDATE `adresy` SET `miasto`='$miasto', `ulica`='$ulica', `numer`=$numer, `kod_pocztowy`=$kod WHERE `id_adresy`=$id_adresy");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed update...";
}
$baza->close();

?>