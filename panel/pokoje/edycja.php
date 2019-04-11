<?php

include "polacz.php";
$nr = wczytaj("nr");
if ( $sql = $baza->prepare( "SELECT * FROM pokoje WHERE id_pokoje = ?;"))
{
  $sql->bind_param("i" ,$nr);
  $sql->execute();
  $sql->bind_result($id, $num, $max, $cena, $typ, $udog);
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
      <tr><td>Numer</td><td><input name="num" value="'.$num.'"></td></tr>
      <tr><td>Max osób</td><td><input name="max" value="'.$max.'"></td></tr>
      <tr><td>Cena za dobe</td><td><input type="number" name="cena" value="'.$cena.'"></td></tr>
	  <tr><td>Typ</td><td><input name="typ" value="'.$typ.'"></td></tr>
	  <tr><td>Udogodnienia ID</td><td><input type="number" name="udog" value="'.$udog.'"></td></tr>
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