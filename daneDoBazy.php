<!DOCTYPE html>
<html>
  
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="style.css">
</head>

<body>
   <div class="container">
     <div class="item colorRed">
      <h1 class="tltle"><a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">WYŚWIETL KOD - GitHub</a></h1>
     </div>
     <div class="item colorBlue">
      <h1 style="margin-left: 15%;">MENU STRONY</h1>
       <div class="nav">
          <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
          <h1 style="font-size: 19px;margin-top: 350%;text-align: center;">Autor: Grzesiek Szymanek</h1>
       </div>
      </div>
     <div class="item colorGreen">
       <h1 style="margin-left: 38%; color: #3cb300;">STRONA GŁÓWNA</h1>
         <h1>FORMULARZ</h1>
            <div class="dodawanie">
              <h2>DODAWANIE PRACOWNIKÓW</h2>
                 <form action="insert.php" method="POST" style="margin-left: 80px;">
                   <input type="text" name="imie" placeholder="IMIĘ"></br>
                   <input type="text" name="dzial" placeholder="DZIAŁ"></br>
                   <input type="text" name="zarobki" placeholder="ZAROBKI"></br>
                   <input type="date" name="data_urodzenia" placeholder="DATA URODZENIA"></br>
                   <input type="submit" value="DODAJ" style="margin-left: 40px;">
                 </form>
            </div>
              <div class="odejmowanie">
                 <h2>USUWANIE PRACOWNIKÓW</h2>
                   <form action="delete.php" method="POST" style="margin-left: 85px;">
                     <input type="text" name="id" placeholder="ID PRACOWNIKA"></br>
                     <input type="submit" value="USUŃ" style="margin-left: 55px;">
                   </form>
             </div>
<?php
  
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org)');
        echo("<table border='2' style='margin-top: 100px;margin-left: 80px;'>");
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

</div>

</body>
</html>
