<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="style.css">
<a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  
<div class="nav">
  <a class="navigation_link3" href="pracownicyiorganizacja.php">Pracownicy I Organizacja</a>
</div>
  
<h1>WYKORZYSTANIE FUNKCJI 'LIMIT'</h1>
 
<?php
  
echo("<h3>1. Dwóch Najlepiej Zarabiających Pracowników Z Działu 4</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) AND (dzial=4) ORDER BY zarobki LIMIT 2');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
        echo("<th>NAZWA DZIAŁU</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["nazwa_dzial"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

echo("<h3>ZADANIE 2 - SELECT * FROM pracownicy WHERE imie like '%a'</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT * FROM pracownicy WHERE imie like "%a"');
        echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
        echo("<th>NAZWA DZIAŁU</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["nazwa_dzial"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

echo("<h3>ZADANIE 3 - SELECT * FROM pracownicy WHERE (imie like '%a') AND (dzial=1 or dzial=2 or dzial=3) AND (zarobki>10)</h3>");
    $conn = new mysqli ("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT * FROM pracownicy WHERE (imie like "%a") AND (dzial=1 or dzial=2 or dzial=3) AND (zarobki>10)');
            echo("<table border=1>");
            echo("<th>ID</th>");
            echo("<th>IMIĘ</th>");
            echo("<th>DZIAŁ</th>");
            echo("<th>ZAROBKI</th>");
                while($row = $result -> fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                    echo("</tr>");
                }
            echo("</table>");

?>
  
  </head>
</html>
