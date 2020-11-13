<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="style.css">
<a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  
<div class="nav">
  <a class="navigation_link1" href="funkcjeAgregujace_data_i_czas.php">Funkcja Agregująca - DATA I CZAS</a>
</div>
  
  </head>
  <hr></hr>
<body>
  
<h1>FUNKCJA AGREGUJĄCA - DATA I CZAS - FORMATOWANIE DAT</h1>
  
  <?php
   echo("<h3>1. SELECT *, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') AS dni FROM pracownicy</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT *, DATE_FORMAT(data_urodzenia,"%W-%m-%Y") AS dni FROM pracownicy');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
        echo("<th>DATA URODZENIA</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["dni"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
echo("<h3>2. SET lc_time_names = 'pl_PL'; SELECT DATE_FORMAT(CURDATE(), '%W') AS dzis</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SET lc_time_names = "pl_PL" ');
    $result=$conn->query('SELECT DATE_FORMAT(CURDATE(), "%W") AS dzis ');
        echo("<table border=2>");
        echo("<th>DZISIEJSZY DZIEŃ</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzis"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
   echo("<h3>3. SELECT *, DATE_FORMAT(data_urodzenia,'%w-%M-%Y') AS dni FROM pracownicy</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT *, DATE_FORMAT(data_urodzenia,"%w-%M-%Y") AS dni FROM pracownicy');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
        echo("<th>DATA URODZENIA</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["dni"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
echo("<h3>4. SET TIME_ZONE = '+01:00'; SELECT curtime(4)</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SET TIME_ZONE = "+01:00"');
    $result=$conn->query('SELECT curtime(4) AS teraz');
        echo("<table border=2>");
        echo("<th>AKTUALNA GODZINA</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["teraz"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
   echo("<h3>5. SELECT *, DATE_FORMAT(data_urodzenia,'%Y-%M-%W') AS czas FROM pracownicy</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT *, DATE_FORMAT(data_urodzenia,"%Y-%M-%W") AS czas FROM pracownicy');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
        echo("<th>DATA URODZENIA</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["czas"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
echo("<h3>6. SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) AS dd, DATEDIFF(CURDATE(),data_urodzenia)*24 AS hh, DATEDIFF(CURDATE(),data_urodzenia)*24*60 AS mm FROM pracownicy WHERE (imie='Grzesiek)'</h3>");
  $conn= new mysqli("remotemysql.com","QcPKWLShOa","viq6LN8MWE","QcPKWLShOa");
    $result=$conn->query('SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) AS dd, DATEDIFF(CURDATE(),data_urodzenia)*24 AS hh, DATEDIFF(CURDATE(),data_urodzenia)*24*60 AS mm FROM pracownicy WHERE (imie="Grzesiek")');
        echo("<table border=2>");
        echo("<th>IMIĘ</th>");
        echo("<th>DNI ŻYCIA</th>");
        echo("<th>GODZINY ŻYCIA</th>");
        echo("<th>MINUTY ŻYCIA</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["imie"]. "</td><td>" .$row["dd"]. "</td><td>" .$row["hh"]. "</td><td>" .$row["mm"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
echo("<h3>7. SELECT imie, DATE_FORMAT('data_urodzenia', '%D') AS dzur FROM pracownicy WHERE (imie='Grzesiek')</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT imie, DATE_FORMAT("data_urodzenia", "%D") AS dzur FROM pracownicy WHERE (imie="Grzesiek")');
        echo("<table border=2>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIEŃ NARODZIN</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["imie"]. "</td><td>" .$row["dzur"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  
  
  
  
  
  ?>
  
  </body>
</html>


  
