<!DOCTYPE html>
<html>
<body bgcolor="#00ccff">

<?php
	session_start();
	if ($_SESSION['logged'] != 1) {
		header('Location: login.html');
    }
	echo "Witaj " . $_SESSION['nick'] . "\n";
?>
<br><br>
<textarea rows="4" cols="40">
Strona jest dostepna jedynie dla zalogowanych!
</textarea>
<br>

<form action="/lab10/logout.php">
  <input type="submit" value="Log Out">
</form> 
 
</body>
</html>  
