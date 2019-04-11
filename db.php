<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projekt";

    $conn = mysqli_connect($servername, $username, $password) or die('Błąd: nie udało się nawiązać połączenia z bazą danych.');

    mysqli_select_db($conn, $dbname) or die('Błąd: nie udało się wybrać schematu bazy danych.');

?>
