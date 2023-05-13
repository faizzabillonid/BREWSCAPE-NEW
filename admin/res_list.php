<!DOCTYPE html>
<html lang="en">
<head>
<style>
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #F2DEC1;
    color: black;
  }
</style>

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
                <td><?php echo $row['datetime']; ?></td>
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