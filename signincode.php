<?php
session_start();

$connection = mysqli_connect("localhost", "root", "" , "login_db");

if(isset($_POST['signin_btn']))
{
    $email = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "SELECT * FROM customers_signup WHERE username = '$username' AND password = '$password' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $data) {
            $user_id = $data['id'];
            $user_username = $data['username'];
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_username' => $user_username,

        ];

        if($_SESSION['auth_usertype'] == '1')
        {
            $_SESSION['message'] = "Welcome to home";
            header('Location: home.php');
            exit(0);
        }
        elseif($_SESSION['auth_usertype'] == '0')
        {
            $_SESSION['message'] = "You are logged in";
            header('Location: home.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid email / password";
        header('Location: signin.php');
        exit(0);
    }
}
else
{
    $_SESSION['message'] = "You are not allowed to access this file";
    header('Location: signin.php');
    exit(0);
}

?>