<nav>
    <a href="home.php"><img src="img/Brewscape_Mug_white.png" style="width: 120px; height: 120px;"></a>
    <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="menucoffee.php">MENU</a></li>
        <li><a href="findstore.php">FIND A STORE</a></li>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="#" onclick="showConfirmation();"><i class="fa-solid fa-bell-concierge fa-xs" style="color: #ffffff;"></i> DINE WITH US</a></li>
    </ul>
</nav>

<div id="confirmationMessage" class="alert">
    You need to sign in before making a reservation. Click OK to proceed to the sign-in page.
</div>

<script>
function showConfirmation() {
    var confirmationMessage = document.getElementById("confirmationMessage");
    confirmationMessage.classList.add("show");
    
    if (confirm("You need to sign in before making a reservation. Click OK to proceed to the sign-in page.")) {
      window.location.replace("../signin.php");
    }
}
</script>
