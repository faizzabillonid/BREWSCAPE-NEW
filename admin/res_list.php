<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$brewscape = 'brewscape';
$conn = mysqli_connect($host, $user, $password, $brewscape);

// Check the database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the Cancel button is clicked
if (isset($_GET['cancel'])) {
    $reservationId = $_GET['cancel'];

    // Update the status to "Cancelled"
    $sql = "UPDATE reservations SET status = 'Cancelled' WHERE id = $reservationId";
    if (mysqli_query($conn, $sql)) {
        // Redirect back to the reservation list page
        header("Location: res_list.php");
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Check if the Confirm button is clicked
if (isset($_GET['confirm'])) {
    $reservationId = $_GET['confirm'];

    // Update the status to "Confirmed"
    $sql = "UPDATE reservations SET status = 'Confirmed' WHERE id = $reservationId";
    if (mysqli_query($conn, $sql)) {
        // Redirect back to the reservation list page
        header("Location: res_list.php");
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Retrieve reservations from the database
$query = "SELECT * FROM reservations";
$query_run = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="img/Brewscape_Mug_white.png">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Reservation List</h1>

    <table id="customers">
        <tr>
            <th>Reservation Number</th>
            <th>Email</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Branch Location</th>
            <th>Schedule</th>
            <th>Table for:</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        if (mysqli_num_rows($query_run) > 0) {
            while ($row = mysqli_fetch_assoc($query_run)) {
                $status = $row['status'];
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['shop_location']; ?></td>
                    <td><?php echo date('F d, Y  h:i A', strtotime($row['datetime'])); ?></td>
                    <td><?php echo $row['num_people']; ?></td>
                    <td>
                        <?php
                        if ($status == "Pending") {
                            echo '<span class="status-button status-pending">' . $status . '</span>';
                        } elseif ($status == "Confirmed") {
                            echo '<span class="status-button status-confirmed">' . $status . '</span>';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($status == "Pending") {
                            echo '<a href="?cancel=' . $row['id'] . '" class="action-button action-cancel">Cancel</a>';
                        } elseif ($status == "Confirmed") {
                            echo '<a href="?confirm=' . $row['id'] . '" class="action-button action-done">Done</a>';
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
        } else {
            echo "No Record Found";
        }
        ?>
    </table>
</body>
</html>
