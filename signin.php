<?php
session_start();
include('config/dbconfig.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Sign Up</title>
</head>
<body>
    <?php include 'Bars/navbar.php';?>
    <div class="form-container">
        
        <form action="home.php" method="POST" class="form" >

            <h2>SIGN IN</h2>
            <div class="row-grid">
                <div class="rows">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required>
                </div>

                <div class="rows">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                </div>

                <div class="rows">
                    <button type="signin" id="signinbtn" name="signin_btn" >Sign In</a></button>

                    <span class="registerlink">You don't have an account? <a href="signup.php">Sign Up Here!</a></span>
                </div>
            </div>
        </form>
        <div class="side">
            <img src="Photos\cafelogin.jpg" alt="">
        </div>
    </div>

</body>
</html>

