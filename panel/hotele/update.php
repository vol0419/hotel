<?php

include "polacz.php";
$id= wczytaj("nr");
$nazwa = wczytaj("nazwa");
$adresid = wczytaj("adresid");

$quest = ("UPDATE hotele SET nazwa='$nazwa', adresID='$adresid' WHERE id_hotele=$id");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed update...";
}
$baza->close();

?>