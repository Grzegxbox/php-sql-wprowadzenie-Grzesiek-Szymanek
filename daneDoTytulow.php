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
           <a class="navigation_link1" href="formularze.php">Formularze</a>
           <a class="navigation_link1" href="daneDoBazy.php">Formularz - Pracownicy</a>
           <a class="navigation_link1" href="daneDoAutorow.php">Formularz - Autorzy</a>
           <a class="navigation_link1" href="daneDoTytulow.php">Formularz - Książki</a>
           <h1 style="font-size: 19px;margin-top: 250%;text-align: center;">Autor: Grzesiek Szymanek</h1>
       </div>
      </div>
     <div class="item colorGreen">
       <h1 style="margin-left: 33.5%; color: #3cb300;">FORMULARZ - KSIĄŻKI</h1>
          <div class="dodawanie" style="margin-top: 7%;">
            <h2 style="margin-left: 12%;color: #2E8B57;">DODAWANIE KSIĄŻKI</h2>
               <form action="insert_tytul.php" method="POST" style="margin-left: 19%;">
                 <input type="text" name="id" placeholder="ID"><br>
                 <input type="text" name="tytul" placeholder="TYTUŁ"><br>
                 <input type="submit" value="DODAJ" style="margin-left: 40px;">
               </form>
            </div>
              <div class="odejmowanie">
                 <h2 style="color: #2E8B57;margin-top: 14%;margin-left: 13%;">USUWANIE KSIĄŻKI</h2>
                   <form action="delete_tytul.php" method="POST" style="margin-left: 31%;">
                     <input type="text" name="id" placeholder="ID KSIĄŻKI"><br>
                     <input type="submit" value="USUŃ" style="margin-left: 13%;">
                   </form>
             </div>
       
             
           <?php
  
  $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblTytul');
        echo("<table style='margin-top: 11%;margin-left: 25%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>TYTUŁ</th>");
        echo("<th>USUŃ</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["tytul"]. "</td>
                    
                    <td>
                    <form action='delete_tytul.php' method='POST'>
                          <input type='text' name='id' value='".$row["id"]."' placeholder='ID KSIĄŻKI' hidden></br>
                                    <input type='submit' value='USUŃ'>
                          </form>
                    </td>");
              
                echo("</tr>");
            }
        echo("</table>");
?>
       
       
       
       
       
       </body>
     </html>
