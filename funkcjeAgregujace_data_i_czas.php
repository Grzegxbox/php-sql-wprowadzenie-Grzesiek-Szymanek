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
  
//   echo("<h3>3. SELECT dzial, nazwa_dzial, COUNT(id_pracownicy) AS ilosc FROM pracownicy, organizacja WHERE (dzial=id_org) GROUP BY dzial HAVING COUNT(id_pracownicy)>3</h3>");
//       $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//       $result = $conn -> query('SELECT dzial, nazwa_dzial, COUNT(id_pracownicy) AS ilosc FROM pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING COUNT(id_pracownicy)>3');
//           echo("<table border=1>");
//           echo("<th>DZIAŁ</th>");
//           echo("<th>NAZWA DZIAŁU</th>");
//           echo("<th>ILOŚĆ</th>");
//               while($row = $result -> fetch_assoc()){
//                   echo("<tr>");
//                       echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["ilosc"]. "</td>");
//                   echo("</tr>");
//               }
//           echo("</table>");
?>

    </head>
  </html>
