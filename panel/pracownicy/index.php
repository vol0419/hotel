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
 <a>Pracownicy:</a><br /><br />
  <table border="1">
   <tr>
     <th>ID</th><th>Imie</th><th>Nazwisko</th><th>Pesel</th><th>Telefon</th>
     <th>Edycja</th><th>Usuwanie</th>
   </tr>
<?php
include "polacz.php";
if ($sql =  $baza->prepare("SELECT * FROM pracownicy ORDER BY nazwisko"))
{
        $sql->execute();
        $sql->bind_result($id, $imie, $nazwisko, $pesel, $tel);
        while ($sql->fetch())
        {
                echo "<tr>
                        <td>$id</td>
                        <td>$imie</td>
                        <td>$nazwisko</td>
                        <td>$pesel</td>
                        <td>$tel</td>
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