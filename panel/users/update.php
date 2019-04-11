<?php

include "polacz.php";
$id= wczytaj("nr");
$login = wczytaj("log");
$pass = wczytaj("pass");

$quest = ("UPDATE users SET login='$login', password='$pass' WHERE id_users=$id");
if(mysqli_query($baza, $quest)){
	header ("Location: index.php");
} else{
	echo "Failed update...";
}
$baza->close();

?>