<!DOCTYPE html>
<html>

<head>
  <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
  <hr></hr>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>


<div class="dodawanie">
  <h2>DODAWANIE PRACOWNIKÓW</h2>
<body>
   <form action="insert.php" method="POST">
     <input type="text" name="imie" placeholder="IMIĘ"></br>
     <input type="text" name="dzial" placeholder="DZIAŁ"></br>
     <input type="text" name="zarobki" placeholder="ZAROBKI"></br>
     <input type="date" name="data_urodzenia" placeholder="DATA URODZENIA"></br>
     <input type="submit" value="DODAJ">
   </form>
</div>


<div class="odejmowanie">
  <h2>USUWANIE PRACOWNIKÓW</h2>
<body>
   <form action="delete.php" method="POST">
     <input type="text" name="id" placeholder="ID PRACOWNIKA"></br>
     <input type="submit" value="USUŃ">
   </form>
</body>
</div>


<?php
  
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org)');
        echo("<table border="2" style='margin-top: 100px;margin-left: 80px;'>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
        echo("<th>NAZWA DZIAŁU</th>");
        echo("<th>DATA URODZENIA</th>");
        echo("<th>USUŃ</th>");
        
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td><td>" .$row["nazwa_dzial"]. "</td><td>" .$row["data_urodzenia"]. "</td>
                    
                    <td>
                    <form action='delete.php' method='POST'>
                          <input type='text' name='id' value='".$row["id_pracownicy"]."' placeholder='ID PRACOWNIKA' hidden></br>
                                    <input type='submit' value='USUŃ'>
                          </form>
                    </td>");
              
                echo("</tr>");
            }
        echo("</table>");

?>


</html>
