<?php

// Add your data (jak by co to nie mam takich nazw użytkownika, haseł i nazwy serwera)
$servername = "remotemysql.com";
$username = "Rp4CxP6YkY";
$password = "V0BMRFi2V3";
$dbname = " Rp4CxP6YkY"; 

// Create connection (łącze się z moją bazą danych)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection (sprawdzam połączenie z bazą danych)
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
