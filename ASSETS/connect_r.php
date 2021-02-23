<?php
$servername = $_SERVER_r['servername'];
$username = $_SERVER_r['username'];
$password = $_SERVER_r['password'];
$dbname = $_SERVER_r['dbname']; 

$conn= new mysqli($_SERVER_r['servername'],$_SERVER_r['username'],$_SERVER_r['password'],$_SERVER_r['dbname']);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());
}
?>