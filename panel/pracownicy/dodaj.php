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
      <tr><td>Imie</td><td><input name="imie" ></td></tr>
      <tr><td>Nazwisko</td><td><input name="nazwisko" ></td></tr>
      <tr><td>Pesel</td><td><input type="number" name="pesel" ></td></tr>
      <tr><td>Telefon</td><td><input type="number" name="tel" ></td></tr>
      <tr><td colspan="2"><input type="submit" value="wstaw"></td></tr>
    </table>
  </form>
 </body>
</html>