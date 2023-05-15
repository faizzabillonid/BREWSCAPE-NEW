<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="img/Brewscape_Mug_white.png" >
   <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/861a14876a.js" crossorigin="anonymous"></script>


</head>
<body>
    

<h1>Reservation List</h1>

        <?php
            $connection = mysqli_connect("localhost", "root", "", "brewscape");

            $query = "SELECT * FROM reservations";
            $query_run = mysqli_query($connection, $query);

        ?>

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Schedule</th>
    <th>Table for:</th>
  </tr>
  <tr>
            <?php
            if(mysqli_num_rows($query_run) > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
            ?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo date('F d, Y  h:i A', strtotime($row['datetime'])); ?></td> 
                <td><?php echo $row['num_people']; ?></td>
            </tr>
            <?php

                }
            }
            else 
            {
                echo "No Record Found";
            }
            ?>
  </tr>

</table>

</body>
</html>