<?php

include "polacz.php";
$id_goscie = wczytaj("nr");
$imie = wczytaj("imie");
$nazwisko = wczytaj("nazwisko");
$pesel = wczytaj("pesel");
$tel = wczytaj("tel");

$quest = ("UPDATE goscie SET imie='$imie', nazwisko='$nazwisko', pesel=$pesel, telefon=$tel WHERE id_goscie=$id_goscie");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed update...";
}
$baza->close();

?>