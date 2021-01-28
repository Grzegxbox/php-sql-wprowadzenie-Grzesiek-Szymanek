<!DOCTYPE html>
<html>
  
  <head>
    <div>
      <a class="navigation_link1" href="https://wprowadzenie.herokuapp.com/">Strona Główna</a>
    </div>
    <link rel="stylesheet" href="/ASSETS/style.css">
    <hr></hr>
  </head>
  
<body>
  <h1>TWOJE DANE</h1>
<?php

echo("<h3>AUTOR:</h3>");
echo("<h3>".$_POST['autor']."</h3>");
  
$servername = "remotemysql.com";
$username = "Rp4CxP6YkY";
$password = "V0BMRFi2V3";
$dbname = "Rp4CxP6YkY";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO biblAutor (id, autor)
VALUES(NULL,'".$_POST['autor']."')";

if ($conn->query($sql) === TRUE) {
  echo "WŁAŚNIE DODAŁEŚ AUTORA";
  header('Location: https://wprowadzenie.herokuapp.com/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
// Tabelka  
$conn= new mysqli("remotemysql.com","Rp4CxP6YkY","V0BMRFi2V3","Rp4CxP6YkY");
    $result=$conn->query('SELECT * FROM biblAutor');
        echo("<table border=2>");
        echo("<th>ID</th>");
        echo("<th>AUTOR</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id"]. "</td><td>" .$row["autor"]. "</td>");
                echo("</tr>");
            }
        echo("</table>");

?>
   </body>
</html>
