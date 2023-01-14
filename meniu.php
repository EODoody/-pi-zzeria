<!DOCTYPE html>
<html>
  <head>
    <title> &pi;zzeria Menu</title>
    <!-- include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    
    <link rel="stylesheet" href="Styles/meniu.css">
    <link rel="stylesheet" href="Styles/navbar.css">

    <!-- Connecting font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  
  </head>


  <body background="Images/background.jpg">
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
        </ul>
        <!-- Login/signup button -->
        <button class="login-button" onclick="window.location.href='login.html'">Log In</button>
      </div>
    </nav>

    <div class="container">
      <h1 class="text-center mt-5 text-white">&pi;zzeria Menu</h1>
      <div class="row mt-5">
        <div class="col-sm-6">
          <div class="card">
            <img src="Images/Food/italian-bread-calzone-restaurant.jpg">
            <div class="card-body">
              <h5 class="card-title">Italian bread calzone</h5>
              <p class="card-text">Delicious Italian bread stuffed with your choice of filling and baked to perfection.</p>
              <form>
                <label for="italian-bread-calzone">
                  <input type="checkbox" id="italian-bread-calzone" name="order[]" value="1">
                  Add to Order
                </label>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <img src="Images/Food/neapolitan-pizza-with-ham-cheese-arugula-basil-tomatoes-sprinkled-with-cheese-wooden-board_78826-2273.jpg">
            <div class="card-body">
              <h5 class="card-title">Neapolitan pizza with ham, basil, and tomatoes</h5>
              <p class="card-text">Authentic Neapolitan pizza topped with ham, fresh basil, and ripe tomatoes.</p>
              <form>
                <label for="neapolitan-pizza-with-ham-cheese">
                  <input type="checkbox" id="neapolitan-pizza-with-ham-cheese" name="order[]" value="2">
                  Add to Order
                </label>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-sm-6">
          <div class="card">
            <img src="Images\Food\overhead-view-italian-pizza-wooden-backdrop_23-2148090940.png">
            <div class="card-body">
              <h5 class="card-title">Italian pizza with mozzarella, olives, eggs, and mushrooms</h5>
              <p class="card-text">Classic Italian pizza topped with mozzarella, olives, eggs, and mushrooms.</p>
              <form>
                <label for="overhead-view-italian-pizza">
                  <input type="checkbox" id="overhead-view-italian-pizza" name="order[]" value="3">
                  Add to Order
                </label>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <img src="Images/Food/pizza-time-tasty-homemade-traditional-pizza-italian-recipe_144627-42528.jpg">
            <div class="card-body">
              <h5 class="card-title">Traditional pizza</h5>
              <p class="card-text">Our classic pizza topped with your choice of toppings.</p>
              <form>
                <label for="traditional-pizza">
                  <input type="checkbox" id="traditional-pizza" name="order[]" value="4">
                  Add to Order
                </label>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-sm-6">
          <div class="card">
            <img src="Images/Food/vegetarian-heart-palm-pizza-preparation-with-mozzarella-cheese-brazilian-pizza-preparation-ingredients-wooden-board_579344-822.jpg">
            <div class="card-body">
              <h5 class="card-title">Vegetarian pizza</h5>
              <p class="card-text">A delicious pizza topped with a variety of fresh vegetables.</p>
              <form>
                <label for="vegetarian-heart-palm">
                  <input type="checkbox" id="vegetarian-heart-palm" name="order[]" value="5">
                  Add to Order
                </label>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <img src="Images\Food\pizza-with-mazzarella-cheese-pepperoni-tomatoes-gray-background-top-view-concept-pizzeria-restaurant-advertising-poster-food-delivery-free-space-layout_166373-1766.jpg">
            <div class="card-body">
              <h5 class="card-title">Home Specialty</h5>
              <p class="card-text">Pizza with mozzarella cheese pepperoni tomatoes and our house's herbs</p>
              <form>
                <label for="pizza-with-mazzarella-cheese-pepperoni-tomatoes">
                  <input type="checkbox" id="pizza-with-mazzarella-cheese-pepperoni-tomatoes" name="order[]" value="6">
                  Add to Order
                </label>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>