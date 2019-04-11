	<?php
		session_start();
		if ($_SESSION['logged'] != 1 && $_SESSION['logged'] != 2)  {
			header('Location: ../');
		}
	?>
