<?php
    
echo("<h1>Funkcje</h1>");

function literki($litera){
    echo("<li>Początek funkcji</li>");
    echo("<li>START ".$litera);
    for($i='a';$i<$litera;$i++){
        echo("<li>Kolejna literka: ".$i);
    }
}

literki('abcdefghijklmnoprstuwyz')


?>
