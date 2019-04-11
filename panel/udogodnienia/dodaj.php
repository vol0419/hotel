<html>
 <head>
  <meta charset="utf-8">
  <title>Dodaj nowy obiekt</title>
 </head>
 <body>

  <h1>Dodawanie do bazy</h1>
  <form method="get" action="insert.php">
    <table border="0">
      <tr><td>ID</td><td><input name="nr" ></td></tr>
	  <input type='hidden' value='0' name='selfdestruct'>
      <tr><td>Kuchnia</td><td><input name="kuchnia" type="checkbox" value="1" ></td></tr>
	  <input type='hidden' value='0' name='kuchnia'>
      <tr><td>Balkon</td><td><input name="balkon" type="checkbox" value="1" checked></td></tr>
	  <input type='hidden' value='0' name='balkon'>
      <tr><td>Duże Łóżko</td><td><input type="checkbox" value="1" checked name="lozko" ></td></tr>
	  <input type='hidden' value='0' name='lozko'>
      <tr><td>TV</td><td><input type="checkbox" value="1" checked name="tv" ></td></tr>
	  <input type='hidden' value='0' name='tv'>
	  <tr><td>WiFi</td><td><input type="checkbox" value="1" checked name="wifi" ></td></tr>
	  <input type='hidden' value='0' name='wifi'>
	  <tr><td>Łazienka</td><td><input type="checkbox" value="1" checked name="lazienka" ></td></tr>
      <tr><td colspan="2"><input type="submit" value="lazienka"></td></tr>
    </table>
  </form>
 </body>
</html>