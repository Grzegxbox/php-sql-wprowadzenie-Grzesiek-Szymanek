<!DOCTYPE html>

<html>


<body>
  
<?php


echo("<h2>TWOJE DANE</h2>");
 <hr></hr>
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



?>

</body>
</html>
