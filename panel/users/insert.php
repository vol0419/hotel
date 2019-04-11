<?php

include "polacz.php";
$id = null;
$log = wczytaj("log");
$pass = wczytaj("pass");
$quest = ("INSERT INTO `users` ( `login`, `password`) VALUES ( '$log', '$pass') ");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed adding record...";
}
$baza->close();
?>
