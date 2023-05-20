
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Sign In</title>
    <script src="https://kit.fontawesome.com/861a14876a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="script.js">

</head>
<body>
    <div class="form-container">
        
        <form action="../code.php" method="POST" class="form" >

            <h2>SIGN IN</h2>
            <h3>email: admin@gmail.com
                password: admin
            </h3>
            <div class="row-grid">
                <div class="rows">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter Email" required>
                </div>

                <div class="rows">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                </div>

                <div class="rows">
                    <button type="signin" id="signinbtn" name="signin_btn" >Sign In</a></button>
                </div>
            </div>
        </form>
        <div class="side">
            <img src="../Photos\cafelogin.jpg" alt="">
        </div>
    </div>

</body>
</html>

