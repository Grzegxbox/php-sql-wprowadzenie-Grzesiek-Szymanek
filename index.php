<!DOCTYPE html>   
<html>  
   
<head>
<title>Grzesiek Szymanek 2TI gr2</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/ASSETS/style.css">
<link rel="icon" href="https://i.ytimg.com/vi/iu-skHVnxGc/hqdefault.jpg">
<meta name="viewport" content="width=device-width">
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
           <a class="navigation_link1" href="/CWICZENIA/function.php">Funkcja</a>
           <a class="navigation_link1" href="formularze.php">Formularze</a>
           <a class="navigation_link1" href="/PRACOWNICY/pracownicy.php">Pracownicy</a>
           <a class="navigation_link1" href="/CWICZENIA/funkcjeAgregujace.php">Funkcje Agregujące</a>
           <a class="navigation_link1" href="/PRACOWNICY/pracownicyiorganizacja.php">Pracownicy I Organizacja</a>
           <a class="navigation_link1" href="/BIBLIOTEKA/biblioteka.php">Biblioteka</a>
           <h1 style="font-size: 19px;margin-top: 385%;text-align: center;">Autor: Grzesiek Szymanek</h1>
          </div>
     </div>
     <div class="item colorGreen">
        <h1 style="margin-left: 37%; color: #3cb300;">STRONA GŁÓWNA</h1>
        <?php


echo("<h1> TESTUJEMY PODCZAS NAGRANIA</h1>");

