<?php
    session_start();

    if ((isset($_SESSION['logged_in'])) && ($_SESSION['logged_in']===true)) {
        header('Location: employees.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <title>Strona główna</title>
   </head>
   <body>
       <br>
       <div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                <a class="navbar-brand" >
                    <img src="images/logo.jpg" alt="Logo" style="width:60px;">
                </a>
                <ul class="nav navbar-nav ml-auto">
                    <a>
                        <img src="images/login.png" alt="login" style="width:40px;">
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="authentication/login.php">Logowanie</a>
                    </li>
                    <a>
                        <img src="images/register.png" alt="register" style="width:40px;">
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="authentication/register.php">Rejestracja</a>
                    </li>
                </ul>
            </nav>
       </div>
       <br><br><br><br>
       <div>
            <h2 class='text-center'>System zarządzania pracownikami</h2>
        </div>
        <br>
        <div>
            <p class="text-center h6" style="font-size:large;">
                System służy do zarządzania pracownikami RT Core. 
                Do systemu mają dostęp tylko osoby uprawnione. <br>
                W celu otrzymania uprawnień należy się zalogować.
            </p>
        </div>
        <div class="text-center">
            <img class ="w-25 p-3 center-block" src="images/logo.jpg" alt="logo"/>
        </div>
        <div>
            <p class="h2 text-center text-danger bold">
                RT Core Company
            </p>
        </div>
        <div>
            <footer class="page-footer  py-2 text-black-50" style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: #B5BEC6">
                <div class="container text-center">
                    <p>Copyright &copy; RT Core Company 2021 </p>
                </div>
            </footer>
        </div>
   </body>
</html>