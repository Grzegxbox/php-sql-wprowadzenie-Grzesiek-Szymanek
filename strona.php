<!DOCTYPE html>

<html>
  <head>
    <h1>TWOJE DANE</h1>
  </head

<body>
  
<?php

echo("<li>IMIĘ:".$_POST["imie"]);
echo("<li>DZIAŁ:".$_POST["dzial"]);
echo("<li>ZAROBKI:".$_POST["zarobki"]);
echo("<li>DATA URODZENIA:".$_POST["data_urodzenia"]);

$servername = "remotemysql.com";
$username = "Rp4CxP6YkY";
$password = "V0BMRFi2V3";
$dbname = " Rp4CxP6YkY"; 

$conn = new mysqli('$remotemysql.com', '$Rp4CxP6YkY', '$V0BMRFi2V3', '$Rp4CxP6YkY');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    
require_once("connect.php");
$sql = "INSERT INTO Pracownik (null, imie, dzial, zarobki) 
       VALUES (null,'Bartosz', 1, 27,'1969-01-17')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully :)";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    

$conn->close();

?>
    
</body>
</html>
