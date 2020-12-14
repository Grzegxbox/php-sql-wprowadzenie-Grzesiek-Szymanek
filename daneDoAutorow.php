<!DOCTYPE html>
<html>
  
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="style.css">
</head>

<body>
   <div class="container">
     <div class="item colorRed">
      <h1 class="tltle"><a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">WYŚWIETL KOD - GitHub</a></h1>
     </div>
     <div class="item colorBlue">
      <h1 style="margin-left: 15%;">MENU STRONY</h1>
       <div class="nav">
           <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
           <a class="navigation_link1" href="formularze.php">Formularze</a>
           <a class="navigation_link1" href="daneDoBazy.php">Formularz - Pracownicy</a>
           <a class="navigation_link1" href="daneDoAutorow.php">Formularz - Autorzy</a>
           <a class="navigation_link1" href="daneDoTytulow.php">Formularz - Książki</a>
           <h1 style="font-size: 19px;margin-top: 40%;text-align: center;">Autor: Grzesiek Szymanek</h1>
       </div>
      </div>
     <div class="item colorGreen">
       <h1 style="margin-left: 29%; color: #3cb300;">FORMULARZ - AUTORZY</h1>
          <div class="dodawanie" style="margin-top: 7%;">
            <h2 style="margin-left: 8%;color: #2E8B57;">DODAWANIE AUTORA</h2>
               <form action=".php" method="POST" style="margin-left: 19%;">
                 <input type="text" name="id" placeholder="ID"><br>
                 <input type="text" name="autor" placeholder="AUTOR"><br>
                 <input type="submit" value="DODAJ" style="margin-left: 40px;">
               </form>
            </div>
              <div class="odejmowanie">
                 <h2 style="color: #2E8B57;">USUWANIE AUTORA</h2>
                   <form action=".php" method="POST" style="margin-left: 27%;">
                     <input type="text" name="id" placeholder="ID PRACOWNIKA"><br>
                     <input type="submit" value="USUŃ" style="margin-left: 13%;">
                   </form>
             </div>
       
       
       </div>
       </body>
     </html>
