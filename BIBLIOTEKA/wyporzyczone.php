<!-- dałem sobie przez rz bo mogę  -->
<!DOCTYPE html>
<html>
  
<head>
<title>Grzesiek Szymanek 2TI gr2</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="/ASSETS/style.css">
<link rel="icon" href="https://i.ytimg.com/vi/iu-skHVnxGc/hqdefault.jpg">
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
           <a class="navigation_link1" href="/BIBLIOTEKA/biblioteka.php">Biblioteka</a>
           <a class="navigation_link1" href="/BIBLIOTEKA/wyporzyczone.php">Wypożycz książkę</a>
           <a class="navigation_link1" href="/BIBLIOTEKA/oddane.php">Oddaj książkę</a>
           <h1 style="font-size: 19px;margin-top: 250%;text-align: center;">Autor: Grzesiek Szymanek</h1>
         </div>
       </div>
      <div class="item colorGreen">
       <h1 style="margin-left: 35.5%; color: #3cb300;">WYPOŻYCZ KSIĄŻKĘ</h1>
  <?php

  require_once("../ASSETS/connect.php");

    echo("<h3 style='margin-top: 10%; margin-left: 31.5%;'>Wybierz Książkę I Autora Do Wypożyczenia</h3>");
    $result=$conn->query("SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE (biblAutor_id = biblAutor.id) AND (biblTytul_id = biblTytul.id)");
       echo("<select name='tytul' id='tytul' style='margin-left: 31.6%; margin-top: 2%;'>");
          while($row=$result->fetch_assoc()){ 
            echo("<option value=".$row['id'].">".$row['autor'].' - '.$row['tytul']."</option>");
            
          }        
       echo("<h4></h4>");
       echo("<input type='submit' value='Wypożycz' style='margin-top: 2.5%; margin-left: 48%;'>");
        

    $result=$conn->query('SELECT * FROM biblWypo');
        echo("<table style='margin-left: 25%; margin-top: 5%;' border=2>");
        echo("<th>ID</th>");
        echo("<th>ID AUTORA</th>");
        echo("<th>ID TYTUŁU</th>");
        echo("<th>DATA WYPOŻYCZENIA</th>");
        echo("<th>DATA ODDANIA</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["autor_id"]. "</td><td>" .$row["tytul_id"]. "</td><td>" .$row["data_wyporzyczenia"]. "</td><td>" .$row["data_oddania"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

?>
    </div>
    </body>
 </html>
