
<nav>
       <a href="home.php"> <img src="img/Brewscape_Mug_white.png" style=" width: 120px; height: 120px;"> </a>
       <ul>
        <li> <a href="home.php">HOME</a></li>
          <li> <a href="menucoffee.php">MENU</a></li>
          <li> <a href="findstore.php">FIND A STORE</a></li>
          <li> <a href="about.php">ABOUT US</a></li>       
          <li> <a href="reservation.php"><i class="fa-solid fa-bell-concierge fa-xs " style="color: #ffffff;"></i> DINE WITH US</a></li>

          <?php if(isset($_SESSION['user'])) : ?>
          <button onclick="window.location.href = 'signin.php';"id="signup-btn">Sign In</button>
            <?= $_SESSION['user']['email']  ?>

          <?php else : ?> 

            <?php endif ; ?>

      </ul>
    </nav>
 