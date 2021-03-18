<?php

require_once('config.php');

$servername = $_SERVER['servername'];
$username = $_SERVER['username'];
$password = $_SERVER['password'];
$dbname = $_SERVER['dbname']; 

$conn= new mysqli($_SERVER['servername'],$_SERVER['username'],$_SERVER['password_'],$_SERVER['dbname']);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());
}
?>
