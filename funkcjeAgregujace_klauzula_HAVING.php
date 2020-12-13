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
           <a class="navigation_link1" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
           <a class="navigation_link1" href="funkcjeAgregujace_kontynuacja.php">KONTYNUACJA FUNCKJI AGREGUJĄCYCH</a>
           <a class="navigation_link1" href="funkcjeAgregujace_grupowanie.php">FUNKCJA AGREGUJĄCA - GRUPOWANIE</a>
           <a class="navigation_link1" href="funkcjeAgregujace_klauzula_HAVING.php">FUNKCJA AGREGUJĄCA - HAVING</a>
           <a class="navigation_link1" href="funkcjeAgregujace_data_i_czas.php">FUNKCJA AGREGUJĄCA - DATA I CZAS</a>
           <a class="navigation_link1" href="funkcjeAgregujace_formatowanie_dat.php">FUNKCJA AGREGUJĄCA - FORMATOWANIE DAT</a>
           <h1 style="font-size: 19px;margin-top: 25%;text-align: center;">Autor: Grzesiek Szymanek</h1>
         </div>
       
       </div>
     
      <div class="item colorGreen">
        <h1 style="margin-left: 25%; color: #3cb300;">FUNKCJA AGREGUJĄCA - HAVING</h1>

<?php
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>1. SELECT dzial, nazwa_dzial, SUM(zarobki) AS suma,  FROM pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING sum(zarobki) > 128</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, SUM(zarobki) AS suma  FROM pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING sum(zarobki) > 128');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>SUMA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>2. SELECT dzial, nazwa_dzial, AVG(zarobki) AS srednia FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie not like '%a') GROUP BY dzial HAVING AVG(zarobki)>30</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, AVG(zarobki) AS srednia FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie not like "%a") GROUP BY dzial HAVING AVG(zarobki)>30');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>ŚREDNIA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>3. SELECT dzial, nazwa_dzial, COUNT(id_pracownicy) AS ilosc FROM pracownicy, organizacja WHERE (dzial=id_org) GROUP BY dzial HAVING COUNT(id_pracownicy)>3</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, COUNT(id_pracownicy) AS ilosc FROM pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING COUNT(id_pracownicy)>3');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>ILOŚĆ</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["ilosc"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
?>
     </div>
    </body>
  </html>
