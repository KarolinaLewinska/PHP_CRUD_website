<?php
	session_start();
	if (!isset($_SESSION['logged_in'])) {
		header('Location: authentication/login.php');
		exit();
    }
    ini_set("session.gc_maxlifetime", 60 * 60 * 12);
?>
<?php
    include "security/ipSecurity.php";
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
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                <a class="navbar-brand" >
                    <img src="images/logo.jpg" alt="Logo" style="width:60px;">
                </a>
                <ul class="navbar-nav pt-0">
                    <li class="nav-item">
                        <a class="nav-link" href="employees.php">Lista pracowników</a>
                    </li>
                </ul>
                <ul class="navbar-nav pt-0">
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Dodaj</a>
                    </li>
                </ul>
                <ul class="navbar-nav pt-0">
                    <li class="nav-item">
                        <a class="nav-link" href="edit.php">Edytuj</a>
                    </li>
                </ul>
                <ul class="navbar-nav pt-0">
                    <li class="nav-item">
                        <a class="nav-link" href="delete.php">Usuń</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <a>
                        <img src="images/logout2.png" alt="logout" style="width:40px;">
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="authentication/logout.php">Wyloguj się</a>
                    </li>
                </ul>
            </nav>
       </div>
       <br><br><br><br>
       <div>
            <h2 class="text-center">Usuwanie danych pracownika</h2>
       </div>
       </br>
       <div class="mx-auto" style="width:50px;">
            <img src="images/deleteUser.png" alt="deleteUser" style="width:60px;">
        </div>
        <div style="padding-left:130px">
            <form action="db/deleteData.php" method="POST">
                <h4>Podaj dane pracownika:</h4><br>
                <div class="form-group ">
                    <label class="control-label" for="id">ID pracownika do usunięcia*</label>
                    <div style="width:20%">
                        <input type="text" class="form-control" name ="id" placeholder="ID"
                        required
                        pattern="(\d+)"
                        title="ID może składać się tylko z cyfr!">
                    </div>
                </div>  
                <div class="form-group">  
                    <div>
                        <button style="width:20%" type="submit" class="btn btn-secondary" value ="delete" name="delete" >USUŃ</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <footer class="page-footer py-2 text-black-50" style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: #B5BEC6;">
                <div class="container text-center">
                    <p>Copyright &copy; RT Core Company 2021 </p>
                </div>
            </footer>
        </div> 
   </body>
</html>