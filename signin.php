<?php
// Connect to database
$host = 'localhost';
$user = 'root';
$password = '';
$brewscape = 'brewscape';
$conn = mysqli_connect($host, $user, $password, $brewscape);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is already signed in
session_start();
if (isset($_SESSION['email'])) {
    // Redirect to the reservation page or any other desired page
    header("Location: reservation.php");
    exit;
}

// Check if the sign-in form has been submitted
if (isset($_POST['signin_btn'])) {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($email) || empty($password)) {
        echo "Please fill in all required fields.";
    } else {
        // Check if the email and password match in the users table
        $checkUserQuery = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $checkUserResult = mysqli_query($conn, $checkUserQuery);

        if (mysqli_num_rows($checkUserResult) == 1) {
            // User exists, set session variables
            $userData = mysqli_fetch_assoc($checkUserResult);
            $_SESSION['email'] = $userData['email'];
            $_SESSION['usertype'] = $userData['usertype'];

            // Redirect to the reservation page or any other desired page
            header("Location: reservation.php");
            exit;
        } else {
            echo "Invalid email or password.";
        }
    }
}
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
    <title>Sign In</title>
    <script src="https://kit.fontawesome.com/861a14876a.js" crossorigin="anonymous"></script>

</head>
<body>
    <?php include 'Bars/navbar.php';?>
    <div class="form-container">
        
        <form action="" method="POST" class="form" >

            <h2>SIGN IN</h2>
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

                    <span class="registerlink" style="margin-top: 15px;" >You don't have an account? <a href="signup.php">Sign Up Here!</a></span>
                </div>
            </div>
        </form>
        <div class="side">
            <img src="Photos\cafelogin.jpg" alt="">
        </div>
    </div>

    <hr style= "border-top: 3px solid #c5bdbd; margin: 50px; margin-top: 180px; ">
      <!--footer-->
        <?php  include 'Bars/footer.php';?>
          <!-- custom js file link  -->
          <script src="script.js"></script>

</body>
</html>

