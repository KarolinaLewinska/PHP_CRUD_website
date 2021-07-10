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
    <title>Edycja danych pracownika</title>
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
        <ul class="navbar-nav pt-0" style="margin-left:20px; margin-right:10px;">
            <li class="nav-item">
                <a class="nav-link" href="employees.php">Lista pracowników</a>
            </li>
        </ul>
        <ul class="navbar-nav pt-0" style="margin-right:10px;">
            <li class="nav-item">
                <a class="nav-link" href="add.php">Dodaj dane</a>
            </li>
        </ul>
        <ul class="navbar-nav pt-0" style="margin-right:10px;">
            <li class="nav-item">
                <a class="nav-link" href="edit.php">Edytuj dane</a>
            </li>
        </ul>
        <ul class="navbar-nav pt-0" style="margin-right:10px;">
            <li class="nav-item">
                <a class="nav-link" href="delete.php">Usuń dane</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <li class="nav-item">
                            <img src="images/logout2.png" alt="logout" style="width:40px;">
                        </li>
                    </div>
                    <div class="col-9">
                        <a class="nav-link" href="authentication/logout.php" style="margin-right:70px;">Wyloguj się</a>
                    </div>
                </div>
            </div>
        </ul>
      </nav>
    </div>
    <br><br><br><br>
    <div>
      <h2 class="text-center">Edycja danych pracownika</h2>
    </div><br>  
    <div class="mx-auto" style="width:50px;">
      <img src="images/editUser.png" alt="editUser" style="width:60px;">
    </div></br>
    <div style="padding-left:130px">
      <h4>Podaj dane pracownika:</h4><br>
      <form action="db/editData.php" method="POST">
        <div class="form-group">
          <label class="control-label" for="id">ID pracownika do edycji*</label>
          <div style="width:20%">
            <input type="text" class="form-control " name="id" placeholder="ID "
            required
            pattern="(\d+)"
            title="ID może składać się tylko z cyfr!">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="name">Imię/Imiona*</label>
            <div style="width:20%">
              <input type="text" class="form-control " name="name" placeholder="Imię/Imiona"
              required
              pattern="([A-ZŻŹĆĄŚĘŁÓŃ]{1}[a-zżźćńółęąś]+ ?[A-ZŻŹĆĄŚĘŁÓŃ]?[a-zżźćńółęąś]*)"
              title="Imię musi zaczynać się z dużej litery i posiadać minimum dwa znaki!">
            </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="surname">Nazwisko*</label>
          <div style="width:20%">
            <input type="text" class="form-control" name="surname" placeholder="Nazwisko"
            required
            pattern="([A-ZŻŹĆĄŚĘŁÓŃ]{1}[a-zżźćńółęąś]+[ \-]?[A-ZŻŹĆĄŚĘŁÓŃa-zżźćńółęąś]?[a-zżźćńółęąś]*)"
            title="Nazwisko musi zaczynać się z dużej litery i posiadać minimum dwa znaki!">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="birthDate">Data urodzenia*</label>
          <div style="width:20%">
              <input type="date" class="form-control" name="birthDate" placeholder="Data urodzenia"
              required
              min='1899-01-01'>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="email">Adres email*</label>
          <div style="width:20%">
            <input type="text" class="form-control" name="email" placeholder="Email"
            required
            pattern="([a-z0-9!#$%&'\*\.\\\+\-\/=?^_`{}|]+@[a-z0-9.-]+\.[a-z]{2,4}$)"
            title="Adres e-mail musi składać się tylko z małych liter i zawierać znak @ oraz .">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="number">Numer telefonu*</label>
          <div style="width:20%">
            <input type="text" class="form-control" name="number" placeholder="Numer telefonu"
            required
            pattern="\d{9}"
            title="Numer telefonu musi składać się z 9 cyfr bez spacji!">
          </div>
        </div>
        <div style="width:20%">
            <label for="department">Dział*</label>
            <select class="form-control" name="department">
              <option>Administracja</option>
              <option>IT</option>
              <option>Marketing</option>
              <option>Osługa klienta</option>
              <option>Sprzedaż</option>
            </select>
          </div><br>
        <div class="form-group">
            <button style="width:20%" type="submit" class="btn btn-secondary" name="edytuj" value="edytuj" >EDYTUJ</button>
        </div>
      </form>
    </div> 
    </br>
    <div>
      <footer class="page-footer  py-2 text-black-50" style="position:fixed; left:0; bottom:0; width: 100%; background-color:#B5BEC6">
          <div class="container text-center">
              <p class="font-weight-bold mt-2">Copyright &copy; RT Core Company 2021 All Rights Reserved</p>
          </div>
      </footer>
    </div> 
  </body>
</html>