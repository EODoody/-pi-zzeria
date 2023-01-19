<!DOCTYPE html>
<html>
  <head>
    <!-- include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="Styles/navbar.css">

    <!-- Connecting font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  

   

  </head>

  <body>

 

    <!-- Black with grey text NAVBAR -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="main.php">Dood &pi;zzeria</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="meniu.php">Meniu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="promotii.php">Promotii</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Locatii Dine-in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="details.php"> About our team</a>
          </li>
        </ul>
        </div>


    <button id="ConnectionButton"><span id="login-text"></span></button>
</nav>

<script>
    var button = document.getElementById("ConnectionButton");
    var text = document.getElementById("login-text");
    <?php
    
    if(isset($_SESSION['user_id'])) {
        ?>
        text.innerHTML = "Welcome, <?php echo $_SESSION['username']; ?>";
        text.style.display = "block";
        button.onclick = function() {
            <?php 
              
                session_unset();
                session_destroy();
            ?>
            
            location.reload();
        }
    <?php } else { ?>
        button.innerHTML = "Log in";
        text.style.display = "block";
        button.onclick = function() {
            window.location.href = "login_form.php";
        }
    <?php } ?>
</script>

</body>