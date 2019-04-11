<!DOCTYPE html>
<html>

  <body>
    <div id="tlo">
    <div id="head">
	<?php
      include("head.php");
	?>
    </div>

    <div id="menu1">
      <?php include ('menu.php') ?>
    </div>

    <div id="body1">

      <div id=menubilety>

        <form action="kupiony.php" method="post">
			<p>Wybierz pokoj:</p>
        <select name="osob">
          <option value="2">2-osobowy</option>
          <option value="3">3-osobowy</option>
          <option value="4">4-osobowy</option>
          <option value="5">5-osobowy</option>
          <option value="6">6-osobowy</option>
        </select>
			<p>Wybierz standard pokoju:</p>
        <select name="standard">
          <option value="2">Typu Standard</option>
          <option value="1">Typu Superior</option>
        </select>
		
      <p>Wybierz datę przyjazdu: (MM-DD-RRRR)</p>
      <input type="date" name="datap" value=""/>

      <p>Wybierz datę wyjazdu: (MM-DD-RRRR)</p>
      <input type="date" name="dataw" value=""/>

      <p>Imię:</p>
      <input type="text" name="imie">

      <p>Nazwisko:</p>
      <input type="text" name="nazwisko">
	  
	  <p>Nr telefonu:</p>
      <input type="number" name="tel">

	  <p>Pesel:</p>
      <input type="number" name="pesel">

      <input type="submit" value="Potwierdź">
      </form>

    </div>
    </div>
    <div id="stopka">
      <?php
        include("stopka.php");
      ?>
    </div>
  </body>
</html>
