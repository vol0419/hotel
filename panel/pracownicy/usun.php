<?php

include "polacz.php";
$idpracownicy = wczytaj("nr"); 
$quest = ("DELETE FROM pracownicy WHERE idpracownicy = $idpracownicy");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "failed update";
}
$baza->close();
?>