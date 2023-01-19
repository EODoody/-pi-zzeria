<?php
readfile('C:\wamp64\www\ProiectWebDesign\navbar.php');
?>


<div class="container">
  <div class="row">
    <?php
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

        $sql = "SELECT Pizza_Image FROM pm_pizza";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-sm-4">';
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Pizza_Image'] ).'" class="img-thumbnail" alt="image">';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>



<button class="login-button" href=<?php if (isset($_SESSION['user_id'])) {
          echo 'logout.php';
        } else {
          echo 'login.html';
        }?>>Log In / Log Out</button>
        


<button id="myButton">
    <?php if (isset($_SESSION['user_id'])) {
            echo "Log out";
        } else {
            echo "Log in";
        }
    ?>
</button>

<script>
    document.getElementById("myButton").onclick = function() {
        <?php if (isset($_SESSION['user_id'])) { ?>
            // Log out functionality
            <?php
                session_unset();
                session_destroy();
            ?>
            location.reload();
        <?php } else { ?>
            // Log in functionality
            window.location.href = "login.html";
        <?php } ?>
    }
</script>







<?php

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <?php if(isset($_SESSION['user_id'])) { ?>
    <input type="submit" name="logout" value="Logout">
  <?php } else { ?>
    <input type="submit" name="login" value="Login">
  <?php } ?>
</form>

if(isset($_POST['logout'])) {
  session_destroy();
  header("Location: login.php");
  exit();
}

if(isset($_POST['login'])) {
  header("Location: login.php");
  exit();
}
  </div>
</div>


================================================================================

if (!isset($_SESSION['user']['id'])) {
  header("Location: login_form.php");
  exit;
}