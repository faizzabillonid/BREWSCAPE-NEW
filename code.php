<?php
// Start the session
session_start();

// Handle sign-up form submission
if (isset($_POST['signup_btn'])) {
    // Retrieve the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password using the bcrypt algorithm
    $hash = password_hash($password, PASSWORD_BCRYPT);

    // Connect to the database and insert the new user record
    $conn = new mysqli("localhost", "root", "", "brewscape");
    $query = "INSERT INTO users (email, password) VALUES ('$email', '$hash')";
    $conn->query($query);

    // Store the user ID in the session
    $_SESSION['user_id'] = $conn->insert_id;

    // Redirect to the dashboard page
    header("Location: signin.php");
    exit;
}

// Handle login form submission
if (isset($_POST['signin_btn'])) {
    // Retrieve the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database and retrieve the user record
    $conn = new mysqli("localhost", "root", "", "brewscape");
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($query);

    if ($result->num_rows == 0) {
        // Email not found in the database, display an error message
        $error = "Email address not found. Please sign up first.";
    } else {
        // Email found, verify the password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password matches, store the user ID in the session and redirect to the dashboard page
            $_SESSION['user_id'] = $row['id'];
            header("Location: home.php");
            exit;
        } else {
            // Password does not match, display an error message
            $error = "Incorrect password. Please try again.";
        }
    }
}
?>