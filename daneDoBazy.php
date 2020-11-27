<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>

  <h3>DODAWANIE PRACOWNIKÓW</h3>
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
     <input type="submit" value="DODAJ">
   </form>
    
  </h3>USUWANIE PRACOWNIKÓW</h3>
<body>
   <form action="delete.php" method="POST">
     ID
     <input type="text" name="id" placeholder="ID PRACOWNIKA"></br>
     <input type="submit" value="USUŃ">
   </form>
</body>




</html>
