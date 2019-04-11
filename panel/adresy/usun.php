<?php

include "polacz.php";
$id_adresy = wczytaj("nr");
$quest = ("DELETE FROM adresy WHERE id_adresy = $id_adresy");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "failed update";
}
$baza->close();
?>