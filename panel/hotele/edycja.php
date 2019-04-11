<?php

include "polacz.php";
$nr = wczytaj("nr");
if ( $sql = $baza->prepare( "SELECT * FROM hotele WHERE id_hotele = ?;"))
{
  $sql->bind_param("i" ,$nr);
  $sql->execute();
  $sql->bind_result($id, $nazwa, $adresid);
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
      <tr><td>Nazwa</td><td><input name="nazwa" value="'.$nazwa.'"></td></tr>
      <tr><td>Adres ID</td><td><input type="number" name="adresid" value="'.$adresid.'"></td></tr>
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