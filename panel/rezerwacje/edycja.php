<?php

include "polacz.php";
$nr = wczytaj("nr");
if ( $sql = $baza->prepare( "SELECT * FROM rezerwacje WHERE id_rezerwacje = ?;"))
{
  $sql->bind_param("i" ,$nr);
  $sql->execute();
  $sql->bind_result($id, $goscID, $pokojID, $datap, $dataw);
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
		<tr><td>Gość ID</td><td><input type="number" name="goscID" value="'.$goscID.'"></td></tr>
		<tr><td>Pokój ID</td><td><input type="number" name="pokojID" value="'.$pokojID.'"></td></tr>
      <tr><td>Data Przyjazdu</td><td><input type="date" name="datap" value="'.$datap.'"></td></tr>
      <tr><td>Data Wyjazdu</td><td><input type="date" name="dataw" value="'.$dataw.'"></td></tr>
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