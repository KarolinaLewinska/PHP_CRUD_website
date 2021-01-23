<?php
    include_once "dbConnection.php";

    if(isset($_POST["delete"])){
        $id = $_POST["id"];
        $deleteData = "DELETE FROM employees WHERE id = $id";
    } 
    if ($connection->query($deleteData) === TRUE) {
        echo '<script language="javascript">
        alert("Usunięto dane z bazy.") </script>';
        echo '<script language="javascript"> 
        window.location = "/delete.php"
        </script>';
    }
    else
        die("Błąd połączenia z bazą " . $connection->connect_error);    
          
   $connection->close();
?>