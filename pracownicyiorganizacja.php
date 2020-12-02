<!DOCTYPE html>

<html>
<head>
  
<link rel="stylesheet" href="style.css">
<a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  
<div class="nav">
    <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
    <a class="navigation_link1" href="function.php">Funkcja</a>
    <a class="navigation_link1" href="daneDoBazy.php">Formularz</a>
    <a class="navigation_link1" href="pracownicy.php">Pracownicy</a>
    <a class="navigation_link1" href="funkcjeAgregujace.php">Funkcje Agregujące</a>
    <a class="navigation_link1" href="pracownicyiorganizacja.php">Pracownicy I Organizacja</a>
    <a class="navigation_link1" href="biblioteka.php">Biblioteka</a>
</div>
  
  <hr></hr>
 </head>
<body>
  
<h1>PRACOWNICY I ORGANIZACJA</h1>
  
<h4>Linki do stron z odpowiednimi funkcjami</h4>
  <a class="navigation_link1" href="pracownicyiorganizacja_sortowanie.php">Sortowanie Pracowników</a>
  <a class="navigation_link1" href="pracownicyiorganizacja_ograniczanie.php">Ograniczanie Ilości Pracowników</a>

  
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
  
  echo("<h3>1. SELECT * FROM pracownicy, organizacja WHERE (dzial=1 or dzial=4) AND (dzial=id_org)</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=1 or dzial=4) AND (dzial=id_org)');
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
  
  echo("<h3>2. SELECT * FROM pracownicy, organizacja WHERE (imie like '%a') AND (dzial=id_org)</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (imie like "%a") AND (dzial=id_org)');
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
  
    echo("<h3>3. SELECT * FROM pracownicy, organizacja WHERE (imie not like '%a') AND (dzial=id_org)</h3>");
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (imie not like "%a") AND (dzial=id_org)');
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
?>
  
  </body>
</html>
