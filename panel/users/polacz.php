<?php

function wczytaj($zmienna)
{
           if (!isset($_GET[$zmienna]) || $_GET[$zmienna]=="" && $zmienna!="nr")
                die( "Blad! brak zmiennej: ".$zmienna ); 
           return $_GET[$zmienna];
}
$baza = new  mysqli("localhost", "root", "", "hotel");
if (mysqli_connect_errno())  die( "Blad: ".mysqli_connect_error() );
?>