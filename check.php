<!DOCTYPE html>
<html>

  <body>
    <div id="tlo">
    <div id="head">
      <img src="img/head_image.jpg" alt="IMAGE">
    </div>

    <div id="menu1">
      <?php include ('menu.php') ?>
    </div>

    <div id="body1">

      <?php
       session_start();

		$conn = new  mysqli("localhost", "root", "", "hotel");

       //mysqli_select_db($dbname) or die('Błąd: nie udało się wybrać schematu bazy danych.');
	   
		$osob = $_SESSION['osob'];
		$standard = $_SESSION['standard'];
		$datap = $_SESSION['datap'];
		$dataw = $_SESSION['dataw'];
		$imie = $_SESSION['imie'];
		$nazwisko = $_SESSION['nazwisko'];
		$tel = $_SESSION['tel'];
		$pesel = $_SESSION['pesel'];
			
       //$cena = intval(implode("|",$_SESSION['cena']));

		$insert1 = mysqli_query($conn, "INSERT INTO goscie (imie, nazwisko, pesel, telefon) VALUES ('$imie','$nazwisko','$pesel','$tel')");
		
			$quest="SELECT cena_za_dobe FROM pokoje WHERE max_osob='2' AND udogodnieniaID='1' LIMIT 1";
			$result = mysqli_query($conn, $quest); 
			$row = mysqli_fetch_assoc($result);
			$row = intval($row);
		if($insert1){
			
		}else echo "Błąd! ";
		
			$quest2="SELECT id_pokoje FROM pokoje WHERE max_osob='2' AND udogodnieniaID='1' LIMIT 1";
			$result = mysqli_query($conn, $quest); 
			$row2 = mysqli_fetch_assoc($result);
			$row2 = intval($row2);			
			
		$insert = mysqli_query($conn, "INSERT INTO rezerwacje (goscID, pokojID, data_przyjazdu, data_wyjazdu) VALUES ('$row','$row2','$datap','$dataw')");
       if($insert){

         echo "Pomyślnie zarezerwowano. <br />" . $imie . " " . $nazwisko . "<br />";

       }else echo "Błąd";



       mysqli_close($conn);
     ?>
      <form action="index.php">
        <input type="submit" value="Powrót do strony głównej">
      </form>
    <div id="stopka">
      <?php
        include("stopka.php");
      ?>
    </div>
  </div>
  </body>
</html>
