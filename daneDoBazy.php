<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>

<body>
   <form action="insert.php" method="POST">
      Imię
     <input type="text" name="imie"></br>
      Dział
     <input type="text" name="dzial"></br>
      Zarobki
     <input type="text" name="zarobki"></br>
      Data Urodzenia
     <input type="date" name="data_urodzenia"></br>
     <input type="submit" value="WYŚLIJ DO BAZY">
   </form>
</body>

<?php

echo("<h1>id: ".$_POST['id']."</h1>");
  require_once('connect.php');

$sql = "DELETE FROM pracownicy WHERE id_pracownicy=('".$_POST['id']."')";

if($conn->query($sql)==TRUE){
  echo("<h1 class='ja'>PRACOWNIK ZOSTAŁ USUNIĘTY</h1>");
  } else  {
  echo("<h1 class='ja'>'ERROR: ' .$sql. '<br>' .$conn->error</h1>");
  }

?>

</html>
