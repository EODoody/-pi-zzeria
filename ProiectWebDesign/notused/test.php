



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
  </div>
</div>