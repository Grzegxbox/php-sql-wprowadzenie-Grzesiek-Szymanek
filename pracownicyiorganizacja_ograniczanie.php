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
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) AND (dzial=4) ORDER BY zarobki desc LIMIT 2');
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

echo("<h3>2. Trzy Najlepsze Zarabiające Kobiety Z Działów 2 I 4</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie like "%a") AND (dzial=2 OR dzial=4) ORDER BY zarobki desc LIMIT 3');
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

echo("<h3>3. Jeden Najstarszy Pracownik</h3>");
    $conn = new mysqli ("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) GROUP BY data_rodzenia');
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
