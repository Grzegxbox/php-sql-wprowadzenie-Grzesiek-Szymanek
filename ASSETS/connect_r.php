<?php
$servername = $_SERVER['servername_r'];
$username = $_SERVER['username_r'];
$password = $_SERVER['password_r'];
$dbname = $_SERVER['dbname_r']; 

$conn= new mysqli($_SERVER['servername_r'],$_SERVER['username_r'],$_SERVER['password_r'],$_SERVER['dbname_r']);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());
}
?>
