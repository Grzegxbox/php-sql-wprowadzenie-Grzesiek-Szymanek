<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="style.css">
<a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  
<div class="nav">
  <a class="navigation_link1" href="https://nieumiem.herokuapp.com/">Strona Główna</a>
  <a class="navigation_link1" href="pracownicy.php">Pracownicy</a>
  <a class="navigation_link1" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
  <a class="navigation_link1" href="pracownicyiorganizacja.php">Pracownicy I Organizacja</a>
</div>
  
  <hr></hr>
  </head>
  <body>
    
  
<h1>PRACOWNICY</h1>
 
<?php
  echo("<h3>0. SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org)</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org)');
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
  
  echo("<h3>1. SELECT * FROM pracownicy WHERE dzial=2</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy WHERE dzial=2');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
 
    echo("<h3>2. SELECT * FROM pracownicy WHERE (dzial=2 or dzial=3)</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy WHERE (dzial=2 or dzial=3)');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
  
    echo("<h3>3. SELECT * FROM pracownicy WHERE (zarobki<30)</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy WHERE (zarobki<30)');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
    
     echo("<h3>10. SET lc_time_names = 'pl_PL'; SELECT DATE_FORMAT(data_urodzenia,'%W') AS dzionek, COUNT(DATE_FORMAT(data_urodzenia,'%W')) AS ichilosc FROM pracownicy GROUP BY dzionek ORDER BY CASE WHEN dzien = 'Poniedziałek' THEN 1 WHEN dzien = 'Wtorek' THEN 2 WHEN dzien = 'Środa' THEN 3 WHEN dzien= 'Czwartek' THEN 4 WHEN dzien = 'Piątek' THEN 5 WHEN dzien = 'Sobota' THEN 6 WHEN dzien = 'Niedziela' THEN 7 END ASC</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SET lc_time_names = "pl_PL" ');
    $result=$conn->query('SELECT CONUT(DATE_FORMAT(data_urodzenia,"%W")) AS ilosc, DATE_FORMAT(data_urodzenia,"%W") AS dzien FROM pracownicy GROUP BY dzien ORDER BY 
                                   CASE
                                        WHEN dzien = "Poniedziałek" THEN 1
                                        WHEN dzien = "Wtorek" THEN 2
                                        WHEN dzien = "Środa" THEN 3
                                        WHEN dzien = "Czwartek" THEN 4
                                        WHEN dzien = "Piątek" THEN 5
                                        WHEN dzien = "Sobota" THEN 6
                                        WHEN dzien = "Niedziela" THEN 7
                                   END ASC";');
        echo("<table border=2>");
        echo("<th>ILOŚĆ PRACOWNIKÓW</th>");
        echo("<th>DZIEŃ TYGODNIA</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["ilosc"]. "</td><td>" .$row["dzien"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
?>
  
  </body>
</html>
