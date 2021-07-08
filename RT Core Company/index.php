<?php
    session_start();

    if ((isset($_SESSION['logged_in']))) {
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
      <title>RT Core</title>
   </head>
   <body>
       <div>
            <nav class="navbar navbar-expand-xl bg-dark navbar-dark fixed-top">
                <a class="navbar-brand">
                    <div class="row">
                        <div class="col-sm">
                            <img src="images/logoNoBackground.png" alt="Logo" style="width:80px;">
                        </div>
                        <div class="col-sm">
                            <h4 style="padding-top:6px;">RT Core Company</h4>
                        </div>
                    </div>
                </a>
                <ul class="nav navbar-nav ml-auto">
                    <div class="container">
                        <div class="row">
                            <div class="col-1">
                                <a><img src="images/login.png" alt="login" style="width:50px; margin-top:5px;"></a>
                            </div>
                            <div class="col-4">
                                <li class="nav-item">
                                    <a class="nav-link" href="authentication/login.php" style="margin-top:12px; margin-left:15px;">Zaloguj się</a>
                                </li>
                            </div> 
                            <div class="col-1">
                                <a><img src="images/register.png" alt="register" style="width:50px; margin-top:9px;"></a>
                            </div>
                            <div class="col-5">
                                <li class="nav-item">
                                    <a class="nav-link" href="authentication/register.php" style="margin-top:12px; margin-left:15px;">Zarejestruj się</a>
                                </li>
                            </div>
                        </div>
                    </div> 
                </ul>
            </nav>
       </div>
       <div>
            <h2 class='text-center' style="margin-top: 150px;">System zarządzania danymi pracowników</h2>
        </div>
        <div style="padding-top:25px;">
            <p class="text-center" style="font-size:20px;">
                System umożliwia zarządzania danymi pracowników RT Core. 
                Do systemu mają dostęp tylko osoby uprawnione. <br>
                W celu otrzymania uprawnień należy się zalogować.
            </p>
        </div>
        <div class="text-center">
            <img class ="w-25 p-3 center-block" src="images/logo.jpg" alt="logo"/>
        </div>
        <div>
            <p class="h2 text-center text-danger bold">RT Core Company</p>
        </div>
        <div>
            <footer class="page-footer  py-2 text-black-50" style="position:fixed; left:0; bottom:0; width: 100%; background-color:#B5BEC6">
                <div class="container text-center">
                    <p class="font-weight-bold">Copyright &copy; RT Core Company 2021 All Rights Reserved</p>
                </div>
            </footer>
        </div>
   </body>
</html>