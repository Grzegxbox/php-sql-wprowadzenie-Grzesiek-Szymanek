<!DOCTYPE html>
<html>

<head>
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
  } else  {
  echo('ERROR: ' .$sql. '<br>' .$conn->error);
  }
  $conn->close();

?>

  </body>
</html>
