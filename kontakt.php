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
      <p> Hotel Maeve </p>
      <p> Kontakt: </p>
      <p> Mail: <a href="mailto:kontakt@maeve-hotel.pl"> <font color="white">kontakt@maeve-hotel.pl</font> </a> </p>
      <p> Telefon: <a href="tel:48543431123"> <font color="white">+48 543 431 123</font> </a> </p>
		<div style="max-width:560px; margin:0;">
			<div class="embed-container" style="margin-top: 2em;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d610.9649418103377!2d21.00435932924232!3d52.22776552019397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe1ecaf5ceac7a006!2sMarriott+Hotel!5e0!3m2!1spl!2spl!4v1497288714321" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></small></div>
		</div>
    </div>
    <div id="stopka">
      <?php
        include("stopka.php");
      ?>
    </div>
    </div>
  </body>
</html>
