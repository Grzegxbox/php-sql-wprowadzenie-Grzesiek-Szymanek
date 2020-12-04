<!DOCTYPE html>
<html>

<head>
     <div>
    <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
  </div>
    <hr></hr>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
<body>

<?php
  
echo("<h1>ID: ".$_POST['id']."</h1>");
  
$servername = "remotemysql.com";
$username = "Rp4CxP6YkY";
$password = "V0BMRFi2V3";
$dbname = "Rp4CxP6YkY";

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
