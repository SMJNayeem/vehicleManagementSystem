<?php
$connection = mysqli_connect("localhost", "root", "", "vehicle_management");
session_start();

$driverid = $_GET['driverid'];

$sql = "SELECT * FROM `driver` WHERE driverid='$driverid'";
//echo $sql;
$res = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($res);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>vehicle management system</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <?php include 'navbar.php'; ?>
  <div class="container" style="margin-top: 20px; margin-bottom: 20px;">


  </div>

  <div class="container">
    <div class="row">
      <div class="fb-profile-text" id="h1">
        <h2 style="padding-top: 40px; padding-left:20px"><?php echo $row['drname']; ?></h2>
      </div>
      <hr>
      <div class="col-sm-3">
        <div class="fb-profile">
          <img height="250" width="250" align="left" class="fb-image-profile thumbnail userpic" src="picture/<?php echo $row['drphoto'] ?>" alt="dp" />

        </div>
      </div>

      <div class="col-sm-9">
        <div data-spy="scroll" class="tabbable-panel">
          <div class="tabbable-line">
            <ul class="nav nav-tabs ">
              <li class="active">
                <a href="#tab_default_1" data-toggle="tab">
                  About Me </a>
              </li>

              <li>
                <a href="#tab_default_2" data-toggle="tab">
                  Contacts </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_default_1">


                <h4 style="margin-top: 10px; padding-top: 10px;"><strong>Full Name:</strong></h4>
                <p>
                  <?php echo $row['drname']; ?>
                </p>
                <!--
                      <h4><strong>Skills</strong></h4>
                      <p><?php echo $skills; ?></p>
                      -->
                <h4><strong>Joined In:</strong></h4>
                <p><?php echo $row['drjoin']; ?></p>


                <h4><strong>NID No:</strong></h4>
                <p><?php echo $row['drnid']; ?></p>

                <h4><strong>Driver License:</strong></h4>
                <p><?php echo $row['drlicense']; ?></p>

                <h4><strong>License Valid till:</strong></h4>
                <p><?php echo $row['drlicensevalid']; ?></p>

              </div>
              <div class="tab-pane" id="tab_default_2">
                <div class="row">
                  <div class="col-sm-10">
                    <!--
                        <div class="form-group">
                             <label for="education1">Highest Education:</label>
                              <p> MBA/PGDM</p>
                         </div>
                         -->
                    <div class="form-group">
                      <label for="mobile" style="margin-top: 10px; padding-top: 10px; font-size:17px"><strong>Mobile No:</strong></label>
                      <p> <?php echo $row['drmobile']; ?> </p>
                    </div>
                    <div class="form-group">
                      <label for="education3" style="font-size:17px"><strong>Address:</strong></label>
                      <p><?php echo $row['draddress']; ?> </p>
                    </div>

                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /container fluid-->
  <!-- <div class="container">
    <div class="col-sm-12">

    </div>
  </div> -->

  <footer style="background-color: #2f2f2f;
          color: #fff; margin-top: 143px; padding-top: 20px;
          padding-bottom: 20px; overflow:hidden" class="container-fluid text-center">
    <p>All rights reserved by &copy;JUST</p>
  </footer>

</body>

</html>