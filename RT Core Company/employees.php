<?php
    session_start();
    
	if (!isset($_SESSION['logged_in'])) {
		header('Location: /authentication/login.php');
		exit();
    }
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
      <title>Lista pracowników</title>
   </head>
   <body>
       <div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                <a class="navbar-brand">
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
                    <li class="nav-item float-left">
                        <a class="nav-link" href="authentication/logout.php">Wyloguj się</a>
                    </li>
                </ul>
            </nav>
       </div>
       <br><br><br><br>
       <div>
           <h2 class="text-center">Lista pracowników</h2>
       </div>
       <br>
       <div style="margin-left: 150px; margin-right: 150px; margin-bottom: 60px;">
            <table class="table table-striped">
                <tr class="thead-light">
                    <th>ID</th>
                    <th>Imię/Imiona</th>
                    <th>Nazwisko</th>
                    <th>Data urodzenia</th>
                    <th>Adres email</th>
                    <th>Numer telefonu</th>
                    <th>Dział</th>
                </tr>
                <?php
                    include "db/showEmployees.php"
                ?>
            </table>
       </div> 
       <div>
            <footer class="page-footer py-2 text-black-50" style="left: 0; bottom: 0; width: 100%; background-color:#B5BEC6">
                <div class="container text-center">
                    <p>Copyright &copy; RT Core Company 2021 </p>
                </div>
            </footer>
        </div>
   </body>
</html>
