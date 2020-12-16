<?php

// Add your data (jak by co to nie mam takich nazw użytkownika, haseł i nazwy serwera) - remotemysql.com","QcPKWLShOa","KnxvVt5XqH","QcPKWLShOa (na jedna osobe)
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

?>
