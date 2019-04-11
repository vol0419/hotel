<?php

include "polacz.php";
$id = wczytaj("nr"); 
$quest = ("DELETE FROM hotele WHERE id_hotele = $id");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "failed update";
}
$baza->close();
?>