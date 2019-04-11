<?php

include "polacz.php";
$id_udogodnienia = wczytaj("nr");
$kuchnia = wczytaj("kuchnia");
$balkon = wczytaj("balkon");
$lozko = wczytaj("lozko");
$tv = wczytaj("tv");
$wifi = wczytaj("wifi");
$lazienka = wczytaj("lazienka");
echo $kuchnia . $lozko;
$quest = ("INSERT INTO `udogodnienia` ( `id_udogodnienia`, `kuchnia`, `balkon`, `duze_lozko`, `telewizor`, `wifi`, `lazienka`) 
	VALUES ( $id_udogodnienia, $kuchnia, $balkon, $lozko, $tv, $wifi, $lazienka) ");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed adding record...";
}
$baza->close();
?>
