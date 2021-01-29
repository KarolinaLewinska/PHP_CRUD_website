# Projekt PHP
Autorzy: [Karolina Lewińska](https://github.com/KarolinaLewinska), [Natalia Skórowska](https://github.com/NataliaSkorowska), [Mateusz Sałata](https://github.com/mateuszsalata1108)<br />
**Cel projektu:** Stworzenie systemu pozwalającego na dodawanie, edycję oraz usuwanie danych osobowych pracowników fikcyjnej firmy.<br />
Język: **PHP**<br />
**Struktura projektu:**<br />
- **index.php** – strona główna (przed zalogowaniem, i po wylogowaniu)<br />
<br />![indexView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/indexPageView.PNG)<br />
<br />- **employees.php** – lista danych pracowników (widoczna po zalogowaniu się do systemu)<br />
<br />![employeesView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/listView.PNG)<br />
<br />- **add.php** – formularz pozwalający na dodawanie danych pracownika<br />
<br />![addView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/createView.PNG)<br />
<br />- **edit.php**– formularz umożliwiający edycję danych pracownika<br />
<br />![editView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/editView.PNG)<br />
<br />- **delete.php** – formularz do usuwania danych pracownika<br />
<br />![deleteView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/deleteView.PNG)<br />
<br />- **security/ipSecurity** – zabezpieczenie przeciwko przejmowaniu sesji <br />
  (porównywanie IP sesji z bieżącym IP oraz porównanie identyfikatorów przeglądarek)<br />
<br />- **images** – pliki png wykorzystane w projekcie<br />
<br />- **db/addData.php** – zapytanie SQL, które umożliwia dodawanie danych do bazy.<br />
  Po pomyślnym dodaniu danych wyświetlany jest JavaScript’owy alert<br />
  <br />![addAlert](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/addingCom.PNG)<br />
<br />- **dbConnection.php** – konfiguracja połączenia z bazą<br />
<br />- **deleteData.php** – zapytanie SQL, które umożliwia usunięcie danych z bazy.<br /> 
  Po pomyślnym usunięciu danych wyświetlany jest JavaScript’owy alert<br />
  <br />![deleteAlert](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/deleteCom.PNG)<br />
<br />- **editData.php** - zapytanie SQL, które umożliwia edycję danych z bazy.<br />
  Po pomyślnej edycji danych wyświetlany jest JavaScript’owy alert<br />
  <br />![editAlert](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/editingCom.PNG)<br />
<br />- **showEmployees.php** – zapytanie SQL wyświetlające wszystkie rekordy z bazy na stronie **employees.php**<br />
<br />- **css/authentication.css** – stworzenie arkusza stylów CSS dla **login.php** oraz **register.php**,<br />
pozostałe widoki zostały spersonalizowane przy użyciu biblioteki **Bootstrap**<br />
<br />- **authentication/login_script.php** – skrypt, który umożliwia zalogowanie się do systemu.<br />
         Gdy zostaną podane niepoprawne dane do logowania to wyświetlany jest JavaScript'owy alert<br />
        <br />![loginAlert](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/LoginCom.PNG)<br />
<br />- **login.php** – panel logowania<br />
<br />![loginView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/loginView.PNG)<br />
<br />- **register.php** – panel rejestracji<br />
<br />![registerView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/registerView.PNG)<br />
      <br />- widok panelu rejestracji z **walidacją**<br />
<br />![registerValid](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/registerValidation.PNG)<br />
<br />- **logout.php** – wylogowanie z systemu - przekierowanie na stronę główną (index.php) oraz zniszczenie danych sesyjnych<br />
<br />- **welcome.php** – widok ukazujący się po pomyślnym zarejestrowaniu użytkownika<br />
<br />![regSuccess](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/regSuccessView.PNG)<br />
<br />Do wszystkich pól formularzy dodawania, edycji i usuwania danych pracowników została zastosowana **walidacja client-side**<br />
<br />![valid](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/clientSideValidation.PNG)<br />


