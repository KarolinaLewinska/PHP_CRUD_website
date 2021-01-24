# PHP_Project
Projekt na zaliczenie przedmiotu: **Interaktywne serwisy internetowe**<br />
**Grupa S22-32**<br />
Autorzy: [Karolina Lewińska](https://github.com/KarolinaLewinska), [Natalia Skórowska](https://github.com/NataliaSkorowska), [Mateusz Sałata](https://github.com/mateuszsalata1108<br />
**Cel projektu:** Stworzenie systemu pozwalającego na dodawanie, edycję oraz usuwanie danych osobowych pracowników fikcyjnej firmy.<br />
Język: **PHP**<br />
**Struktura projektu:**<br />
- **index.php** – strona główna (przed zalogowaniem, i po wylogowaniu)<br />
![indexView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/indexPageView.PNG)<br /><br />
- **employees.php** – lista danych pracowników (widoczna po zalogowaniu się do systemu)<br />
![employeesView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/listView.PNG)<br />
- **add.php** – formularz pozwalający na dodawanie danych pracownika<br />
![addView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/createView.PNG)<br />
- **edit.php**– formularz umożliwiający edycję danych pracownika<br />
![editView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/editView.PNG)<br />
- **delete.php** – formularz do usuwania danych pracownika<br />
![deleteView](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/deleteView.PNG)<br />
- **security/ipSecurity** – zabezpieczenie przeciwko przejmowaniu sesji <br />
  (porównywanie IP sesji z bieżącym IP oraz porównanie identyfikatorów przeglądarek)<br />
- **images** – pliki png wykorzystane w projekcie<br />
- **db/addData.php** – zapytanie SQL, które umożliwia dodawanie danych do bazy.<br />
  Po pomyślnym dodaniu danych wyświetlany jest JavaScript’owy alert<br />
  ![addAlert](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/addingCom.PNG)<br />
- **dbConnection.php** – konfiguracja połączenia z bazą<br />
- **deleteData.php** – zapytanie SQL, które umożliwia usunięcie danych z bazy.<br /> 
  Po pomyślnym usunięciu danych wyświetlany jest JavaScript’owy alert<br />
  ![deleteAlert](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/addingCom.PNG)<br />
- **editData.php** - zapytanie SQL, które umożliwia edycję danych z bazy.<br />
  Po pomyślnej edycji danych wyświetlany jest JavaScript’owy alert<br />
  ![editAlert](https://github.com/KarolinaLewinska/PHP_Project/blob/main/ReadmeIMG/editCom.PNG)<br />
- **showEmployees.php** – zapytanie SQL wyświetlające wszystkie rekordy z bazy na stronie **employees.php**<br />
- **css/authentication.css** – stworzenie arkusza stylów CSS dla **login.php** oraz **register.php**<br />
pozostałe widoki zostały spersonalizowane przy użyciu biblioteki **Bootstrap**<br />
- **authentication/login_script.php** – skrypt, który umożliwia zalogowanie się do systemu<br />
- **login.php** – panel logowania<br />
- **register.php** – panel rejestracji<br />
- **logout.php** – wylogowanie z systemu - przekierowanie na stronę główną (index.php) oraz zniszczenie danych sesyjnych<br />
- **welcome.php** – widok ukazujący się po pomyślnym zarejestrowaniu użytkownika<br />



