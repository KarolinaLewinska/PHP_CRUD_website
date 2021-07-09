<?php
	session_start();
	
	if (!isset($_SESSION['successful_registration'])) {
		header('Location: /index.php');
		exit();
	}
	else {
		unset($_SESSION['successful_registration']);
	}
	
    if (isset($_SESSION['fr_username'])) {
        unset($_SESSION['fr_username']);
    }
        
    if (isset($_SESSION['fr_email'])) {
        unset($_SESSION['fr_email']);
    }
        
    if (isset($_SESSION['fr_password1'])) {
        unset($_SESSION['fr_password1']);
    }
        
    if (isset($_SESSION['fr_password2'])) {
        unset($_SESSION['fr_password2']);
    }
        
    if (isset($_SESSION['fr_policy'])) {
        unset($_SESSION['fr_policy']);
    }
        
    if (isset($_SESSION['error_username'])) {
        unset($_SESSION['error_username']);
    }
        
    if (isset($_SESSION['error_email'])) {
        unset($_SESSION['error_email']);
    }        

    if (isset($_SESSION['error_password_1'])) {
        unset($_SESSION['eror_password_1']);
    }
        
    if (isset($_SESSION['error_password_2'])) {
        unset($_SESSION['eror_password_2']);
    }
        
    if (isset($_SESSION['error_policy'])) {
        unset($_SESSION['error_policy']);
    }
        
    if (isset($_SESSION['error_bot'])) {
        unset($_SESSION['error_bot']);
    }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <title>Rejestracja ukończona</title>
   </head>
   <body>
       <div>
            <nav class="navbar navbar-expand-xl bg-dark navbar-dark fixed-top">
                <a class="navbar-brand">
                    <div class="row">
                        <div class="col-sm">
                            <img src="/images/logoNoBackground.png" alt="Logo" style="width:80px;">
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
                                <a><img src="/images/login.png" alt="login" style="width:50px; margin-top:5px;"></a>
                            </div>
                            <div class="col-4">
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php" style="margin-top:12px; margin-left:15px;">Zaloguj się</a>
                                </li>
                            </div> 
                            <div class="col-1">
                                <a><img src="/images/register.png" alt="register" style="width:50px; margin-top:9px;"></a>
                            </div>
                            <div class="col-5">
                                <li class="nav-item">
                                    <a class="nav-link" href="register.php" style="margin-top:12px; margin-left:15px;">Zarejestruj się</a>
                                </li>
                            </div>
                        </div>
                    </div> 
                </ul>
            </nav>
       </div>
       <div>
            <h2 class="text-center" style="margin-top: 150px; margin-bottom:50px; margin-bottom: 25px;">Rejestracja przebiegła pomyślnie</h2>
        </div>
        <div>
            <p class="text-center h6" style="font-size:20px;">
				Teraz możesz się zalogować   
            </p>
        </div>
        <div class="text-center">
            <img class ="w-25 p-3 center-block" src="/images/logo.jpg" alt="logo"/>
        </div>
        <div>
            <p class="h2 text-center text-danger bold">RT Core Company</p>
        </div>
        <div>
            <footer class="page-footer  py-2 text-black-50" style="position:fixed; left:0; bottom:0; width: 100%; background-color:#B5BEC6">
                <div class="container text-center">
                    <p class="font-weight-bold mt-2">Copyright &copy; RT Core Company 2021 All Rights Reserved</p>
                </div>
            </footer>
        </div>
   </body>
</html>