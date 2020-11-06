<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="style.css">
<a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  
<div class="nav">
  <a class="navigation_link3" href="pracownicyiorganizacja.php">Pracownicy I Organizacja</a>
</div>
  
<h1>WYKORZYSTANIE FUNKCJI 'ORDER BY'</h1>
 
<?php
  echo("<h3>Pracownicy Posortowani Malejąco Według Imienia</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT * FROM pracownicy ORDER BY imie desc');
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  echo("<h3>Pracownicy Z Działu 3 Posortowani Rosnąco Po Imieniu</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT * FROM pracownicy WHERE dzial=3 ORDER BY imie asc');
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  echo("<h3>Pracownicy Z Działu 3 Posortowani Rosnąco Po Imieniu</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT * FROM pracownicy WHERE dzial=3 ORDER BY imie asc');
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  
  
  
  
  
  
?>
  
  
  </head>
</html>
