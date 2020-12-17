<!DOCTYPE html>
<html>
  
  <head>
    <div>
      <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
    </div>
    <link rel="stylesheet" href="style.css">
    <hr></hr>
  </head>
  
<body>
  <h1>TWOJE DANE</h1>
<?php

echo("<h3>TYTUŁ:</h3>");
echo("<h3>".$_POST['tytul']."</h3>");
  
$servername = "remotemysql.com";
$username = "Rp4CxP6YkY";
$password = "V0BMRFi2V3";
$dbname = "Rp4CxP6YkY";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO biblTytul (id, tytul)
VALUES(NULL,'".$_POST['tytul']."')";

if ($conn->query($sql) === TRUE) {
  echo "WŁAŚNIE DODAŁEŚ KSIĄŻKĘ";
  header('Location: https://wprowadzenie.herokuapp.com/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
// Tabelka  
$conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblTytul');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>TYTUŁ</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["tytul"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

?>
</body>
</html>
