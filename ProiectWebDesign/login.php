<!DOCTYPE html>
<html>


<body>
  
<?php

session_start();

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

$url='login.html';

if ($result->num_rows > 0) {
  // output data of each row

  if($row = $result->fetch_assoc())
    
  $_SESSION['user_id'] = $row["ID"];
  $_SESSION['username'] = $row["username"];

    if(isset($_SESSION['user_id'])){
      $url='meniu.php';
      }
      
      header("Location: http://localhost:3000/".$url);
      $conn->close();
    exit();
 
} else {
  
  header("Location: http://localhost:3000/".$url);
  $conn->close();
  exit();
}



