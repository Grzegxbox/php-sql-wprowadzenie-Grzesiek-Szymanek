<!DOCTYPE html>

<html>
  <head>
    <h1>TWOJE DANE</h1>
  </head

<body>
  
<?php

echo("<h3>IMIĘ</h3>");
echo($_POST['Imie']);

echo("<h3>NAZWISKO</h3>");
echo($_POST['Nazwisko']);

echo("<h3>MIEJSCOWOŚĆ</h3>");
echo($_POST['Miejscowosc']);

echo("<h3>PESEL</h3>");
echo($_POST['Pesel']);

echo("<h3>DATA URODZENIA</h3>");
echo($_POST['Data_Urodzenia']);

$sql = "INSERT INTO pracownicy ('id_pracownicy','imie','dzial','zarobki','data_rodzenia')
VALUES ('NULL','imie','dzial','zarobki','data_urodzenia')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully :)";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>
