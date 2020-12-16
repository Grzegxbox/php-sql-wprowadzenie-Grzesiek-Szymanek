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
           <a class="navigation_link1" href="funkcjeAgregujace_kontynuacja.php">Kontynuacja Funkcji Agregujących</a>
           <a class="navigation_link1" href="funkcjeAgregujace_grupowanie.php">Funkcja Agregująca - Grupowanie</a>
           <a class="navigation_link1" href="funkcjeAgregujace_klauzula_HAVING.php">Funkcja Agregująca - Having</a>
           <a class="navigation_link1" href="funkcjeAgregujace_data_i_czas.php">Funkcja Agregująca - Data I Czas</a>
           <a class="navigation_link1" href="funkcjeAgregujace_formatowanie_dat.php">Funkcja Agregująca - Formatowanie Dat</a>
           <h1 style="font-size: 19px;margin-top: 125%;text-align: center;">Autor: Grzesiek Szymanek</h1>
         </div>
       
       </div>
     
      <div class="item colorGreen">
        <h1 style="margin-left: 19%; color: #3cb300;">FUNKCJA AGREGUJĄCA - GRUPOWANIE</h1>
        
<?php
  
  echo("<h3 style='margin-top: 70px;margin-left: 5%;'>1. SELECT dzial, SUM(zarobki) AS suma FROM pracownicy GROUP BY dzial</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, SUM(zarobki) AS suma FROM pracownicy GROUP BY dzial');
          echo("<table style='margin-left: 5%;' border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<th>SUMA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px;margin-left: 5%;'>2. SELECT dzial, COUNT(imie) AS ilosc FROM pracownicy GROUP BY dzial</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT dzial, COUNT(imie) AS ilosc FROM pracownicy GROUP BY dzial');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ILOŚĆ OSÓB</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["ilosc"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
   echo("<h3 style='margin-top: 70px;margin-left: 5%;'>3. SELECT dzial, AVG(zarobki) AS srednia FROM pracownicy GROUP BY dzial</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT dzial, AVG(zarobki) AS srednia FROM pracownicy GROUP BY dzial');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3 style='margin-top: 70px;margin-left: 5%;'>4. SELECT SUM(zarobki) as Suma, IF(imie LIKE '%a'), 'Kobiety','Mężczyźni') AS plec FROM pracownicy GROUP by plec</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT SUM(zarobki) AS suma, IF(imie LIKE "%a", "Kobiety","Mężczyźni") AS plec FROM pracownicy GROUP by plec');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>PŁEĆ</th>");
        echo("<th>SUMA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["plec"]. "</td><td>" .$row["suma"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3 style='margin-top: 70px;margin-left: 5%;'>5. SELECT AVG(zarobki) AS srednia, IF(imie like '%a', 'Kobiety', 'Mężczyźni') AS plec FROM pracownicy GROUP BY plec</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT AVG(zarobki) AS srednia, IF(imie like "%a", "Kobiety", "Mężczyźni") AS plec FROM pracownicy GROUP BY plec');
        echo("<table style='margin-left: 5%;' border=1>");
        echo("<th>PŁEĆ</th>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["plec"]. "</td><td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
?>
     </div>
    </body>
  </html>
