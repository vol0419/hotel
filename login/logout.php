<!DOCTYPE html>
<html>
<body bgcolor="#00ccff">

<?php
	session_start();
	session_destroy();
?>
<br><br>
<a>Wylogowano pomyslnie!<a>
<br>

<form action="index.html">
  <input type="submit" value="Zaloguj">
</form> 
<form action="index.html">
  <input type="submit" value="Strona Główna">
</form>  

</body>
</html>  
