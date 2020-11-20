<!DOCTYPE html>

<html>
  <head>
    <h1>TWOJE DANE</h1>
  </head

<body>
  
<?php

echo("<h3>IMIĘ</h3>");
echo($_POST['Imie']);

echo("<h3>DZIAŁ</h3>");
echo($_POST['Dzial']);

echo("<h3>ZAROBKI</h3>");
echo($_POST['Zarobki']);

echo("<h3>DATA URODZENIA</h3>");
echo($_POST['Data_Urodzenia']);

    
$servername = "remotemysql.com";
$username = "Rp4CxP6YkY";
$password = "V0BMRFi2V3";
$dbname = "Rp4CxP6YkY";

$conn = new mysqli('remotemysql.com', 'Rp4CxP6YkY', 'V0BMRFi2V3', 'Rp4CxP6YkY');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    
require_once("connect.php");
$sql = "INSERT INTO pracownicy ('id_pracownicy', 'imie', 'dzial', 'zarobki', 'data_rodzenia')
VALUES ('NULL', 'imie', 'dzial', 'zarobki', 'data_urodzenia')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully :)";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>
