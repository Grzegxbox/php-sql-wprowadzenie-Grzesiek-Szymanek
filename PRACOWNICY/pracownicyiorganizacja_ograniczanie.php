<!DOCTYPE html>
<html>
  
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="ASSETS/style.css">
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
           <a class="navigation_link1" href="PRACOWNICY/pracownicyiorganizacja.php">Pracownicy I Organizacja</a>
           <a class="navigation_link1" href="PRACOWNICY/pracownicyiorganizacja_sortowanie.php">Sortowanie Pracowników</a>
           <a class="navigation_link1" href="PRACOWNICY/pracownicyiorganizacja_ograniczanie.php">Ograniczanie Ilości Pracowników</a>
           <h1 style="font-size: 19px;margin-top: 85%;text-align: center;">Autor: Grzesiek Szymanek</h1>
         </div>
       
       </div>
     
      <div class="item colorGreen">
        <h1 style="margin-left: 23%; color: #3cb300;">WYKORZYSTANIE FUNKCJI 'LIMIT'</h1>

<?php
  
echo("<h3 style='margin-top: 70px; margin-left: 5%;'>1. SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) AND (dzial=4) ORDER BY zarobki desc LIMIT 2</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) AND (dzial=4) ORDER BY zarobki desc LIMIT 2');
        echo("<table style='margin-left: 5%;' border=2>");
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

echo("<h3 style='margin-top: 70px; margin-left: 5%;'>2. SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie like '%a') AND (dzial=2 OR dzial=4) ORDER BY zarobki desc LIMIT 3</h3>");
    $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie like "%a") AND (dzial=2 OR dzial=4) ORDER BY zarobki desc LIMIT 3');
        echo("<table style='margin-left: 5%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
        echo("<th>NAZWA DZIAŁU</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["nazwa_dzial"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

echo("<h3 style='margin-top: 70px; margin-left: 5%;'>3. SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) ORDER BY data_urodzenia LIMIT 1</h3>");
    $conn = new mysqli ("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result = $conn -> query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org) ORDER BY data_urodzenia LIMIT 1');
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
