<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="style.css">
<a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  
<div class="nav">
  <a class="navigation_link1" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
</div>
  

<h1>Funkcja Agregująca - DATA I CZAS</h1>

<?php
  echo("<h3>1. SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy');
          echo("<table border=1>");
          echo("<th>ID</th>");
          echo("<th>IMIĘ</th>");
          echo("<th>DZIAŁ</th>");
          echo("<th>ZAROBKI</th>");
          echo("<th>WIEK</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["wiek"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>2. SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy WHERE nazwa_dzial='serwis'</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy WHERE dzial=1');
          echo("<table border=1>");
          echo("<th>ID</th>");
          echo("<th>IMIĘ</th>");
          echo("<th>DZIAŁ</th>");
          echo("<th>ZAROBKI</th>");
          echo("<th>WIEK</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["wiek"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>3. SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS calosclat FROM pracownicy</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS calosclat FROM pracownicy');
          echo("<table border=1>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["calosclat"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>4. SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (id_org=dzial) AND (nazwa_dzial='handel') AND (dzial=2)</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (id_org=dzial) AND (nazwa_dzial="handel") AND (dzial=2)');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>5. SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma, IF(imie like '%a', 'Kobiety', 'Mężczyźni') AS plec FROM pracownicy WHERE (imie LIKE '%a') GROUP BY plec</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma, IF(imie like "%a", "Kobiety", "Mężczyźni") AS plec FROM pracownicy WHERE (imie LIKE "%a") GROUP BY plec');
          echo("<table border=1>");
          echo("<th>PŁEĆ</th>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["plec"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>6. SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma, IF(imie not like '%a', 'Kobiety', 'Mężczyźni') AS plec FROM pracownicy WHERE (imie not LIKE '%a') GROUP BY plec</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma, IF(imie like "%a", "Kobiety", "Mężczyźni") AS plec FROM pracownicy WHERE (imie not LIKE "%a") GROUP BY plec');
          echo("<table border=1>");
          echo("<th>PŁEĆ</th>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["plec"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>7. SELECT dzial, nazwa_dzial, AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS srednia FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS srednia FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>ŚREDNIA WIEKU</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>8. SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3>9. SELECT dzial, nazwa_dzial, MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS maxi FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS maxi FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial');
          echo("<table border=1>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["maxi"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  
 
?>

    </head>
  </html>
