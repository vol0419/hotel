<?php

include "polacz.php";
$id = wczytaj("nr");
$num = wczytaj("num");
$max = wczytaj("max");
$cena = wczytaj("cena");
$typ = wczytaj("typ");
$udog = wczytaj("udog");

$quest = ("UPDATE `pokoje` SET `nr`=$num, `max_osob`=$max,`cena_za_dobe`='$cena', `typ`='$typ', `udogodnieniaID`=$udog WHERE `id_pokoje`=$id");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed update...";
}
$baza->close();

?>