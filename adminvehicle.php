<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'vehicle_management');

$select_query = "SELECT * FROM `vehicle` ORDER BY veh_id DESC";
$result = mysqli_query($connection, $select_query);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking list</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'navbar_admin.php'; ?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin: 35px;">
                <a class="btn btn-info" href="newvehicle.php" style="text-align: center">Add new Vehicle</a>
            </div>
            <div class="col-md-12">
                <div class="page-header">
                    <h1 style="text-align: center;">Vehicle List</h1>

                </div>
                <table id="myTable" class="table table-bordered animated bounce">
                    <thead>

                        <th>Vehicle Id</th>
                        <th>Vehicle Type</th>
                        <th>Registration No</th>
                        <th>Chesis No</th>
                        <th>Photo</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </thead>

                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>

                                <td><?php echo $row['veh_id']; ?></td>
                                <td><?php echo $row['veh_type']; ?></td>
                                <td><?php echo $row['veh_reg']; ?></td>
                                <td><?php echo $row['chesisno']; ?></td>
                                <!-- <td><?php echo $row['veh_photo']; ?></td> -->
                                <td><img height="50px" width="100px" src="vehicle picture/<?php echo $row["veh_photo"]; ?>" alt="dp"></td>
                                <td><a class="btn btn-default" href="editvehicle.php?id=<?php echo $row['veh_id']; ?>">Edit</a></td>

                                <td><a class="btn btn-danger" href="deletedriver.php?id=<?php echo $row['veh_id']; ?>">Delete</a></td>

                                <!-- <?php if ($row['confirmation'] == 0 or $row['finished'] == 1) { ?>
                                    <td><a class="btn btn-default disabled" href="releasebooking.php?id=<?php echo $row['booking_id']; ?>">Release Vehicle</a></td>
                                <?php } else { ?>
                                    <td><a class="btn btn-default" href="releasebooking.php?id=<?php echo $row['booking_id']; ?>">Release Vehicle</a></td>
                                <?php } ?>

                                <?php if ($row['confirmation'] == '0') { ?>
                                    <td><a class="btn btn-success" href="confirmbooking.php?id=<?php echo $row['booking_id']; ?>">Confirm</a></td>
                                <?php } else { ?>
                                    <td><a class="btn btn-success disabled" href="confirmbooking.php?id=<?php echo $row['booking_id']; ?>">Confirm</a></td>
                                <?php } ?>

                                <?php if ($row['confirmation'] == '0') { ?>
                                    <td>No</td>
                                <?php } else { ?>
                                    <td>Yes</td>
                                <?php }  ?>

                                <?php if ($row['finished'] == '0') { ?>
                                    <td>No</td>
                                <?php } else { ?>
                                    <td>Yes</td>
                                <?php }  ?>



                                <?php if ($row['finished'] == '1' and $row['paid'] == 0) {  ?>
                                    <td><a class="btn btn-primary" href="bill.php?id=<?php echo $row['booking_id']; ?>">Bill</a></td>
                                <?php } else if ($row['paid'] == 1) { ?>
                                    <td><a class="btn btn-primary disabled" href="bill.php?id=<?php echo $row['booking_id']; ?>">Bill</a></td>
                                <?php }  ?>


                                <td><a href="confirmpayment.php?id=<?php echo $row['booking_id']; ?>">Confirm</a></td>

                                <?php if ($row['paid'] == '0') { ?>
                                    <td>No</td>
                                <?php } else { ?>
                                    <td>Yes</td>
                                <?php }  ?> -->
                            </tr>


                        <?php }   ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>

    <script>
        $(document).ready(function() {
            $('vehicle').dataTable();
        });
    </script>

    <footer style="background-color: #2f2f2f;
          color: #fff; margin-top: 90px; padding-top: 20px;
          padding-bottom: 20px; overflow:hidden" class="container-fluid text-center">
        <p>All rights reserved by &copy;JUST</p>
    </footer>

</body>

</html>