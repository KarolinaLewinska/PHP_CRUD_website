<?php
    session_start();
     
    if ((!isset($_POST['username'])) || (!isset($_POST['password']))) {
       header('Location: login.php');
       exit();
    }
 
    require_once __DIR__.'\..\db\dbConnection.php';
    $connection = @new mysqli($servername, $username, $password, $dbname);
     
    if ($connection->connect_error != 0) {
        echo "Error: ".$connection->connect_error;
    }
    else {
        $userName = $_POST['username'];
        $password = $_POST['password'];
         
        $userName = htmlentities($userName, ENT_QUOTES, "UTF-8");
     
        if ($result = @$connection -> query(sprintf("SELECT * FROM users WHERE username = '%s'",
            mysqli_real_escape_string($connection, $userName)))) {
            
            $users_number = $result->num_rows;
            if ($users_number > 0) {
                $row = $result->fetch_assoc();

                if (password_verify($password, $row['password'])) {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    $result->free_result();
                    header('Location: /employees.php');
                }
                else {
                    echo '<script language="javascript">
                        alert("Nieprawidłowy login lub hasło")
                        </script>';
                    echo '<script language="javascript">
                        window.location = "login.php"
                        </script>';  
                }         
            } 
            else {
                echo '<script language="javascript">
                    alert("Nieprawidłowy login lub hasło")
                    </script>';
                echo '<script language="javascript">
                    window.location = "login.php"
                    </script>';
            }
        }
        $connection->close();
    }  
?>