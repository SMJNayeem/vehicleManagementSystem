<?php
$conn = mysqli_connect('localhost', 'root', '', 'vehicle_management');
$id = $_GET['driverid'];

$sql = "SELECT * FROM 'driver' WHERE driverid='$id'";
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
                <a class="btn btn-info" href="admindriver.php">Driver List</a>
            </div>
            <div class="col-md-8">
                <h2>Edit Driver</h2>
                <hr>


                <form action="updatedriver.php?id=<?php echo '$id' . '$driverid'; ?>" method="POST">

                    <div class="form-group">
                        <label for="Roll">Driver Name :</label>
                        <input required type="text" class="form-control" name="drname" placeholder="Driver Name" value="<?php echo $std['drname'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Age">Mobile :</label>
                        <input type="text" class="form-control" name="drmobile" placeholder="Mobile No." value="<?php echo $std['drmobile'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Date Joined :</label>
                        <input type="text" class="form-control" name="drjoin" placeholder="Date Joined" value="<?php echo $std['drjoin'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Driver NID:</label>
                        <input type="text" class="form-control" name="drnid" placeholder="NID Card No." value="<?php echo $std['drnid'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">License :</label>
                        <input type="text" class="form-control" name="drlicense" placeholder="License No." value="<?php echo $std['drlicense'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">License Valid till:</label>
                        <input type="text" class="form-control" name="drlicensevalid" placeholder="License No. Valid till" value="<?php echo $std['drlicensevalid'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Date Joined :</label>
                        <input type="text" class="form-control" name="drjoin" placeholder="Date Joined" value="<?php echo $std['drjoin'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Address :</label>
                        <input type="text" class="form-control" name="draddress" placeholder="Address " value="<?php echo $std['draddress'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Photo">Photo :</label>
                        <input type="file" class="form-control" name="drphoto" placeholder="Photo " value="<?php echo $std['drphoto'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Address">Driver Availability :</label>
                        <input type="text" class="form-control" name="dr_available" placeholder="Driver availability" value="<?php echo $std['dr_available'] ?>">
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