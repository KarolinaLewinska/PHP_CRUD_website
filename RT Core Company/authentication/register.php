<?php
   session_start();

   if (isset($_POST['email'])) {
      $successfull = true;
      $userName = $_POST['username'];

      if (!preg_match('/^[a-z\d_]{3,31}$/i', $userName)) {
         $successfull = false;
         $_SESSION['error_username'] ='Nazwa użytkownika musi zawierać od 3 do 30 znaków, </br>
         może składać się tylko z liter i cyfr </br>
         (bez polskich znaków)';
      }
   
      $email = $_POST['email'];
      $emailS= filter_var($email, FILTER_SANITIZE_EMAIL);

      if ((filter_var($emailS, FILTER_VALIDATE_EMAIL) == false) || ($emailS != $email)) {
         $successfull = false;
         $_SESSION['error_email'] = "Nieprawidłowy format adresu email";  
      }
      
      $password_1 = $_POST['password1'];
      $password_2=$_POST['password2'];

      if (!preg_match('/^(?=.*[!@#$%^&*-_])(?=.*[0-9])(?=.*[A-Z]).{8,}$/', $password_1)) {
         $successfull = false;
         $_SESSION['error_password_1'] = "Hasło musi zawierać minumum 8 znaków, <br/>
         co najmniej jedną wielką literę, cyfrę i znak specjalny";
      }

      if ($password_1 != $password_2) {
         $successfull = false;
         $_SESSION['error_password_2'] = "Hasła nie są identyczne";
      }
   
      $password_hash = password_hash($password_1, PASSWORD_DEFAULT);
      
      $_SESSION['fr_username'] = $userName;
      $_SESSION['fr_email'] = $email;
      $_SESSION['fr_haslo1'] = $password_1;
      $_SESSION['fr_haslo2'] = $password_2;

      if (isset($_POST['policy'])) 
         $_SESSION['fr_policy'] = true;
      
      require_once __DIR__.'\..\db\dbConnection.php';
      mysqli_report(MYSQLI_REPORT_STRICT);
      
      try {
         $connection = new mysqli($servername,$username,$password,$dbname);
         if ($connection -> connect_error != 0) {
            throw new Exception(mysqli_connect_error()); 
         }
         else {
            $result = $connection -> query("SELECT id from users where email = '$email'");
            if(!$result) 
               throw new Exception($connection -> error);

            $email_number = $result -> num_rows;

            if ($email_number > 0) {
               $successfull = false;
               $_SESSION['error_email'] = 'Podany adres email już istnieje';
            }

            $result = $connection -> query("SELECT id from users where username = '$userName'");
            if (!$result) 
               throw new Exception($connection -> error);

            $username_number = $result -> num_rows;

            if ($username_number > 0) {
               $successfull = false;
               $_SESSION['error_username'] = 'Podana nazwa użytkownika już istnieje';
            }

            if ($successfull == true) {
               if($connection -> query("INSERT INTO users (username, password, email) VALUES ('$userName','$password_hash','$email')")){
                  $_SESSION['successful_registration'] = true;
                  header('Location: welcome.php');
               }
               else {
                  echo "Błąd" . ($connection->connect_error);
               }  
            }
            $connection->close();
         }
      }
      catch(Exception $e) {
         echo '<span style="color:red;">
            Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w późniejszym terminie!</span>';
         echo '<br/>Informacja developerska: '.$e;
      }
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="/css/authentication.css" rel="stylesheet">
      <script src='https://www.google.com/recaptcha/api.js' async defer></script>
      <title>Rejestracja</title>
   </head>
   <body>
      <div>
         <a href="/index.php">
            <img src="/images/homepage.png" id="home" href="/index.php">
         </a>
      </div>
      <div class="panel">
         <h2>STWÓRZ KONTO</h2><br>
         <div id="form">
           <div>
             <img src="/images/userIcon.png" id="icon" alt="UserIcon"/>
           </div>
           <form method = "POST" >
           <div>
                <input type="text" id="username" name="username" placeholder="Nazwa użytkownika"
                value="<?php
            if (isset($_SESSION['fr_username'])){
                echo $_SESSION['fr_username'];
                unset($_SESSION['fr_username']);
            }?>">
              </div>
              <?php
              if (isset($_SESSION['error_username'])){
                 echo '<div class="error">'.$_SESSION['error_username'].'</div>';
                 unset($_SESSION['error_username']);
              }
              ?>
              <div>
                <input type="text" id="email" name="email" placeholder="Adres email"value="<?php
            if (isset($_SESSION['fr_email'])){
                echo $_SESSION['fr_email'];
                unset($_SESSION['fr_email']);
            }?>">
              </div>
              <?php
              if (isset($_SESSION['error_email']))
              {
                 echo '<div class="error">'.$_SESSION['error_email'].'</div>';
                 unset($_SESSION['error_email']);
              }
              ?>
              <div>
              <input type="password" id="password1"  name="password1" placeholder="Hasło"
                value="<?php
            if (isset($_SESSION['fr_haslo1']))
            {
                echo $_SESSION['fr_haslo1'];
                unset($_SESSION['fr_haslo1']);
            }?>">
              </div>
              <?php
              if (isset($_SESSION['error_password_1'])){
                 echo '<div class="error">'.$_SESSION['error_password_1'].'</div>';
                 unset($_SESSION['error_password_1']);
              }
              ?>
              <div>
                <input type="password" id="password2"  name="password2" placeholder="Potwierdź hasło"
                value="<?php
            if (isset($_SESSION['fr_haslo2'])){
                echo $_SESSION['fr_haslo2'];
                unset($_SESSION['fr_haslo2']);
            }?>">
              </div>
              <?php
              if (isset($_SESSION['error_password_2'])){
                 echo '<div class="error">'.$_SESSION['error_password_2'].'</div>';
                 unset($_SESSION['error_password_2']);
              }
              ?>
              </br>
             <input name ="submit" type="submit" value="Zarejestruj się">
           </form>
          </div>
      </div>
   </body>
</html>