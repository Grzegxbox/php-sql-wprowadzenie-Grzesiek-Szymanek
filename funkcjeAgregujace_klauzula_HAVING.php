<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="style.css">
<a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  
<div class="nav">
  <a class="navigation_link1" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
</div>
  

<h1>Funkcja Agregująca - HAVING</h1>

<?php
  echo("<h3>1. Suma Zarobków W Poszczególnych Działach Mniejsza Od 28</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, SUM(zarobki) AS suma FROM pracownicy, organizacja WHERE (dzial=id_org) GROUP BY dzial');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<th>SUMA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  

    
?>

    </head>
  </html>
