<?php

include "polacz.php";
$nr = wczytaj("nr");
if ( $sql = $baza->prepare( "SELECT * FROM adresy WHERE id_adresy = ?;"))
{
  $sql->bind_param("i" ,$nr);
  $sql->execute();
  $sql->bind_result($id, $miasto, $ulica, $numer, $kod);
  if (!$sql->fetch())  die("Blad!!! Brak rekordu do edycji w bazie!!! Liczba rekodow:".$sql->num_rows);


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
      <tr><td>Miasto</td><td><input name="miasto" value="'.$miasto.'"></td></tr>
      <tr><td>Ulica</td><td><input name="ulica" value="'.$ulica.'"></td></tr>
      <tr><td>Numer</td><td><input type="number" name="numer" value="'.$numer.'"></td></tr>
      <tr><td>Kod pocztowy</td><td><input type="number" name="kod" value="'.$kod.'"></td></tr>
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