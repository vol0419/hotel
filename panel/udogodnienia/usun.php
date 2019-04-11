<?php

include "polacz.php";
$id_udogodnienia = wczytaj("nr");
$quest = ("DELETE FROM udogodnienia WHERE id_udogodnienia = $id_udogodnienia");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "failed update";
}
$baza->close();
?>