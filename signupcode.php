<?php
session_start();

$connection = mysqli_connect("localhost", "root", "" , "login_db");

if(isset($_POST['signup_btn']))
{
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);

        if($password == $cpassword)
        {
            $checkusername = "SELECT username FROM customers_signup WHERE username = '$username' ";
            $checkusername_run = mysqli_query($connection, $checkusername);

            if(mysqli_num_rows($checkusername_run) > 0)
            {
                $_SESSION['message'] = "Username already exists";
                header("Location: signup.php");
                exit(0);
            }
            else
            {
                $query = "INSERT INTO customers_signup (username, password, cpassword) VALUES ('$username' , '$password', '$cpassword')";
                $query_run = mysqli_query($connection, $query);

                if($query_run)
                {
                    $_SESSION['message'] = "Registered Successfully";
                    header("Location: signin.php");
                    exit(0);
                }
                else
                {
                    $_SESSION['message'] = "Something went wrong!";
                    header("Location: signup.php");
                    exit(0);
                }
            }
        }
        else
        {
            $_SESSION['message'] = "Password and Confirm Password does not match";
            header("Location: signup.php");
            exit(0);
        }
        
    
}
else
{
    header("Location: signin.php");
    exit(0);
}
?>
