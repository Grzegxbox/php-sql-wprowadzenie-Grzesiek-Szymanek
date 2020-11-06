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
echo("<h3>SUMA</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT dzial, SUM(zarobki) AS SUMA FROM pracownicy GROUP BY dzial');
        echo("<table border=1>");
        echo("<th>Dzial</th>");
        echo("<th>Ilosc</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["SUMA"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");


?>

</head>
</html>
