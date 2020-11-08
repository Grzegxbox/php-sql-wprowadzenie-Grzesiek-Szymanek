<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="style.css">
<a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  
<div class="nav">
  <a class="navigation_link2" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
</div>
  

<h1>KONTYNUACJA FUNKCJI AGREGUJĄCYCH</h1>


<?php
  echo("<h3>1. Suma Zarobków Wszystkich Pracowników</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT SUM(zarobki) AS SUMA FROM pracownicy ');
          echo("<table border=1>");
          echo("<th>SUMA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["SUMA"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>2. Suma Zarobków Wszystkich Kobiet</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT SUM(zarobki) AS SUMA FROM pracownicy WHERE (imie like "%a") ');
        echo("<table border=1>");
        echo("<th>SUMA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["SUMA"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
   echo("<h3>3. Suma Zarobków Mężczyzn Z Działów 2 I 3</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT SUM(zarobki) AS SUMA FROM pracownicy WHERE (imie not like "%a") AND (dzial=2 OR dzial=3) ');
        echo("<table border=1>");
        echo("<th>SUMA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["SUMA"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  
   echo("<h3>4. Średnia Zarobków Wszystkich Mężczyzn</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT AVG(zarobki) AS srednia FROM pracownicy WHERE (imie not like "%a") ');
        echo("<table border=1>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3>5. Średnia Zarobków Pracowników Z Działu 4</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT AVG(zarobki) AS srednia FROM pracownicy WHERE (dzial=4)');
        echo("<table border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3>6. Średnia Zarobków Mężczyzn Z Działów 1 I 2</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT dzial, AVG(zarobki) AS srednia FROM pracownicy WHERE (imie not like "%a") AND (dzial=1 OR dzial=2) GROUP BY dzial LIMIT 1');
        echo("<table border=1>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  
  
  
  


?>

</head>
</html>
