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
  

<h1>KONTYNUACJA FUNKCJI AGREGUJĄCYCH</h1>


<?php
  echo("<h3>1. SELECT SUM(zarobki) AS SUMA FROM pracownicy</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT SUM(zarobki) AS SUMA FROM pracownicy');
          echo("<table border=1>");
          echo("<th>SUMA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["SUMA"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>2. SELECT SUM(zarobki) AS SUMA FROM pracownicy WHERE (imie like '%a')</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT SUM(zarobki) AS SUMA FROM pracownicy WHERE (imie like "%a")');
        echo("<table border=1>");
        echo("<th>SUMA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["SUMA"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
   echo("<h3>3. SELECT SUM(zarobki) AS SUMA FROM pracownicy WHERE (imie not like '%a') AND (dzial=2 OR dzial=3)</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT SUM(zarobki) AS SUMA FROM pracownicy WHERE (imie not like "%a") AND (dzial=2 OR dzial=3)');
        echo("<table border=1>");
        echo("<th>SUMA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["SUMA"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  
   echo("<h3>4. SELECT AVG(zarobki) AS srednia FROM pracownicy WHERE (imie not like '%a') </h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT AVG(zarobki) AS srednia FROM pracownicy WHERE (imie not like "%a")');
        echo("<table border=1>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3>5. SELECT dzial, AVG(zarobki) AS srednia FROM pracownicy WHERE (dzial=4) GROUP BY dzial LIMIT 1</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT dzial, AVG(zarobki) AS srednia FROM pracownicy WHERE (dzial=4) GROUP BY dzial LIMIT 1');
        echo("<table border=1>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3>6. SELECT AVG(zarobki) AS srednia FROM pracownicy WHERE (imie not like '%a') AND (dzial=1 OR dzial=2)</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT AVG(zarobki) AS srednia FROM pracownicy WHERE (imie not like "%a") AND (dzial=1 OR dzial=2)');
        echo("<table border=1>");
        echo("<th>ŚREDNIA</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["srednia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
     echo("<h3>7. SELECT COUNT(imie) AS ilosc FROM pracownicy</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT COUNT(imie) AS ilosc FROM pracownicy');
        echo("<table border=1>");
        echo("<th>ILOŚĆ</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["ilosc"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
     echo("<h3>8. SELECT COUNT(imie) AS ilosc FROM pracownicy WHERE (imie like '%a') AND (dzial=1 OR dzial=3)</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT COUNT(imie) AS ilosc FROM pracownicy WHERE (imie like "%a") AND (dzial=1 OR dzial=3)');
        echo("<table border=1>");
        echo("<th>ILOŚĆ</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["ilosc"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
?>

</body>
</html>
