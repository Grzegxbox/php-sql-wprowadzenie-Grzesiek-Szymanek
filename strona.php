<!DOCTYPE html>

<html>
  <head>
    <h1>TWOJE DANE</h1>
  </head

<body>
  
<?php

echo("<h3>IMIĘ</h3>");
echo($_POST['imie']);

echo("<h3>DZIAŁ</h3>");
echo($_POST['dzial']);

echo("<h3>ZAROBKI</h3>");
echo($_POST['zarobki']);

echo("<h3>DATA URODZENIA</h3>");
echo($_POST['data_urodzenia']);

    
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
