<?php

include "polacz.php";
$id = null;
$num = wczytaj("num");
$max = wczytaj("max");
$cena = wczytaj("cena");
$typ = wczytaj("typ");
$udog = wczytaj("udog");
$quest = ("INSERT INTO `pokoje` ( `nr`, `max_osob`, `cena_za_dobe`, `typ`, `udogodnieniaID`) 
	VALUES ( $num, '$max', $cena, '$typ', $udog) ");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed adding record...";
}
$baza->close();
?>
