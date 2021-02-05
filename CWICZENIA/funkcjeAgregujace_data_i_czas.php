<!DOCTYPE html>
<html>
  
<head>
<title>Grzesiek Szymanek 2TI gr2</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="/ASSETS/style.css">
<link rel="icon" href="https://i.ytimg.com/vi/iu-skHVnxGc/hqdefault.jpg">
</head>

<body>
   <div class="container">
     <div class="item colorRed">
      <h1 class="tltle"><a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">WYŚWIETL KOD - GitHub</a></h1>
     </div>
     
     <div class="item colorBlue">
      <h1 style="margin-left: 15%;">MENU STRONY</h1>
       
         <div class="nav">
           <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace.php">Funkcje Agregujące</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace_kontynuacja.php">Kontynuacja Funkcji Agregujących</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace_grupowanie.php">Funkcja Agregująca - Grupowanie</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace_klauzula_HAVING.php">Funkcja Agregująca - Having</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace_data_i_czas.php">Funkcja Agregująca - Data I Czas</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace_formatowanie_dat.php">Funkcja Agregująca - Formatowanie Dat</a>
           <h1 style="font-size: 19px;margin-top: 735%;text-align: center;">Autor: Grzesiek Szymanek</h1>
         </div>
       
       </div>
     
      <div class="item colorGreen">
        <h1 style="margin-left: 20%; color: #3cb300;">FUNKCJA AGREGUJĄCA - DATA I CZAS</h1>

<?php
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>1. SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy');
          echo("<table style='margin-left: 5%;' border=2>");
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
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>2. SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy WHERE nazwa_dzial='serwis'</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy WHERE dzial=1');
          echo("<table style='margin-left: 5%;' border=2>");
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
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>3. SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS calosclat FROM pracownicy</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS calosclat FROM pracownicy');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["calosclat"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>4. SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (id_org=dzial) AND (nazwa_dzial='handel') GROUP BY dzial</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (id_org=dzial) AND (nazwa_dzial="handel") GROUP BY dzial');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>5. SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma, IF(imie like '%a', 'Kobiety', 'Mężczyźni') AS plec FROM pracownicy WHERE (imie LIKE '%a') GROUP BY plec</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma, IF(imie like "%a", "Kobiety", "Mężczyźni") AS plec FROM pracownicy WHERE (imie LIKE "%a") GROUP BY plec');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>PŁEĆ</th>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["plec"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>6. SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma, IF(imie not like '%a', 'Kobiety', 'Mężczyźni') AS plec FROM pracownicy WHERE (imie not LIKE '%a') GROUP BY plec</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma, IF(imie like "%a", "Kobiety", "Mężczyźni") AS plec FROM pracownicy WHERE (imie not LIKE "%a") GROUP BY plec');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>PŁEĆ</th>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["plec"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>7. SELECT dzial, nazwa_dzial, AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS srednia FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS srednia FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>ŚREDNIA WIEKU</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["srednia"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>8. SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS suma FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>SUMA LAT</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["suma"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>9. SELECT dzial, nazwa_dzial, MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS maxi FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS maxi FROM pracownicy, organizacja WHERE (id_org=dzial) GROUP BY dzial');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>NAJWYŻSZY WIEK</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["maxi"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>10. SELECT dzial, nazwa_dzial, MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS mini  FROM pracownicy, organizacja WHERE (id_org=dzial) AND (nazwa_dzial='handel' or nazwa_dzial='serwis') GROUP BY dzial</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT dzial, nazwa_dzial, MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS mini  FROM pracownicy, organizacja WHERE (id_org=dzial) AND (nazwa_dzial="handel" or nazwa_dzial="serwis") GROUP BY dzial');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>DZIAŁ</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>NAJNIŻSZY WIEK</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["mini"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>11. SELECT imie, dzial, nazwa_dzial, MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS mini  FROM pracownicy, organizacja WHERE (id_org=dzial) AND (nazwa_dzial='handel' or nazwa_dzial='serwis') GROUP BY dzial --> Nie moge wykonać tego zadania bo muszę zmienić tryb SQL a był on potrzebny w poprzednich zadanich i gdybym zmienił to ustawienie to jedno zadanie będzie działać a drugie nie.</h3>");
//       $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//       $result = $conn -> query('SELECT nazwa_dzial, MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS minizar, imie  FROM pracownicy, organizacja WHERE (dzial=id_org) AND (nazwa_dzial="handel" OR nazwa_dzial="serwis") ORDER BY dzial');
//           echo("<table style='margin-left: 5%;' border=2>");
//           echo("<th>IMIĘ</th>");
//           echo("<th>DZIAŁ</th>");
//           echo("<th>NAZWA DZIAŁU</th>");
//           echo("<th>NAJNIŻSZY WIEK</th>");
//               while($row = $result -> fetch_assoc()){
//                   echo("<tr>");
//                       echo("<td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["mini"]. "</td>");
//                   echo("</tr>");
//               }
//           echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>12. SELECT *, DATEDIFF(CURDATE(),data_urodzenia) AS dnilat FROM pracownicy</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT *, DATEDIFF(CURDATE(),data_urodzenia) AS dnilat FROM pracownicy');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>ID</th>");
          echo("<th>IMIĘ</th>");
          echo("<th>DZIAŁ</th>");
          echo("<th>ZAROBKI</th>");
          echo("<th>DNI ŻYCIA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["dnilat"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
  
  echo("<h3 style='margin-top: 70px; margin-left: 5%;'>13. SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie NOT LIKE '%a') ORDER BY data_urodzenia LIMIT 1</h3>");
      $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
      $result = $conn -> query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie NOT LIKE "%a") ORDER BY data_urodzenia LIMIT 1');
          echo("<table style='margin-left: 5%;' border=2>");
          echo("<th>ID</th>");
          echo("<th>IMIĘ</th>");
          echo("<th>DZIAŁ</th>");
          echo("<th>ZAROBKI</th>");
          echo("<th>NAZWA DZIAŁU</th>");
          echo("<th>DATA URODZENIA</th>");
              while($row = $result -> fetch_assoc()){
                  echo("<tr>");
                      echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["data_urodzenia"]. "</td>");
                  echo("</tr>");
              }
          echo("</table>");
?>
     </div>
    </body>
  </html>
