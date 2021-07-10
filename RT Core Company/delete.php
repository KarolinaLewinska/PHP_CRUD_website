<?php
	session_start();
    include "security/ipSecurity.php";

	if (!isset($_SESSION['logged_in'])) {
		header('Location: authentication/login.php');
		exit();
    }
    ini_set("session.gc_maxlifetime", 60 * 60 * 12);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Usuwanie danych</title>
   </head>
   <body>
       <div>
            <nav class="navbar navbar-expand-xl bg-dark navbar-dark fixed-top">
                <a class="navbar-brand">
                    <div class="row">
                        <div class="col-sm">
                            <img src="images/logoNoBackground.png" alt="Logo" style="width: 80px;">
                        </div>
                        <div class="col-sm">
                            <h4 style="padding-top: 6px;">RT Core Company</h4>
                        </div>
                    </div>
                </a>
                <ul class="navbar-nav pt-0" style="margin-left: 20px; margin-right: 10px;">
                    <li class="nav-item">
                        <a class="nav-link" href="employees.php">Lista pracowników</a>
                    </li>
                </ul>
                <ul class="navbar-nav pt-0" style="margin-right: 10px;">
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Dodaj dane</a>
                    </li>
                </ul>
                <ul class="navbar-nav pt-0" style="margin-right: 10px;">
                    <li class="nav-item">
                        <a class="nav-link" href="edit.php">Zaktualizuj dane</a>
                    </li>
                </ul>
                <ul class="navbar-nav pt-0" style="margin-right: 10px;">
                    <li class="nav-item">
                        <a class="nav-link" href="delete.php">Usuń dane</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <div class="container">
                        <div class="row">
                            <div class="col-2">
                                <li class="nav-item">
                                    <img src="images/logout2.png" alt="logout" style="width: 40px;">
                                </li>
                            </div>
                            <div class="col-9">
                                <a class="nav-link" href="authentication/logout.php" style="margin-right: 70px;">Wyloguj się</a>
                            </div>
                        </div>
                    </div>
                </ul>
            </nav>
       </div>
       <div>
            <h2 class="text-center" style="margin-top: 80px; margin-bottom: 20px;">Usuń dane pracownicze</h2>
        </div>
       <div class="mx-auto" style="width: 50px;">
            <img src="images/deleteUser.png" alt="deleteUser" style="width: 60px;">
        </div>
        <div style="left: 50%; top: 35%; position: absolute; transform: translate(-50%, -50%);">
            <form class="form-horizontal" action="db/deleteData.php" method="POST">
                <div class="form-group ">
                    <label class="control-label" for="id">*Identyfikator pracownika</label>
                    <div style="width: 450px;">
                        <input type="text" class="form-control" name ="id" required pattern="(\d+)"
                        title="Identyfikator może składać się tylko z cyfr">
                    </div>
                </div>  
                <div class="form-group">  
                    <div>
                        <button style="width: 450px;" type="submit" class="btn btn-secondary" value ="delete" name="delete" >USUŃ</button>
                    </div>
                </div>
            </form>
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