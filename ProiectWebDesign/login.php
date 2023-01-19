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


$result = $conn->query($sql);

$url='login_form.php';

session_start();
if ($result->num_rows > 0) {
  if ($row = $result->fetch_assoc()) {
    $_SESSION['user_id'] = $row['ID'];
    $_SESSION['username'] = $row['username'];
    $url = 'meniu_loggedin.php';
  }
}

  header("Location: " . $url . "");
  $conn->close();
  exit();
?>
