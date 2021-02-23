<!DOCTYPE html>
<html>
  
  <head>
    <title>Grzesiek Szymanek 2TI gr2</title>
    <div>
      <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
    </div>
    <link rel="stylesheet" href="/ASSETS/style.css">
    <link rel="icon" href="https://i.ytimg.com/vi/iu-skHVnxGc/hqdefault.jpg">
    <hr></hr>
  </head>
  
<body>
  <h1>TWOJE DANE</h1>
<?php

echo("<h3>IMIĘ:</h3>");
echo("<h3>".$_POST['imie']."</h3>");
  
echo("<h3>DZIAŁ:</h3>");  
echo("<h3>".$_POST['dzial']."</h3>");
  
echo("<h3>ZAROBKI:</h3>");
echo("<h3>".$_POST['zarobki']."</h3>");
  
echo("<h3>DATA URODZENIA:</h3>");  
echo("<h3>".$_POST['data_urodzenia']."</h3>");
  
  
require_once("ASSETS/connect.php");

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia)
VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";

if ($conn->query($sql) === TRUE) {
  echo "WŁAŚNIE SIĘ DODAŁEŚ";
  header('Location: https://wprowadzenie.herokuapp.com/');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
// Tabelka  
$conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org)');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>NAZWA DZIAŁU</th>");
        echo("<th>ZAROBKI</th>");
        echo("<th>DATA URODZENIA</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["data_urodzenia"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

?>
