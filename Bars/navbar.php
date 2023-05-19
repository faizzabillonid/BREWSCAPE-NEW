<?php
// Assume the authentication process is successful and the user is logged in
$loggedIn = true;
?>

<nav>
    <a href="home.php"><img src="img/Brewscape_Mug_white.png" style="width: 120px; height: 120px;"></a>
    <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="menucoffee.php">MENU</a></li>
        <li><a href="findstore.php">FIND A STORE</a></li>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="#" onclick="showConfirmation(event);"><i class="fa-solid fa-bell-concierge fa-xs" style="color: #ffffff;"></i> DINE WITH US</a></li>    
    </ul>
</nav>

<div id="confirmationMessage" class="alert">
    You need to sign in before making a reservation. Click OK to proceed to the sign-in page.
</div>

<script>
    function showConfirmation(event) {
        event.preventDefault();
        var confirmationMessage = document.getElementById("confirmationMessage");
        
        // Check if the user is not already signed in
        <?php if (!$loggedIn) { ?>
        confirmationMessage.classList.add("show");
        
        if (confirm("You need to sign in before making a reservation. Click OK to proceed to the sign-in page.")) {
            window.location.href = "signin.php";
        }
        <?php } else { ?>
        // If the user is already signed in, directly redirect to the reservation page
        window.location.href = "reservation.php";
        return false; // Prevents further execution of the function
        <?php } ?>
    }
</script>
