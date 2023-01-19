

  <h1>SOMETHING HAPPENED! (is it good or bad?)</h1>
  <a href="main.php"> Go to the main page, good luck traveler </a>

<?php
//database connection 'clienti'
$localhost = "localhost";
$my_user = "root";
$my_password = "";
$my_database = "pizzeria3.14";

// Create connection
$conn = new mysqli($localhost, $my_user, $my_password, $my_database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


function username_exists($username) {
  // Connect to the database
  $db = mysqli_connect("localhost", "root", "", "pizzeria3.14");

  // Check if the username exists
  $query = "SELECT * FROM user WHERE username='$username'";
  $result = mysqli_query($db, $query);
  if (mysqli_num_rows($result) > 0) {
      return true;
  } else {
      return false;
  }
}

function email_exists($email) {
  // Connect to the database
  $db = mysqli_connect("localhost", "root", "", "pizzeria3.14");

  // Check if the email exists
  $query = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($db, $query);
  if (mysqli_num_rows($result) > 0) {
      return true;
  } else {
      return false;
  }
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone_number = $_POST['phone_number'];

if (username_exists($username)== TRUE || email_exists($email)== TRUE) {
  // Show error message
  exit('Sorry, that username or email is already taken. 
  Please choose a different one.');
}

else{

$sql = "INSERT INTO user ( username, password, email, First_Name, Last_Name, Phone_Number )
VALUES ('$username', '$password', '$email', '$firstname' , '$lastname' , '$phone_number')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully !";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();
?>

</body>


</html>