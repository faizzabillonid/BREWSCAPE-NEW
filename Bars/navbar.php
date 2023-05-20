<nav>
  <a href="home.php">
    <img src="img/Brewscape_Mug_white.png" style="width: 120px; height: 120px;">
  </a>
  <ul>
    <li><a href="home.php">HOME</a></li>
    <li><a href="menucoffee.php">MENU</a></li>
    <li><a href="findstore.php">FIND A STORE</a></li>
    <li><a href="about.php">ABOUT US</a></li>
    <li>
      <a href="reservation.php" onclick="return checkSignInStatus()">
        <i class="fa-solid fa-bell-concierge fa-xs" style="color: #ffffff;"></i> DINE WITH US
      </a>
    </li>
    <li class="profile-dropdown">
      <a href="logout.php" class="profile-button">
        <i class="fa-solid fa-user fa-xs" style="color: #ffffff;"></i>
      </a>
    </li>
  </ul>
</nav>

<script src="functions.php"></script>

<script>
  function checkSignInStatus() {
    // Replace the following condition with your actual sign-in check logic
    if (userIsSignedIn()) {
      return true; // User is signed in, allow the link to be followed
    } else {
      alert("Please sign in first. Click OK to proceed to sign-in page. If already done, please click OK to proceed to reservation page. ");
      window.location.href = "signin.php"; // Redirect to the sign-in page
      return false; // Prevent the link from being followed
    }
  }
  
  // Replace this function with your actual sign-in check logic
  function userIsSignedIn() {
    // Return true if the user is signed in, otherwise return false
    return false;
  }
</script>

<style>
  .dropdown-menu {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
  }

  .profile-dropdown:hover .dropdown-menu {
    display: block;
  }
</style>
