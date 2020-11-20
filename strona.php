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

    
require_once("connect.php");
$sql = "INSERT INTO pracownicy ('id_pracownicy', 'imie', 'dzial', 'zarobki', 'data_rodzenia')
VALUES ('NULL', '".$_POST['imie']."', 'dzial', 'zarobki', 'data_urodzenia')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully :)";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>
