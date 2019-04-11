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

      <?php
       session_start();

       include("panel/polacz.php");
	   
		date_default_timezone_set('Europe/Warsaw');
		$currentdate = date('Y/m/d', time());

	   if( $_POST['datap'] > $_POST['dataw'] /*|| $_POST['datap'] < $currentdate*/){
		   echo "Wybrano niepoprawne daty. Spróbuj ponownie.";
	   }else{
			$osob = strval($_POST['osob']);
			$standard = strval($_POST['standard']);
			$datap = strval($_POST['datap']);
			$dataw = strval($_POST['dataw']);
			$imie = strval($_POST['imie']);
			$nazwisko = strval($_POST['nazwisko']);
			$tel = strval($_POST['tel']);
			$pesel = strval($_POST['pesel']);

			$quest = "SELECT cena_za_dobe FROM pokoje WHERE max_osob=$osob AND udogodnieniaID=$standard LIMIT 1";
			$result = mysqli_query($baza, $quest); 
			$cena = mysqli_fetch_assoc($result);
			$days_between = ceil(abs($_POST['dataw'] - $_POST['datap']) / 86400);
			echo $days_between ;
			$cena = intval($cena)*intval($days_between);

			  echo "Twoja rezerwacja: <br />";
			  echo "<br />" . $imie . " " . $nazwisko . "<br /> Tel. " . $tel . "<br /> Pesel: " . $pesel . "<br /> Pokój " . $osob . "-osobowy <br />" 
				. "Od " . $datap . " do " . $dataw . "<br /> Koszty: " . $cena ;

			  /*while ( $row = mysqli_fetch_assoc($show) ) {
				echo $row['cena']. " zł" . "<br>";
				$_SESSION['cena'] = $row;
			  }
	*/
			  $_SESSION['osob'] = $osob;
			  $_SESSION['standard'] = $standard;
			  $_SESSION['datap'] = $datap;
			  $_SESSION['dataw'] = $dataw;
			  $_SESSION['imie'] = $imie;
			  $_SESSION['nazwisko'] = $nazwisko;
			  $_SESSION['tel'] = $tel;
			  $_SESSION['pesel'] = $pesel;
		   
	   }

       
       mysqli_close($baza);
     ?>
      <form action="check.php">
        <input type="submit" value="Potwierdź">
      </form>
    <div id="stopka">
      <?php
        include("stopka.php");
      ?>
    </div>
  </div>
  </body>
</html>
