<html>
 <head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >
    <link rel="Stylesheet" type="text/css" href="../../style.css" />
  <title>Panel admina</title>
	<?php include "menu.html"; ?>
 </head>
 <body>
 <?php include('checkIFlogged.php') ?>
 <h1>Panel Administratora</h1>
 <a>Adresy:</a><br /><br />
  <table border="1">
   <tr>
     <th>ID</th><th>Miasto</th><th>Ulica</th><th>Numer</th><th>Kod</th>
     <th>Edycja</th><th>Usuwanie</th>
   </tr>
<?php
include "polacz.php";
if ($sql =  $baza->prepare("SELECT * FROM adresy ORDER BY id_adresy"))
{
        $sql->execute();
        $sql->bind_result($id, $miasto, $ulica, $nr, $kod);
        while ($sql->fetch())
        {
                echo "<tr>
                        <td>$id</td>
                        <td>$miasto</td>
                        <td>$ulica</td>
                        <td>$nr</td>
                        <td>$kod</td>
                        <td><a href=\"edycja.php?nr=$id\">Edytuj</a></td>
                        <td><a href=\"usun.php?nr=$id\" onclick=\"javascript:return confirm('Czy na pewno usun��?'); \">Usu�</a></td>
                   </tr>";
        }
        $sql->close();
 }
else die( "B��d w zapytaniu SQL! Sprawd� kod SQL w PhpMyAdmin." );

 $baza->close();
?>
  </table>
		<form action="dodaj.php">
		  <input type="submit" value="Dodawanie nowego">
		</form> 
		<?php include "stopka.html"; ?>
 </body>
</html>