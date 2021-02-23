<?php
// Add your data (jak by co to nie mam takich nazw użytkownika, haseł i nazwy serwera) - remotemysql.com","QcPKWLShOa","KnxvVt5XqH","QcPKWLShOa (na jedna osobe)



$conn= new mysqli($_SERVER['servername'],$_SERVER['username'],$_SERVER['password'],$_SERVER['dbname']);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());
}

?>
