<!-- dałem sobie przez rz bo mogę  -->
<!DOCTYPE html>
<html>
  
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="/ASSETS/style.css">
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
       <h1 style="margin-left: 35.5%; color: #3cb300;">WYPOŻYCZ KSIĄŻKĘ</h1>
  <?php

echo("<h3 style='margin-top: 10%; margin-left: 31%;'>Wybierz Książkę I Autora Do Wypożyczenia</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblAutor');
       echo("<select name='tytul' id='tytul' style='margin-left: 45%;'>");
          while($row=$result->fetch_assoc()){ 
            echo("<option value=".$row['id'].">".$row['autor']."</option>");
          }
       echo("</select>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblTytul');
       echo("<select name='tytul' id='tytul' style='margin-left: 35%;'>");
          while($row=$result->fetch_assoc()){ 
            echo("<option value=".$row['id'].">".$row['tytul']."</option>");
          }
       echo("</select>");
  echo("<input type='submit' value='Wypożycz' style='margin-top: 20px; margin-left: 5%;'>");

?>
    </div>
    </body>
 </html>
