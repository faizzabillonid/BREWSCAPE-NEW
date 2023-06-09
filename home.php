<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brewscape</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="img/Brewscape_Mug_white.png" >
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    
    <nav>
        <a href="home.php"><img src="img/Brewscape_Mug_white.png" style=" width: 120px; height: 120px;"></a>
        <!--<img src="img/Brewscape_Mug_white.png" style=" width: 120px; height: 120px;">-->
        <ul>
          <li> <a href="#">HOME</a></li>
            <li> <a href="menucoffee.php">MENU</a></li>
            <li> <a href="#">FIND A STORE</a></li>
            <li> <a href="about.php">ABOUT US</a></li>       
            <li> <a href="#">CART</a></li>
            <button onclick="window.location.href = 'signin.html';"id="signup-btn">Sign In</button>

        </ul>
    </nav>

    <div class="image-container"> 
    <img src="Photos/coffeehome1.jpg" id="home" style=" width: 100%; height: 500px;">
    <div class="text-container">
    <h1>Fuel Your Day With Our Rich and Aromatic Brews.</h1>
          <button onclick="window.location.href = 'menucoffee.php';" class="discover">Discover The Menu</button>
  </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col">
            <img src="Photos/coffee1.png" alt="Image 1">
            <div class="text-container1">
              <h2>"A Refreshing Twist On A Classic Favorite: Iced Latte."</h2>
              <button onclick="window.location.href = 'menucoffee.php';"class="home-btns">Sip, sip, Go</button>
            </div>
          </div>
          <div class="col">
            <img src="Photos/coffee1.png" alt="Image 2">
            <div class="text-container1">
              <h2>"A taste of perfection in every pastry."</h2>
              <button class="home-btns">See more</button>
            </div>
          </div>
        </div>
      </div>
        <hr style="  border-top: 3px solid #c5bdbd; margin: 50px;">
      <footer>
        <div class="left">
          © 2023 Brew Scape Coffee. All rights reserved.
        </div>
        <div class="right">
          <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
          <a href="https://facebook.com"><i class="fab fa-facebook"></i></a>
          <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
        </div>
      </footer>
      
    
    
</body>
</html>

