<?php

include "polacz.php";
$idpracownicy = wczytaj("nr");
$imie = wczytaj("imie");
$nazwisko = wczytaj("nazwisko");
$pesel = wczytaj("pesel");
$tel = wczytaj("tel");

$quest = ("UPDATE pracownicy SET imie='$imie', nazwisko='$nazwisko', pesel=$pesel, telefon=$tel WHERE idpracownicy=$idpracownicy");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed update...";
}
$baza->close();

?>