<?php

include "polacz.php";
$id = wczytaj("nr");
$quest = ("DELETE FROM rezerwacje WHERE id_rezerwacje = $id");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "failed update";
}
$baza->close();
?>