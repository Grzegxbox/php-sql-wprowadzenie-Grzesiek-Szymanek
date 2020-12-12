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
      </div>
     </div>
    
     <div class="item colorGreen">
      <h1 style="margin-left: 44%; color: #3cb300;">FUNKCJA</h1>  

<?php
    

function liczby($liczba){
    echo("<h3 style='margin-top: 6%;margin-left: 5%;color: green;'>Początek funkcji </h3>");
    echo("<h4 style='margin-left: 5%;'>Napisz Liczby Do ".$liczba);
    for($i=1;$i<$liczba;$i++){
        echo("<h4 style='margin-left: 5%;'>Kolejna liczba: ".$i);
    }
}

liczby('3000')
?>
       
<h3 style='margin-left: 5%;'>Chyba Ci się nudzi jak tu doszłeś/aś</h3>
    </div>
      


    </body>
 </html>
