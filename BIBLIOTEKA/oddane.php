<!DOCTYPE html>
<html>
  
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="/ASSETS/style.css">
<link rel="icon" href="https://i.ytimg.com/vi/iu-skHVnxGc/hqdefault.jpg">
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
           <a class="navigation_link1" href="/BIBLIOTEKA/biblioteka.php">Biblioteka</a>
           <a class="navigation_link1" href="/BIBLIOTEKA/wyporzyczone.php">Wypożycz książkę</a>
           <a class="navigation_link1" href="/BIBLIOTEKA/oddane.php">Oddaj książkę</a>
           <h1 style="font-size: 19px;margin-top: 250%;text-align: center;">Autor: Grzesiek Szymanek</h1>
         </div>
       </div>
      <div class="item colorGreen">
        
       <h1 style="margin-left: 38.5%; color: #3cb300;">ODDAJ KSIĄŻKĘ</h1>
       
  <?php

  require_once("ASSETS/connect.php");

    echo("<h3 style='margin-top: 10%; margin-left: 33.5%;'>Wybierz Książkę I Autora Do Oddania</h3>");
    $result=$conn->query("SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE (biblAutor_id = biblAutor.id) AND (biblTytul_id = biblTytul.id)");
       echo("<select name='tytul' id='tytul' style='margin-left: 30.8%; margin-top: 2%;'>");
          while($row=$result->fetch_assoc()){ 
           echo("<option value=".$row['id'].">".$row['autor'].' - '.$row['tytul']."</option>");
          }
       echo("</select>");
       echo("<h4></h4>");
       echo("<input type='submit' value='Oddaj' style='margin-top: 1.2%; margin-left: 49%;'>");
       
 ?>
    </div>
   </body>
 </html>
