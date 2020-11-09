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
  echo("<h3>1. SELECT dzial, nazwa_dzialu, AVG(zarobki) AS srednia FROM pracownicy, organizacja WHERE (dzial=id_org) GROUP BY dzial HAVING AVG(zarobki)<28</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzialu, AVG(zarobki) AS srednia FROM pracownicy, organizacja WHERE (dzial=id_org) GROUP BY dzial HAVING AVG(zarobki)<28');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<td>NAZWA DZIAŁU</td>");
          echo("<th>ŚREDNIA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzialu"]. "</td><td>" .$row["srednia"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>2. SELECT dzial, AVG(zarobki) AS srednia, nazwa_dzialu FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie noy like "%a") GROUP BY dzial HAVING AVG(zarobki)<28</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, AVG(zarobki) AS srednia, nazwa_dzialu FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie noy like "%a") GROUP BY dzial HAVING AVG(zarobki)<28');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<th>ŚREDNIA</th>");
          echo("<td>NAZWA DZIAŁU</td>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["srednia"]. "</td><td>" .$row["nazwa_dzialu"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>3. SELECT nazwa_dzialu, COUNT(imie) AS ilosc, nazwa_dzialu FROM pracownicy, organizacja WHERE (dzial=id_org) GROUP BY dzial HAVING COUNT(imie)<3</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT nazwa_dzialu, COUNT(imie) AS ilosc, nazwa_dzialu FROM pracownicy, organizacja WHERE (dzial=id_org) GROUP BY dzial HAVING COUNT(imie)<3');
          echo("<table border=1>");
          echo("<td>NAZWA DZIAŁU</td>");
          echo("<th>ILOŚĆ</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["nazwa_dzialu"]. "</td><td>" .$row["ilosc"]. "</td><td>" .$row["nazwa_dzialu"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
?>

    </head>
  </html>
