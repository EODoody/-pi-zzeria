<?php 
session_start();
?>
<!DOCTYPE html>

<html>
  <head>
    <title>&pi;zzeria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Styles/main.css">
    

  <!-- Loading Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Connecting font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">


  </head>

<body background="Images/background.jpg" style="font-family: 'Bree Serif', serif;">

<!-- Include navbar -->
<?php include 'navbar.php'; ?>



    <div class="container-fluid p-5 bg-black bg-opacity-75 text-white text-center" style="padding-top: 20%;">
      <h1>Main page of zhe &pi;zzeria </h1>
    </div>
    

    <br>
    <div class="carousel-container">
    <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
      <div class="carousel-indicators" style="position:relative">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
      </div>

      <!-- The slideshow/carousel --NEED TO FIND AND INSERT PICTURES  -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="carousel_img" src="Images/Food/neapolitan-pizza-with-ham-cheese-arugula-basil-tomatoes-sprinkled-with-cheese-wooden-board_78826-2273.jpg">
          <div class="col-md-4">
            <h3>Column 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="carousel_img" src="Images/Food/overhead-view-italian-pizza-wooden-backdrop_23-2148090940.png" class="d-block w-100">
          <div class="col-md-4">
            <h3>Column 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="carousel_img" src="Images/Food/pizza-time-tasty-homemade-traditional-pizza-italian-recipe_144627-42528.jpg"  class="d-block w-100">
          <div class="col-md-4">
            <h3>Column 3</h3>        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="carousel_img" src="Images/Food/pizza-with-mazzarella-cheese-pepperoni-tomatoes-gray-background-top-view-concept-pizzeria-restaurant-advertising-poster-food-delivery-free-space-layout_166373-1766.jpg"  class="d-block w-100">
          <div class="col-md-4">
            <h3>Column 3</h3>        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="carousel_img" src="Images/Food/vegetarian-heart-palm-pizza-preparation-with-mozzarella-cheese-brazilian-pizza-preparation-ingredients-wooden-board_579344-822.jpg"  class="d-block w-100">
          <div class="col-md-4">
            <h3>Column 3</h3>        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next" >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>


    <div style=" overflow: hidden;">
      <img class="oven-img" src="Images/absolutes/SeekPng.com_oven-png_1219442.png">
      <img class="delivery-man" src="Images/absolutes/delivery.png">
    </div>

  </div>


   



    <div style="margin-top: -15%;" class="about-div">
      <div style="color: antiquewhite;">
          <h1>About Our Pizzeria</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. 
            Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim 
            ornare nisi, vitae mattis nulla ante id dui.</p>
          <p>Nostra pizzeria è una vera e propria istituzione a città. Abbiamo servito la migliore pizza italiana per decenni, con ingredienti 
            freschi e una cottura perfetta nella nostra forno a legna. La tradizione è molto importante per noi e vogliamo che i nostri clienti s
            entano che stanno venendo in un vero e proprio ristorante italiano.</p>
          <p>Siamo orgogliosi di offrire un'ampia selezione di pizze classiche, tra cui Margherita, Pepperoni e Quattro Formaggi. Inoltre, 
            offriamo anche pizze speciali stagionali e opzioni per vegetariani e vegani. Non dimenticate di provare la nostra famosa pizza ai 
            frutti di mare, con frutti di mare freschi e una salsa di pomodoro leggermente piccante.</p>
          <p>Vi invitiamo a venire a provare la vera cucina italiana e gustare la pizza migliore della città nella nostra accogliente atmosfera. 
            Grazie per scegliere la nostra pizzeria.</p>
            <div>
              
            </div>
    </div>
</div>

<div class="container" style="margin-top: 2%;">
  <div class="column-left">
    <img src="Images\our_mainchef.jpg" alt="image1">
    <p style="color: antiquewhite;">Lorem ipsum dolor sit amet.</p>
  </div>
  <div class="column-right">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4916.93846741557!2d25.58974749526497!3d45.663281803718384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b35b8f2205d853%3A0x98638d25ed302ba7!2sPizzaiolo!5e0!3m2!1sen!2sro!4v1673899191939!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

  
</body>

</html>