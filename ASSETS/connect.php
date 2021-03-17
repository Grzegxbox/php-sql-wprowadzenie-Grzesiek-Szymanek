<?php

$servername = $_SERVER['db'];
$username = $_SERVER['root'];
$password = $_SERVER['root'];
$dbname = $_SERVER['tom']; 

$conn= new mysqli($_SERVER['servername'],$_SERVER['username'],$_SERVER['password'],$_SERVER['dbname']);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());
}

?>
