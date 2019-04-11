<html>
 <head>
  <meta charset="utf-8">
  <title>Dodaj nowy obiekt</title>
 </head>
 <body>

  <h1>Dodawanie do bazy</h1>
  <form method="get" action="insert.php">
    <table border="0">
      <tr><td>ID</td><td><input name="nr" disabled></td></tr>
      <tr><td>Numer</td><td><input type="number" name="num" ></td></tr>
      <tr><td>Max Osób</td><td><input type="number" name="max" ></td></tr>
      <tr><td>Cena za dobe</td><td><input type="number" name="cena" ></td></tr>
      <tr><td>Typ</td><td><input name="typ" ></td></tr>
	  <tr><td>Udogodnienia ID</td><td><input type="number" name="udog" ></td></tr>
      <tr><td colspan="2"><input type="submit" value="wstaw"></td></tr>
    </table>
  </form>
 </body>
</html>