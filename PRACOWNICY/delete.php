<!DOCTYPE html>
<html>

<head>
     <title>Grzesiek Szymanek 2TI gr2</title>
     <div>
    <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
  </div>
    <hr></hr>
  <link rel="stylesheet" href="/ASSETS/style.css">
  <link rel="icon" href="https://i.ytimg.com/vi/iu-skHVnxGc/hqdefault.jpg"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
<!--   <title>Dane do Bazy</title> -->
</head>
<body>

<?php
  
echo("<h1>ID: ".$_POST['id']."</h1>");
  
require_once("../ASSETS/connect.php");

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM pracownicy WHERE id_pracownicy=('".$_POST['id']."')";

if ($conn->query($sql) === TRUE){
  echo("PRACOWNIK ZOSTAŁ USUNIĘTY");
  header('Location: https://wprowadzenie.herokuapp.com/');
  } else  {
  echo('ERROR: ' .$sql. '<br>' .$conn->error);
  }
  $conn->close();

?>

  </body>
</html>

