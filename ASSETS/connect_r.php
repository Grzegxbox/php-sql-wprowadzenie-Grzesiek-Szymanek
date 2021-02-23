<?php
$servername = $_SERVER_r['servername_r'];
$username = $_SERVER_r['username_r'];
$password = $_SERVER_r['password_r'];
$dbname = $_SERVER_r['dbname_r']; 

$conn= new mysqli($_SERVER_r['servername_r'],$_SERVER_r['username_r'],$_SERVER_r['password_r'],$_SERVER_r['dbname_r']);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());
}
?>