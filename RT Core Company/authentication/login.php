<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="/css/authentication.css" rel="stylesheet">
      <title>Zaloguj się</title>
   </head>
   <body>
      <div class="row">
         <a href="/index.php">
            <img src="/images/homepage.png" alt="powrót" id="home">
         </a>
      </div>
      <div class="panel">
         <h2>Panel logowania</h2>
         <div id="form">
           <div>
               <img src="/images/userIcon.png" id="icon" alt="UserIcon"/>
           </div>
           <form action = "login_script.php" method ="POST">
              <div>
                  <input type="username" id="username" name="username" placeholder="Nazwa użytkownika">
              </div>
              <div>
                  <input type="password" id="password" name="password" placeholder="Hasło">
               </div>
               <div>
                  <input class="button" type="submit" id="submit" value="Zaloguj się"/>
               </div>
           </form>
         </div>	
      </div>
      <div>
         <h4>Nie masz konta?</h4>
         <p>Przejdź do panelu rejestracyjnego:</p>
      </div>
      <div id="regLink">
         <a href="register.php"><img src="/images/register.png" alt="register" id="registerIcon"></a>
      </div>
   </body>
</html>



