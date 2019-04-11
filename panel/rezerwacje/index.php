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
 <a>Rezerwacje:</a><br /><br />
  <table border="1">
   <tr>
     <th>ID</th><th>Data przyjazdu</th><th>Data wyjazdu</th><th>Imie</th><th>Nazwisko</th><th>Pesel</th><th>Telefon</th>
	 <th>Numer pokoju</th><th>Max osób</th><th>Cena za dobe</th><th>Typ</th><th>Udogodnienia ID</th>
     <th>Edycja</th><th>Usuwanie</th>
   </tr>
<?php
include "polacz.php";
if ($sql =  $baza->prepare("SELECT * FROM rezerwacje, goscie, pokoje WHERE goscie.id_goscie=rezerwacje.goscID AND pokoje.id_pokoje=rezerwacje.pokojID ORDER BY nazwisko"))
{
        $sql->execute();
        $sql->bind_result($id, $goscID, $pokojID, $datap, $dataw, $idg, $imie, $nazwisko, $pesel, $tel, $idp, $num, $max, $cena, $typ, $udog);
        while ($sql->fetch())
        {
                echo "<tr>
                        <td>$id</td>
						<td>$datap</td>
						<td>$dataw</td>
                        <td>$imie</td>
                        <td>$nazwisko</td>
                        <td>$pesel</td>
                        <td>$tel</td>
						<td>$num</td>
						<td>$max</td>
						<td>$cena</td>
						<td>$typ</td>
						<td>$udog</td>
                        <td><a href=\"edycja.php?nr=$id\">Edytuj</a></td>
                        <td><a href=\"usun.php?nr=$id\" onclick=\"javascript:return confirm('Czy na pewno usun¹æ?'); \">Usuñ</a></td>
                   </tr>";
        }
        $sql->close();
 }
else die( "B³¹d w zapytaniu SQL! SprawdŸ kod SQL w PhpMyAdmin." );

 $baza->close();
?>
  </table>
		<form action="dodaj.php">
		  <input type="submit" value="Dodawanie nowego">
		</form> 
		<?php include "stopka.html"; ?>
 </body>
</html>