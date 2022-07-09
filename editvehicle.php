<?php
$conn = mysqli_connect('localhost', 'root', '', 'vehicle_management');
$id = $_GET['id'];

$sql = "SELECT * FROM 'vehicle' WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$std = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <br><br><br>
    <?php include 'navbar_admin.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-info" href="adminvehicle.php">Driver List</a>
            </div>
            <div class="col-md-8">
                <h2>Edit Vehicle</h2>
                <hr>


                <form action="updatevehicle.php?id=<?php echo '$id' . '$driverid'; ?>" method="POST">

                    <div class="form-group">
                        <label for="name">Driver ID :</label>
                        <input required type="text" class="form-control" name="id" placeholder="Driver id" value="<?php echo $std['id'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Roll">Driver Name :</label>
                        <input required type="text" class="form-control" name="veh_type" placeholder="Vehicle Type" value="<?php echo $std['veh_type'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Age">Registration No :</label>
                        <input type="text" class="form-control" name="veh_reg" placeholder="Vehicle Registration No." value="<?php echo $std['veh_reg'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Chesis No :</label>
                        <input type="text" class="form-control" name="chesisno" placeholder="Chesis No." value="<?php echo $std['chesisno'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Brand :</label>
                        <input type="text" class="form-control" name="brand" placeholder="Brand Name" value="<?php echo $std['brand'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Color :</label>
                        <input type="text" class="form-control" name="veh_color" placeholder="Vehicle Color" value="<?php echo $std['veh_color'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Vehicle Registration Date :</label>
                        <input type="text" class="form-control" name="veh_regdate" placeholder="Vehicle Registration Date" value="<?php echo $std['veh_regdate'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Vehicle Description :</label>
                        <input type="text" class="form-control" name="veh_description" placeholder="Vehicle Description " value="<?php echo $std['veh_description'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Photo">Photo :</label>
                        <input type="file" class="form-control" name="veh_photo" placeholder="Photo " value="<?php echo $std['veh_photo'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Vehicle Availability :</label>
                        <input type="text" class="form-control" name="veh_available" placeholder="Vehicle availability" value="<?php echo $std['veh_available'] ?>">
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>