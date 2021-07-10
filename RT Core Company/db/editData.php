<?php
    include_once "dbConnection.php";

    if (isset($_POST["edit"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $birthDate = $_POST["birthDate"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["number"];
        $department = $_POST["department"];

        $updateData = "UPDATE employees SET names = '$name', surname = '$surname', dateOfBirth = '$birthDate', 
        email = '$email', phoneNumber = '$phoneNumber', department = '$department', timestamp = CURRENT_TIMESTAMP WHERE id = '$id'";
    }
    if ($connection->query($updateData) === TRUE) {
        echo '<script language="javascript">alert("Pomyślnie zaktualizowano dane") </script>';
        echo '<script language="javascript">window.location = "/edit.php"</script>';
    }
    else
        die("Błąd połączenia z bazą " . $connection->connect_error);   

    $connection->close();
?>
