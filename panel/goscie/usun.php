<?php

include "polacz.php";
$id_goscie = wczytaj("nr"); //wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
$quest = ("DELETE FROM goscie WHERE id_goscie = $id_goscie");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "failed update";
}
$baza->close();
?>