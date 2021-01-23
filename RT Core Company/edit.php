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
            title="ID składa się tylko z cyfr">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="name">Imię/Imiona*</label>
            <div style="width:20%">
              <input type="text" class="form-control " name="name" placeholder="Imię/Imiona"
              required
              pattern="([A-ZŻŹĆĄŚĘŁÓŃ]{1}[a-zżźćńółęąś]+ ?[A-ZŻŹĆĄŚĘŁÓŃ]?[a-zżźćńółęąś]*)"
              title="Imię musi zaczynać się od wielkiej litery i posiadać minimum dwa znaki">
            </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="surname">Nazwisko*</label>
          <div style="width:20%">
            <input type="text" class="form-control" name="surname" placeholder="Nazwisko"
            required
            pattern="([A-ZŻŹĆĄŚĘŁÓŃ]{1}[a-zżźćńółęąś]+[ \-]?[A-ZŻŹĆĄŚĘŁÓŃa-zżźćńółęąś]?[a-zżźćńółęąś]*)"
            title="Nazwisko musi zaczynać się od wielkiej litery i posiadać minimum dwa znaki">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="birthDate">Data urodzenia*</label>
          <div style="width:20%">
              <input type="date" class="form-control" name="birthDate" placeholder="Data urodzenia"
              required
              min='1899-01-01'
              title="Data urodzenia jest nieprawidłowa">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="email">Adres email*</label>
          <div style="width:20%">
            <input type="text" class="form-control" name="email" placeholder="Email"
            required
            pattern="([a-z0-9!#$%&'\*\.\\\+\-\/=?^_`{}|]+@[a-z0-9.-]+\.[a-z]{2,4}$)"
            title="Adres email musi składać się z małych liter, znaku @ i .">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label" for="number">Numer telefonu*</label>
          <div style="width:20%">
            <input type="text" class="form-control" name="number" placeholder="Numer telefonu"
            required
            pattern="\d{9}"
            title="Numer telefonu musi się składać z 9 cyfr bez spacji">
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
      <footer class="page-footer py-2 text-black-50" style="left: 0; bottom: 0; width: 100%; background-color: #B5BEC6;">
        <div class="container text-center">
          <p>Copyright &copy; RT Core Company 2021 </p>
        </div>
      </footer>
    </div> 
  </body>
</html>