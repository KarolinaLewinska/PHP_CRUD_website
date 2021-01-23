<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rtcorecompany";
    $connection = new mysqli($servername, $username, $password, $dbname);
    if ($connection->connect_error) 
        die('Błąd połączenia z bazą ' . $connection->connect_error);   
?>
    