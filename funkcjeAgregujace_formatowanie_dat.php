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
  
echo("<h3>2. SET lc_time_names = 'pl_P'; SELECT DATE_FORMAT(CURDATE(), '%W') AS dziś FROM pracownicy</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SET lc_time_names = "pl_P"; SELECT DATE_FORMAT(CURDATE(), "%W") AS dziś FROM pracownicy');
        echo("<table border=2>");
        echo("<th>DZISIEJSZY DZIEŃ</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzis"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
  
  
  
  
  
  ?>
  
  </body>
</html>


  
