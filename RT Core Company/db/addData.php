<?php
     include_once "dbConnection.php";

     if (isset($_POST["dodaj"])) {  
          $name = $_POST["name"];
          $surname = $_POST["surname"];
          $birthDate = $_POST["birthDate"];
          $email = $_POST["email"];
          $phoneNumber = $_POST["number"];
          $department = $_POST["department"];
          
          $addData = "INSERT INTO employees (names, surname, dateOfBirth, email, phoneNumber, department)
          VALUES ('$name', '$surname', '$birthDate', '$email', '$phoneNumber', '$department')";
     }
     if ($connection->query($addData) === TRUE) {
          echo '<script language="javascript">alert("Pomyślnie dodano dane do bazy") </script>';
          echo '<script language="javascript">window.location = "/add.php"</script>';
     }    
     else {
          die("Błąd połączenia z bazą " . $connection->connect_error); 
     }
                
     $connection->close(); 
?>