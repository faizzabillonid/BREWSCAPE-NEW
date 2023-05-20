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

// Check if the user is signed in
session_start();
if (!isset($_SESSION['email'])) {
    // Redirect to the sign-in page or display an error message
    header("Location: signin.php");
    exit;
}

// Initialize variables for alert messages
$error = "";
$success = "";

// Check if reservation form has been submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $shop_location = $_POST['location'];
    $datetime = $_POST['datetime'];
    $num_people = $_POST['num_people'];
    $status = "Pending"; // Set initial status as "Pending"

    // Validate form data
    if (empty($name) || empty($phone) || empty($shop_location) || empty($datetime) || empty($num_people)) {
        echo "Please fill in all required fields.";
    } elseif (strtotime($datetime) < time()) {
        echo "Please choose a date/time in the future.";
    } elseif ($num_people <= 0 || $num_people > 20) {
        echo "Please choose a number of people between 1 and 20.";
    } else {

        // Get email from the signed-in user
        session_start(); // Start the session if it hasn't been started already
        $email = $_SESSION['email']; // Assuming you store the email of the signed-in user in the 'email' session variable

        // Insert reservation into database
        $sql = "INSERT INTO reservations (email, name, phone, shop_location, datetime, num_people, status) VALUES ('$email','$name', '$phone', '$shop_location', '$datetime', '$num_people', '$status')";
        if (mysqli_query($conn, $sql)) {
            $success = "Reservation submitted successfully.";
            header("Location: home.php");
            exit;
        } else {
            $error = "Error submitting the reservation.";
        }
    }
}
if (isset($_GET['logout'])) {
    // Redirect to the logout page
    header("Location: logout.php");
    exit;
}
?>

<!-- Logout button -->
<a href="?logout=true">Logout</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Reservation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="img/Brewscape_Mug_white.png" >
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/861a14876a.js" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="script.js">
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>

<body>

<?php include 'Bars/navbar.php';?>

<div class="reservation-container">
    <form method="post" class="form">
    <h2>Table Reservation</h2>
    <?php if ($error) { ?>
        <div class="alert alert-error"><?php echo $error; ?></div>
        <?php } ?>

    <?php if ($success) { ?>
        <div class="alert alert-success"><?php echo $success; ?></div>
        <?php } ?>
    <div class="row-grid">
                <div class="rows">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name" required>
                </div>

                <div class="rows">
                    <label for="cpnumber">Phone Number</label>
                    <input type="text" id="cpnumber" name="phone" placeholder="Enter your Phone Number" required>
                </div>

                <div class="rows">
                <label for="location">Branch Location</label>
                    <select id="location" name="location">
                        <option value="none" selected disabled hidded>Select Branch</option>
                        <option value="Brewscape Main Branch">Brewscape Main Branch</option>
                        <option value="Brewscape SM City Butuan">Brewscape SM City Butuan</option>
                        <option value="Brewscape Watergate Hotel">Brewscape Watergate Hotel</option>
                    </select>
                </div>

                <div class="rows">
                    <label for="table">Schedule</label>
                    <input type="datetime-local" id="datetime" name="datetime" min="1" max="8" placeholder="Choose your desired schedule" required>
                </div>

                <div class="rows">
                    <label for="schedule">Table for:</label>
                    <input type="number" id="schedule" name="num_people" placeholder="Enter Table for:" min="1" max="10"required>
                </div>

                <div id="reserve"class="rows" >
                    <input id="reserveBtn"type="submit" name="submit" value="Book">
                </div>
                <script> 
                    const reserveBtn = document.getElementById('reserveBtn');
                    reserveBtn.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default form submission

                    const datetime = document.getElementById('datetime').value;
                    const numPeople = document.getElementById('schedule').value;

                    if (datetime && numPeople) {
                    // Convert datetime to the desired format
                    const formattedDatetime = new Date(datetime);
                    const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
                    const formattedDatetimeString = formattedDatetime.toLocaleDateString('en-US', options);

                    const confirmationMessage = `Booking confirmed for ${numPeople} people at ${formattedDatetimeString}`;
                    alert(confirmationMessage);
                    } else {
                    alert('Please fill in all required fields.');
                    }
                    });</script>
           
    </div>
    </form>
    <div class="side-reservation">
            <img src="Photos\reservation.jpg" alt="">
            
        </div>
        
</div>
</body>
</html>