require_once("connect.php");

    echo("<h3 style='margin-top: 50px; margin-left: 5%; color: #3cb371;'>0. SELECT * FROM pracownicy</h3>");
    $result=$conn->query('SELECT * FROM pracownicy');
        echo("<table border=2 style=' margin-left: 5%;'>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

    echo("<h3 style='margin-top: 50px; margin-left: 5%; color: #3cb371;'>1. SELECT * FROM pracownicy WHERE imie like '%a'</h3>");
    $result = $conn -> query('SELECT * FROM pracownicy WHERE imie like "%a"');
        echo("<table border=2 style=' margin-left: 5%;'>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

    echo("<h3 style='margin-top: 50px; margin-left: 5%; color: #3cb371;'>2. SELECT * FROM pracownicy WHERE (imie like '%a') AND (dzial=1 or dzial=2 or dzial=3) AND (zarobki>10)</h3>");
    $result = $conn -> query('SELECT * FROM pracownicy WHERE (imie like "%a") AND (dzial=1 or dzial=2 or dzial=3) AND (zarobki>10)');
            echo("<table border=2 style=' margin-left: 5%;'>");
            echo("<th>ID</th>");
            echo("<th>IMIĘ</th>");
            echo("<th>DZIAŁ</th>");
            echo("<th>ZAROBKI</th>");
                while($row = $result -> fetch_assoc()){
                    echo("<tr>");
                        echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                    echo("</tr>");
                }
            echo("</table>");

    echo("<h3 style='margin-top: 50px; margin-left: 5%; color: #3cb371;'>3. SELECT * FROM pracownicy WHERE (imie not like '%a') AND (zarobki>30)</h3>");
    $result = $conn -> query('SELECT * FROM pracownicy WHERE (imie not like "%a") AND (zarobki>30)');
        echo("<table border=2 style=' margin-left: 5%;'>");
        echo("<th>ID</th>");
        echo("<th>IMIĘ</th>");
        echo("<th>DZIAŁ</th>");
        echo("<th>ZAROBKI</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

    echo("<h3 style='margin-top: 50px; margin-left: 5%; color: #3cb371;'>4. SELECT dzial, max(zarobki) AS Maksimum FROM pracownicy GROUP BY dzial</h3>");
    $result = $conn -> query('SELECT dzial, max(zarobki) AS Maksimum FROM pracownicy GROUP BY dzial');
        echo("<table border=2 style=' margin-left: 5%;'>");
        echo("<th>DZIAŁ</th>");
        echo("<th>MAKSIMUM</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["dzial"]. "</td><td>" .$row["Maksimum"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

    // echo("<h3 style='margin-top: 50px; margin-left: 5%; color: #3cb371;'>5. SELECT Dzial, sum(zarobki) AS Całość, avg(zarobki) AS Średnia FROM pracownicy GROUP BY dzial</h3>");
    // $result = $conn -> query('SELECT Dzial, sum(zarobki) AS Całość, avg(zarobki) AS Średnia FROM pracownicy GROUP BY dzial');
    //     echo("<table border=2 style=' margin-left: 5%;'>");
    //     echo("<th>DZIAŁ</th>");
    //     echo("<th>CAŁOŚĆ</th>");
    //     echo("<th>ŚREDNIA</th>");
    //         while($row = $result -> fetch_assoc()){
    //             echo("<tr>");
    //                 echo("<td>" .$row["Dzial"]. "</td><td>" .$row["Całość"]. "</td><td>" .$row["Średnia"]. "</td>");
    //             echo("</tr>");
    //         }
    //     echo("</table>");

    // echo("<h3 style='margin-top: 50px; margin-left: 5%; color: #3cb371;'>6. SELECT Dzial, Max(zarobki) AS Maksimum, Min(zarobki) AS Minimum, Sum(zarobki) AS Calosc, Avg(zarobki) AS Srednia FROM pracownicy GROUP BY dzial</h3>");
    // $result = $conn -> query('SELECT Dzial, Max(zarobki) AS Maksimum, Min(zarobki) AS Minimum, Sum(zarobki) AS Calosc, Avg(zarobki) AS Srednia FROM pracownicy GROUP BY dzial');
    //     echo("<table border=2 style=' margin-left: 5%;'>");
    //     echo("<th>DZIAŁ</th>");
    //     echo("<th>MAKSIMUM</th>");
    //     echo("<th>MINIMUM</th>");
    //     echo("<th>CAŁOŚĆ</th>");
    //     echo("<th>ŚREDNIA</th>");
    //         while($row = $result -> fetch_assoc()){
    //             echo("<tr>");
    //                 echo("<td>" .$row["Dzial"]. "</td><td>" .$row["Maksimum"]. "</td><td>" .$row["Minimum"]. "</td><td>" .$row["Calosc"]. "</td><td>" .$row["Srednia"]. "</td>");
    //             echo("</tr>");
    //         }
    //     echo("</table>");
        
        $d=strtotime("now");
          echo "<h2 style='margin-left: 36%; color: red; margin-top: 11.5%;'>".date("Y-m-d h:i:sa", $d) . "</h2>";

?>
  
    </div> 
  

<!-- // echo("<h3>ZADANIE 8</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT Dzial, Avg(zarobki) AS AVG FROM pracownicy GROUP BY dzial HAVING Avg(zarobki)<36');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>AVG</th>");
//             while($row = $result -> fetch_assoc()){                                                                                                    
//                 echo("<tr>");
//                     echo("<td>" .$row["Dzial"]. "</td><td>" .$row["AVG"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>ZADANIE 9</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT * FROM pracownicy WHERE (imie like "%a") HAVING zarobki<41');
//             echo("<table border=1>");
//             echo("<th>ID</th>");
//             echo("<th>Imie</th>");
//             echo("<th>Dzial</th>");
//             echo("<th>Zarobki</th>");
//                 while($row = $result -> fetch_assoc()){
//                     echo("<tr>");
//                         echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
//                     echo("</tr>");
//                 }
//             echo("</table>");
        
// echo("<h3>ZADANIE 10</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, avg(zarobki) AS Srednia FROM pracownicy WHERE (imie like "%a") AND (zarobki<20)');
//             echo("<table border=1>");
//             echo("<th>Dzial</th>");
//             echo("<th>Srednia</th>");
//                 while($row = $result -> fetch_assoc()){
//                     echo("<tr>");
//                         echo("<td>" .$row["dzial"]. "</td><td>" .$row["Srednia"]. "</td>");
//                     echo("</tr>");
//                 }
//             echo("</table>");

// echo("<h3>ZADANIE 11</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT * FROM pracownicy WHERE (imie like "%a") AND (dzial=1 or dzial=2 or dzial=3) AND (zarobki BETWEEN 1 AND 100) GROUP BY dzial DESC');
//             echo("<table border=1>");
//             echo("<th>ID</th>");
//             echo("<th>Imie</th>");
//             echo("<th>Dzial</th>");
//             echo("<th>Zarobki</th>");
//                 while($row = $result -> fetch_assoc()){
//                     echo("<tr>");
//                         echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
//                 }
//             echo("</table>");

// echo("<h3>ZADANIE 12</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, Count(imie) AS Ilosc FROM pracownicy WHERE (imie like "%a") GROUP BY dzial');
//             echo("<table border=1>");
//             echo("<th>Dzial</th>");
//             echo("<th>Ilosc</th>");
//                 while($row = $result -> fetch_assoc()){
//                     echo("<tr>");
//                         echo("<td>" .$row["dzial"]. "</td><td>" .$row["Ilosc"]. "</td>");
//                     echo("</tr>");
//                 }
//             echo("</table>");

// echo("<h1>ZADANIA NA SPRAWDZIAN</h1>");
// echo("<h3>Zadanko 1</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, avg(zarobki) AS Srednia FROM pracownicy WHERE (imie not like "%a") GROUP BY dzial HAVING avg(zarobki)<35');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Srednia</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Srednia"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Zadanko 2</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, Count(imie) AS Ilosc FROM pracownicy WHERE (imie like "%a") AND (zarobki BETWEEN 35 AND 40)  GROUP BY dzial');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Ilosc</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Ilosc"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Zadanko 3</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, Count(imie) AS Ilosc FROM pracownicy GROUP BY dzial');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Ilosc</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Ilosc"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Zadanko 4</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, avg(zarobki) AS Srednia FROM pracownicy GROUP BY dzial');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Ilosc</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Srednia"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Zadanko 5</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, SUM(zarobki) AS SUMA FROM pracownicy GROUP BY dzial');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Ilosc</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["SUMA"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h1>NOWE ZADANKA</h1>");
// echo("<h3>Zadaneczko 1</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, avg(zarobki) AS Srednia FROM pracownicy WHERE (dzial=1 OR dzial=2) GROUP BY dzial');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Srednia</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Srednia"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Zadaneczko 2</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, COUNT(imie) AS Ilosc FROM pracownicy WHERE (imie like "%a") AND (dzial=1 OR dzial=3) GROUP BY dzial');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Ilosc</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Ilosc"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Zadaneczko 3</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, MIN(zarobki) AS Minimum FROM pracownicy WHERE  dzial=2 ');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Minimum</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Minimum"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Zadaneczko 4</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT dzial, AVG(zarobki) AS Srednia FROM pracownicy WHERE (imie like "%a") AND (dzial=1)');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Srednia</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Srednia"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Zadaneczko 5</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT COUNT(imie) AS Ilosc FROM pracownicy WHERE (imie not like "%a") AND (zarobki<45)');
//         echo("<table border=1>");
//         echo("<th>Ilosc</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["Ilosc"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h1>KOLEJNE ZADANKA </h1>");
// echo("<h3>Ćwiczenie 1</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT * FROM pracownicy ORDER BY imie desc');
//         echo("<table border=1>");
//         echo("<th>ID</th>");
//         echo("<th>Imie</th>");
//         echo("<th>Dzial</th>");
//         echo("<th>Zarobki</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Ćwiczenie 2</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT * FROM pracownicy ORDER BY imie asc');
//         echo("<table border=1>");
//         echo("<th>ID</th>");
//         echo("<th>Imie</th>");
//         echo("<th>Dzial</th>");
//         echo("<th>Zarobki</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Ćwiczenie 3</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT * FROM pracownicy ORDER BY dzial asc');
//         echo("<table border=1>");
//         echo("<th>ID</th>");
//         echo("<th>Imie</th>");
//         echo("<th>Dzial</th>");
//         echo("<th>Zarobki</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");
        
// echo("<h3>Ćwiczenie 4</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query('SELECT * FROM pracownicy ORDER BY zarobki asc');
//         echo("<table border=1>");
//         echo("<th>ID</th>");
//         echo("<th>Imie</th>");
//         echo("<th>Dzial</th>");
//         echo("<th>Zarobki</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h1>PRAWDZIWY TEST</h1>");
// echo("<h2>Grzesiek Szymanek Nr28</h2>");
//     echo("<h3>Zapytanie 1</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query ('SELECT dzial, AVG(zarobki) AS Srednia FROM pracownicy WHERE (dzial=1 OR dzial=4) AND (imie like "%a%") GROUP BY dzial');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Srednia</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Srednia"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Zapytanie 2</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query ('SELECT dzial, MAX(zarobki) AS Maksimum FROM pracownicy GROUP BY dzial');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Maksimum</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Maksimum"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");

// echo("<h3>Zapytanie 3</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query ('SELECT dzial, MAX(zarobki) AS Maksimum FROM pracownicy WHERE (imie like "%a") AND (id_pracownicy BETWEEN 1 AND 13) GROUP BY dzial');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Maksimum</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Maksimum"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");


// echo("<h3>Zapytanie 4</h3>");
//     $conn = new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
//     $result = $conn -> query ('SELECT dzial, AVG(zarobki) AS Srednia FROM pracownicy WHERE (imie like "%a") AND (id_pracownicy BETWEEN 1 AND 13) AND (dzial=1 OR dzial=2 OR dzial=3) GROUP BY dzial');
//         echo("<table border=1>");
//         echo("<th>Dzial</th>");
//         echo("<th>Srednia</th>");
//             while($row = $result -> fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>" .$row["dzial"]. "</td><td>" .$row["Srednia"]. "</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");
   -->
   
    </body>
</html>
