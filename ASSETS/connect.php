<?php

echo("<li>info z dockera,:) ")";

$servername = "db";
$username = "root";
$password = "root";
$dbname = "tom";

$conn= new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());
}

?>
