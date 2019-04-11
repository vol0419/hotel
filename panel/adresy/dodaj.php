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
      <tr><td>Miasto</td><td><input name="miasto" ></td></tr>
      <tr><td>Ulica</td><td><input name="ulica" ></td></tr>
      <tr><td>Numer</td><td><input type="number" name="numer" ></td></tr>
      <tr><td>Kod pocztowy</td><td><input type="number" name="kod" ></td></tr>
      <tr><td colspan="2"><input type="submit" value="wstaw"></td></tr>
    </table>
  </form>
 </body>
</html>