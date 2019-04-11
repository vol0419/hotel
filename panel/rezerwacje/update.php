<?php

include "polacz.php";
$id = wczytaj("nr");
$goscID = wczytaj("goscID");
$pokojID = wczytaj("pokojID");
$datap = wczytaj("datap");
$dataw = wczytaj("dataw");

$quest = ("UPDATE `rezerwacje` 
	SET `goscID`=$goscID, `pokojID`=$pokojID, `data_przyjazdu`='$datap', `data_wyjazdu`='$dataw'
	WHERE `id_rezerwacje`=$id");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed update...";
}
$baza->close();

?>