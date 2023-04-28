<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Sign Up</title>
</head>
<body>

    <div class="signup-container">
        <form action="" class="form">
            <h2>SIGN UP</h2>
            <div class="row-grid">
                <div class="row">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required>
                </div>

                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                </div>

                <div class="row">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your Password" required>
                </div>

                <div class="row">
                    <button id="signupbtn"><a href="signin.html">Sign Up</a></button>

                    <span class="registerlink">Already have an account? <a href="signin.html">Sign In Here!</a></span>
                </div>
            </div>
        </form>
        <div class="side-signup">
            <img src="\Photos\cafelogin.jpg" alt="">
        </div>
    </div>
</body>
</html>