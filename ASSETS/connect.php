<?php

$conn= new mysqli($_SERVER['servername'],$_SERVER['username'],$_SERVER['password_'],$_SERVER['dbname']);
if ($conn->connect_error) {
    die("connection failed: ". $conn->connect_error);
}
?>
