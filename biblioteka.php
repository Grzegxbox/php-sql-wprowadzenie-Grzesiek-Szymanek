<!DOCTYPE html>
<html>

<head>
 <link rel="stylesheet" href="style.css">
 <a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  <div class="nav">
    <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
  </div>
 <hr></hr>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width">
</head>

<h1>BIBLIOTEKA</h1>

<?php

echo("<h3>1. SELECT * FROM biblAutor</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblAutor');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>AUTOR</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["autor"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

echo("<h3>2. SELECT * FROM biblTytul</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblTytul');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>TYTUŁ</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["tytul"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

echo("<h3>3. SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE (biblAutor_id=biblAutor.id) AND (biblTytul_id=biblTytul.id)</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE (biblAutor_id=biblAutor.id) AND (biblTytul_id=biblTytul.id)');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>AUTOR</th>");
        echo("<th>TYTUŁ</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["autor"]. "</td><td>" .$row["tytul"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

echo("<h3 style='margin-top: -1000px; margin-left: 900px;'>SELECT * FROM biblTytul - WYBIERANIE</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblTytul');
       echo("<select name='tytul' id='tytul' style='margin-top: -1000px;margin-left: 900px;'>");
          while($row=$result->fetch_assoc()){ 
            echo("<option value=".$row['id'].">".$row['tytul']."</option>");
          }
       echo("</select>");



?>

</head>
</html>
