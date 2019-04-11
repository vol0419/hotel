<html>
 <head>
  <meta charset="utf-8">
  <title>Dodaj nowy obiekt</title>
 </head>
 <body>

  <h1>Dodawanie do bazy</h1>
  <a><font color="red">Uwaga, zalecane jest dodawanie rekordów do tej tabeli za pomocą formularza na stronie głównej! >>></font><a href="../../kupbilet.php"> LINK</a></a><br /><br />
  <form method="get" action="insert.php">
    <table border="0">
      <tr><td>ID</td><td><input name="nr" disabled></td></tr>
      <tr><td>ID gościa</td><td><input name="goscID" ></td></tr>
      <tr><td>ID pokoju</td><td><input name="pokojID" ></td></tr>
      <tr><td>Data przyjazdu (mm/dd/yyyy)</td><td><input type="date" name="datap" ></td></tr>
      <tr><td>Data wyjazdu (mm/dd/yyyy)</td><td><input type="date" name="dataw" ></td></tr>
      <tr><td colspan="2"><input type="submit" value="wstaw"></td></tr>
    </table>
  </form>
 </body>
</html>