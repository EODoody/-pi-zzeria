<!DOCTYPE html>
<html>


<body>

<h1> Data for the user logged in: </h1>

<?php
$nameErr=$username="";
if (empty($_POST["username"])) {
    $nameErr = "Introduceti numele!";
  } else {
    $username = $_POST["username"];
  }
?>


<?php
//database connection 'clienti'
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzeria3.14";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username=$_POST['username'];
$password=$_POST['password'];

$sql = "SELECT * from user WHERE username='".$_POST["username"]."' and password='".$_POST["password"]."'";
echo $sql."<br>";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "ID CLIENT: ".$row["ID"]."<br>";
    echo "Username: " . $row["username"] . "<br>";
    echo "Password: " . $row["password"] . "<br>";
    echo "<hr>";
    echo "NUME CLIENT:".$row["Last_Name"]."<br>";
    echo "PRENUME CLIENT:".$row["First_Name"]."<br>";
    echo "Email:".$row["email"]."<br>";
    echo "Telefon:".$row["Phone_Number"]."<br>";
  }
} else {
  echo "Nu exista clientul cu acest username si parola!";
}
$conn->close();

?>

</body>


</html>