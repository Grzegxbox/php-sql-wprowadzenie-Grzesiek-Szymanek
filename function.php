<!DOCTYPE html>
<html>

<head>
 <link rel="stylesheet" href="style.css">
 <a class="mojlink0" href="https://github.com/SK-2019/php-sql-wprowadzenie-Grzesiek-Szymanek">Kliknij aby zobaczyć wszystko</a>
  <div class="nav">
    <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
  </div>
 <hr></hr>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width">
</head>

<h1>FUNKCJA</h1>


<?php
    

function liczby($liczba){
    echo("<h3 style='margin-top: 60px;'>Początek funkcji </h3>");
    echo("<h4>Napisz Liczby Do ".$liczba);
    for($i=1;$i<$liczba;$i++){
        echo("<h4>Kolejna liczba: ".$i);
    }
}

liczby('3000')
?>

<h3>Chyba Ci się nudzi jak tu doszłeś/aś</h3>
</html>
