<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="/css/authentication.css" rel="stylesheet">
      <title>Logowanie</title>
   </head>
   <body>
      <div>
         <a href="/index.php">
            <img src="/images/homepage.png" id="home">
         </a>
      </div>
      <div class="panel">
         <h2>ZALOGUJ SIĘ </h2>
         <br>
         <div id="form">
           <div>
             <img src="/images/userIcon.png" id="icon" alt="UserIcon"/>
           </div>
           <form action = "login_script.php" method ="POST" >
              <div>
                <input type="username" id="username" name="username" placeholder="Nazwa użytkownika">
              </div>
              <div>
                  <input type="password" id="password"  name="password" placeholder="Hasło" >
                  <br/>
                  <input type="submit" value="Zaloguj się"/>
               </div>
            </form>
         </div>	
      </div>
   </body>
</html>



