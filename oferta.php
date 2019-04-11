<html>

  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
  </head>

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
	
      <h1> Pokój 2-osobowy - typu superior <button id="but1" class="togglebutton">Pokaż/Ukryj</button> </h1>
	  <?php
		$baza = new  mysqli("localhost", "root", "", "hotel");
		$quest="SELECT cena_za_dobe FROM pokoje WHERE max_osob='2' AND udogodnieniaID='1' LIMIT 1";
		$result = mysqli_query($baza, $quest); 
		$row = mysqli_fetch_assoc($result);
		?>
		<table id="tab1" hidden>
		<tr>
          <th>Cena</th>
          <th><?php echo $row['cena_za_dobe'] ?></th>
        </tr>
		<?php
		include "polacz.php";
		if ($sql =  $baza->prepare("SELECT * FROM udogodnienia WHERE id_udogodnienia='1'"))
		{
				$sql->execute();
				$sql->bind_result($nr, $kuchnia, $balkon, $duzelozko, $tv, $wifi, $lazienka);
				while ($sql->fetch())
				{
					echo "
						<tr>
							<tr>
							  <td>Kuchnia</td>
							  <td> ".( $kuchnia==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Balkon</td>
							  <td> ".( $balkon==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Duże łóżko</td>
							  <td> ".( $duzelozko==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Telewizor</td>
							  <td> ".( $tv==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>WiFi</td>
							  <td> ".( $wifi==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Łazienka</td>
							  <td> ".( $lazienka==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						   					   
					";
				}
				$sql->close();
		 }
		else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin." );
		
		$baza->close();
		?>
      </table>

      <h1> Pokój 2-osobowy - typu standard <button id="but2" class="togglebutton">Pokaż/Ukryj</button> </h1>
	  <?php
		$baza = new  mysqli("localhost", "root", "", "hotel");
		$quest="SELECT cena_za_dobe FROM pokoje WHERE max_osob='2' AND udogodnieniaID='2' LIMIT 1";
		$result = mysqli_query($baza, $quest); 
		$row = mysqli_fetch_assoc($result);
		?>
		<table id="tab2" hidden>
		<tr>
          <th>Cena</th>
          <th><?php echo $row['cena_za_dobe'] ?></th>
        </tr>
		<?php
		if ($sql =  $baza->prepare("SELECT * FROM udogodnienia WHERE id_udogodnienia='2'"))
		{
				$sql->execute();
				$sql->bind_result($nr, $kuchnia, $balkon, $duzelozko, $tv, $wifi, $lazienka);
				while ($sql->fetch())
				{
					echo "
						<tr>
							<tr>
							  <td>Kuchnia</td>
							  <td> ".( $kuchnia==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Balkon</td>
							  <td> ".( $balkon==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Duże łóżko</td>
							  <td> ".( $duzelozko==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Telewizor</td>
							  <td> ".( $tv==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>WiFi</td>
							  <td> ".( $wifi==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Łazienka</td>
							  <td> ".( $lazienka==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						   					   
					";
				}
				$sql->close();
		 }
		else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin." );
		
		$baza->close();
		?>
      </table>

      <h1> Pokój 5-osobowy - typu superior <button id="but3" class="togglebutton">Pokaż/Ukryj</button> </h1>
	  <?php
		$baza = new  mysqli("localhost", "root", "", "hotel");
		$quest="SELECT cena_za_dobe FROM pokoje WHERE max_osob='5' AND udogodnieniaID='1' LIMIT 1";
		$result = mysqli_query($baza, $quest); 
		$row = mysqli_fetch_assoc($result);
		?>
		<table id="tab3" hidden>
		<tr>
          <th>Cena</th>
          <th><?php echo $row['cena_za_dobe'] ?></th>
        </tr>
		<?php
		if ($sql =  $baza->prepare("SELECT * FROM udogodnienia WHERE id_udogodnienia='1'"))
		{
				$sql->execute();
				$sql->bind_result($nr, $kuchnia, $balkon, $duzelozko, $tv, $wifi, $lazienka);
				while ($sql->fetch())
				{
					echo "
						<tr>
							<tr>
							  <td>Kuchnia</td>
							  <td> ".( $kuchnia==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Balkon</td>
							  <td> ".( $balkon==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Duże łóżko</td>
							  <td> ".( $duzelozko==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Telewizor</td>
							  <td> ".( $tv==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>WiFi</td>
							  <td> ".( $wifi==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						<tr>
							<tr>
							  <td>Łazienka</td>
							  <td> ".( $lazienka==1 ? "Jest" : "Brak" )."</td>
							</tr>
						</tr>
						   					   
					";
				}
				$sql->close();
		 }
		else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin." );
		
		$baza->close();
		?>
      </table>

    </div>
    <div id="stopka">
      <?php
        include("stopka.php");
      ?>
    </div>
  </div>
  </body>
</html>
