<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";

    $conn = mysqli_connect($servername, $username, $password) or die('Błąd: nie udało się nawiązać połączenia z bazą danych.');

    mysqli_select_db($conn, $dbname) or die('Błąd: nie udało się wybrać schematu bazy danych.');

	$login = $_GET['login'];
	$passwd = $_GET['passwd'];
	
	$quest = "SELECT * FROM users
		WHERE login = '$login' AND password = '$passwd' LIMIT 1";
	
    $answ = mysqli_query($conn, $quest); 
	if( mysqli_num_rows($answ) ){
		mysqli_close($conn);
		session_start();
		if( $login == 'admin'){
			$_SESSION['logged'] = 1;
		}else{
			$_SESSION['logged'] = 2;	
		}		
		$_SESSION['nick'] = $login;
		header("Location: $parent/bazy/panel");
	}else{
		mysqli_close($conn);
		header('Location: index.html');
	}
	
 ?>