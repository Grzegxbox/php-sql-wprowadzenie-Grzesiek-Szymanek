<!DOCTYPE html>

<html>
<head>
  
<link rel="stylesheet" href="style.css">
<a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  
<div class="nav">
  <a class="navigation_link1" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
</div>
  
  </head>
  <hr></hr>
<body>

<h1>FUNKCJA AGREGUJĄCA - GRUPOWANIE</h1>

<?php
  
  echo("<h3>1. SELECT dzial, SUM(zarobki) AS suma FROM pracownicy GROUP BY dzial</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, SUM(zarobki) AS suma FROM pracownicy GROUP BY dzial');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<th>SUMA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>2. SELECT dzial, COUNT(imie) AS ilosc FROM pracownicy GROUP BY dzial</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT dzial, COUNT(imie) AS ilosc FROM pracownicy GROUP BY dzial');
        echo("<table border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ILOŚĆ OSÓB</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["ilosc"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
   echo("<h3>3. SELECT dzial, AVG(zarobki) AS srednia FROM pracownicy GROUP BY dzial</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT dzial, AVG(zarobki) AS srednia FROM pracownicy GROUP BY dzial');
        echo("<table border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3>4. SELECT SUM(zarobki) as Suma, IF(imie LIKE '%a'), 'Kobiety','Mężczyźni') AS plec FROM pracownicy GROUP by plec</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT SUM(zarobki) AS suma, IF(imie LIKE "%a", "Kobiety","Mężczyźni") AS plec FROM pracownicy GROUP by plec');
        echo("<table border=1>");
        echo("<th>PŁEĆ</th>");
        echo("<th>SUMA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["plec"]. "</td><td>" .$row["suma"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3>5. SELECT AVG(zarobki) AS srednia, IF(imie like '%a', 'Kobiety', 'Mężczyźni') AS plec FROM pracownicy GROUP BY plec</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT AVG(zarobki) AS srednia, IF(imie like "%a", "Kobiety", "Mężczyźni") AS plec FROM pracownicy GROUP BY plec');
        echo("<table border=1>");
        echo("<th>PŁEĆ</th>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["plec"]. "</td><td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
?>

    </body>
  </html>
