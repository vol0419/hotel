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
     <th>ID</th><th>Numer</th><th>Max osób</th><th>Cena za dobe</th><th>typ</th><th>Udogodnienia ID</th>
     <th>Edycja</th><th>Usuwanie</th>
   </tr>
<?php
include "polacz.php";
if ($sql =  $baza->prepare("SELECT * FROM pokoje ORDER BY id_pokoje"))
{
        $sql->execute();
        $sql->bind_result($id, $num, $max, $cena, $typ, $udog);
        while ($sql->fetch())
        {	
                echo "<tr>
                        <td>$id</td>
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