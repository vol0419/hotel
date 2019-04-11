<?php

include "polacz.php";
$id_pracownicy = null;
$imie = wczytaj("imie");
$nazwisko = wczytaj("nazwisko");
$pesel = wczytaj("pesel");
$tel = wczytaj("tel");
$quest = ("INSERT INTO `pracownicy` ( `imie`, `nazwisko`, `pesel`, `telefon`) VALUES ( '$imie', '$nazwisko', $pesel, $tel) ");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed adding record...";
}
$baza->close();
?>
