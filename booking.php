<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brewscape</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="img/Brewscape_Mug_white.png" >
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/861a14876a.js" crossorigin="anonymous"></script>


    
</head>

<body>

<?php include 'Bars/navbar.php';?>

<div class="signup-container">
        <form action="code.php" method="POST" class="form">
            <h2>SIGN UP</h2>
            <div class="row-grid">
                <div class="rows">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name" required>
                </div>

                <div class="rows">
                    <label for="cpnumber">Phone Number</label>
                    <input type="text" id="cpnumber" name="cpnumber" placeholder="Enter your Phone Number" required>
                </div>

                <div class="rows">
                    <label for="table">Table for</label>
                    <input type="number" id="quantity" name="quantity" min="1" max="8" placeholder="Enter table for" required>
                </div>

                <div class="rows">
                    <label for="time">Dine In Time</label>
                    <input type="text" id="time" name="time" placeholder="Choose time to dine" required>
                </div>

                <div class="rows">
                    <button  type="signin" id="signupbtn" name="reserved_btn" >Sign Up</a></button>
                </div>
            </div>
        </form>
        <div class="side-signup">
            <img src="Photos\cafelogin.jpg" alt="">
        </div>
    </div>
    
</body>
</html>
