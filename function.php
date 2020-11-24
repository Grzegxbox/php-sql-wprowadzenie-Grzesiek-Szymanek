<?php
    
echo("<h1>Funkcje</h1>");

function liczby($liczba){
    echo("<li>Początek funkcji ");
    echo("<li>START ".$liczba);
    for($i=1;$i<$liczba;$i++){
        echo("<li>Kolejna liczba: ".$i);
    }
}

liczby('15')


?>
