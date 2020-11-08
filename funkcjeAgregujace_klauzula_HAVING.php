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
  echo("<h3>1. Średnia Zarobków W Poszczególnych Działach Mniejsza Od 28</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, AVG(zarobki) AS srednia FROM pracownicy, organizacja WHERE (dzial=id_org) GROUP BY dzial HAVING AVG(zarobki)<28');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<td>NAZWA DZIAŁU</td>");
          echo("<th>ŚREDNIA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>2. Średnia Zarobków Mężczyzn W Poszczególnych Działach Większa Od 30</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, AVG(zarobki) AS srednia FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie noy like "%a") GROUP BY dzial HAVING AVG(zarobki)<28');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<td>NAZWA DZIAŁU</td>");
          echo("<th>ŚREDNIA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>3. Ilość Pracowników W Poszczególnych Działach Większa Od 3</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, COUNT(imie) AS ilosc FROM pracownicy, organizacja WHERE (dzial=id_org) GROUP BY dzial HAVING COUNT(imie)<3');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<td>NAZWA DZIAŁU</td>");
          echo("<th>ILOŚĆ</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
?>

    </head>
  </html>
