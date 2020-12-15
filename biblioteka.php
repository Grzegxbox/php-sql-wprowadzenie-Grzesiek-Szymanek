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
           <a class="navigation_link1" href="biblioteka.php">Biblioteka</a>
           <a class="navigation_link1" href="wyporzyczone.php">Wypożycz książkę</a>
           <a class="navigation_link1" href="oddane.php">Oddaj książkę</a>
           <h1 style="font-size: 19px;margin-top: 400%;text-align: center;">Autor: Grzesiek Szymanek</h1>
         </div>
       </div>
      <div class="item colorGreen">
        
       <h1 style="margin-left: 41.5%; color: #3cb300;">BIBLIOTEKA</h1>
       
  <?php

        echo("<h2 style='margin-left: 5%; margin-top: 5%; color: #008000;'>Jeśli chcesz wypożyczyć lub oddać książkę przejedź do odpowiednich zakładek po lewej.</h2>"); 
 
echo("<h3 style='margin-top: 70px; margin-left: 5%;'>1. SELECT * FROM biblAutor</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblAutor');
        echo("<table style='margin-left: 5%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>AUTOR</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["autor"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

 
 
echo("<h3 style='margin-top: 70px; margin-left: 5%;'>2. SELECT * FROM biblTytul</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblTytul');
        echo("<table style='margin-left: 5%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>TYTUŁ</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["tytul"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

echo("<h3 style='margin-top: 70px; margin-left: 5%;'>3. SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE (biblAutor_id=biblAutor.id) AND (biblTytul_id=biblTytul.id)</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE (biblAutor_id=biblAutor.id) AND (biblTytul_id=biblTytul.id)');
        echo("<table style='margin-left: 5%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>AUTOR</th>");
        echo("<th>TYTUŁ</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["autor"]. "</td><td>" .$row["tytul"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");
 
 
 
 
// Wybór autora
echo("<h3 style='margin-top: 9%; margin-left: 5%;'>SELECT * FROM biblAutor - WYBIERANIE</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblAutor');
       echo("<select name='title' id='title' style='margin-left: 17%;'>");
          while($row=$result->fetch_assoc()){ 
            echo("<option value=".$row['id'].">".$row['autor']."</option>");
          }
       echo("</select>");

// Wybór tytułu książki 
echo("<h3 style='margin-top: -5.7%; margin-left: 55%;'>SELECT * FROM biblTytul - WYBIERANIE</h3>");
    $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblTytul');
       echo("<select name='tytul' id='tytul' style='margin-left: 59.2%;'>");
          while($row=$result->fetch_assoc()){ 
            echo("<option value=".$row['id'].">".$row['tytul']."</option>");
          }
       echo("</select>");

// echo("<h3 style='margin-top: -1000px; margin-left: 850px;'>Wybierz Książkę I Autora Do Wypożyczenia</h3>");
//     $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result=$conn->query('SELECT * FROM biblAutor');
//        echo("<select name='tytul' id='tytul' style='margin-left: 850px;'>");
//           while($row=$result->fetch_assoc()){ 
//             echo("<option value=".$row['id'].">".$row['autor']."</option>");
//           }
//        echo("</select>");
// echo("<h3 style='margin-top: 20px; margin-left: 850px;'></h3>");
//     $conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result=$conn->query('SELECT * FROM biblTytul');
//        echo("<select name='tytul' id='tytul' style='margin-left: 850px;'>");
//           while($row=$result->fetch_assoc()){ 
//             echo("<option value=".$row['id'].">".$row['tytul']."</option>");
//           }
//        echo("</select>");
//   echo("<input type='submit' value='Wypożycz' style='margin-top: 20px; margin-left: 850px;'>");


?>
    </div>
  </body>
</html>
