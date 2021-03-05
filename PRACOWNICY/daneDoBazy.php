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
          <a class="navigation_link1" href="/formularze.php">Formularze</a>
          <a class="navigation_link1" href="/PRACOWNICY/daneDoBazy.php">Formularz - Pracownicy</a>
          <a class="navigation_link1" href="/BIBLIOTEKA/daneDoAutorow.php">Formularz - Autorzy</a>
          <a class="navigation_link1" href="/BIBLIOTEKA/daneDoTytulow.php">Formularz - Książki</a>
          <h1 style="font-size: 19px;margin-top: 350%;text-align: center;">Autor: Grzesiek Szymanek</h1>
        </div>
    </div>
    <div class="item colorGreen">
      <h1 style="margin-left: 29%; color: #3cb300;">FORMULARZ - PRACOWNICY</h1>
        <div class="dodawanie" style="margin-top: 7%;">
          <h2 style="margin-left: 8%;color: #2E8B57;">DODAWANIE PRACOWNIKA</h2>
            <form action="insert.php" method="POST" style="margin-left: 19%;">
              <input type="text" name="imie" placeholder="IMIĘ"><br>
              <input type="text" name="dzial" placeholder="DZIAŁ"><br>
              <input type="text" name="zarobki" placeholder="ZAROBKI"><br>
              <input type="date" name="data_urodzenia" placeholder="DATA URODZENIA"><br>
              <input type="submit" value="DODAJ" style="margin-left: 40px;">
            </form>
        </div>
    <div class="odejmowanie">
        <h2 style="color: #2E8B57;">USUWANIE PRACOWNIKA</h2>
            <form action="delete.php" method="POST" style="margin-left: 27%;">
                <input type="text" name="id" placeholder="ID PRACOWNIKA"><br>
                <input type="submit" value="USUŃ" style="margin-left: 13%;">
            </form>
    </div>

      <?php
  
      require_once("../ASSETS/connect.php");

    $result=$conn->query('SELECT * FROM pracownicy, organizacja WHERE (dzial=id_org)');
        echo("<table style='margin-top: 15%;margin-left: 21%;' border=2>");
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
