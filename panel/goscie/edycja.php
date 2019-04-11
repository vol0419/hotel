<?php

include "polacz.php";
$nr = wczytaj("nr");
if ( $sql = $baza->prepare( "SELECT * FROM goscie WHERE id_goscie = ?;"))
{
  $sql->bind_param("i" ,$nr);
  $sql->execute();
  $sql->bind_result($id, $imie, $nazwisko, $pesel, $tel);
  if (!$sql->fetch())  die("Blad!!! Brak rekordu do edycji w bazie!!! Liczba rekodow:".$sql->num_rows);


 /////////////////////// HTML w PHP
 echo '
 <html>
  <head>
   <meta charset="utf-8">
   <title>Edycja obiektu</title>
  </head>
  <body>
   <h1>Edycja rekordu z bazy</h1>
   <form method="get" action="update.php">
    <table border="0">
      <tr><td>ID</td><td><input name="nr" value="'.$nr.'" disabled>
              <input type="hidden" name="nr" value="'.$nr.'">  </td></tr>
      <tr><td>Imie</td><td><input name="imie" value="'.$imie.'"></td></tr>
      <tr><td>Nazwisko</td><td><input name="nazwisko" value="'.$nazwisko.'"></td></tr>
      <tr><td>Pesel</td><td><input type="number" name="pesel" value="'.$pesel.'"></td></tr>
      <tr><td>Telefon</td><td><input type="number" name="tel" value="'.$tel.'"></td></tr>
      <tr><td colspan="2"><input type="submit" value="zapisz zmiany"></td></tr>
    </table>
   </form>
  </body>
 </html>
 ';
 $sql->close();
 }
$baza->close();
?>