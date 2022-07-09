<?php
$connection = mysqli_connect("localhost", "root", "", "vehicle_management");

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>vehicle management system</title>

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
<style>
  .parallax {
    /* The image used */
    background-image: url("1.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    z-index: 1;

  }

  .parallax::after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, .6);
    z-index: -1;
  }


  .navbar-fixed-top.scrolled {
    background-color: ghostwhite;
    transition: background-color 200ms linear;
  }
</style>

<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()">








  <!--
    <div>  
       <div class="jumbotron">
          <h2 class="animated bounce">Ruet Vehicle Management</h2>      
          <p>A management system where you can easily manage vehicles.</p>
        </div>
           
       
        
    </div> 
    -->
  <div class="parallax foo">
    <?php include 'navbar.php'; ?>

    <div class="hero-text" style=" text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">

      <h1 class="animated rubberBand">JUST Vehicle Management System</h1>
      <p style="font-size: 22px;">A management system where you can easily manage vehicles</p>

      <?php if (isset($_SESSION['username']) == true) { ?>
        <a class="btn btn-success" style="text-align: center" href="booking.php">Book a Vehicle</a>

      <?php } else {  ?>
        <a class="btn btn-success" style="text-align: center" href="login.php">Login To Book A Vehicle</a>
      <?php } ?>

    </div>
  </div>

  <!-- <section class="aboutUs">
    <div class="comtainer">
      <div class="row">
        <div class="col-lg-5">
          <img src="./picture/2.webp" alt="car">
        </div>
        <div class="col-lg-7">
          <div class="aboutWrapper">
            <h1>ABOUT US</h1>
            <h4>
              JUST Vehicle Management System is an online platform for vehicle renting, pre-booking and monthly service.
            </h4>
            <div class="aboutInfo">
              <div>
                <h3>From our service you can –</h3>
                <ul>
                  <li>
                    Rent cars based on your needs at any time any day.
                  </li>
                  <li>
                    Pay monthly for services you take.
                  </li>
                </ul>
                <br>
                <button>Book a car now</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section> -->


  <section class="aboutUs">
    <div class="container">
      <div class="aboutWrapper">
        <h1>ABOUT US</h1>
        <div class="aboutInfo">
          <img src="./picture/2.webp" alt="car">
          <div>
            <p>JUST Vehicle Management System is an online platform for vehicle renting, pre-booking and monthly service.
              <br /> You can rely on our car rent service 100%.
            </p>
            <h5>With us you can –</h5>
            <ul>
              <li style="padding-top:5px;">Rent cars based on your needs at any time any day.</li>
              <li>Pay monthly for services you take.</li>
            </ul>
            <p style="padding:5px;">In our collection, we have sedan, SUV, luxury cars and many more. To requisite a vehicle you have to login to our system and book a vehicle. Thats all !!! <br />
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer style="background-color: #2f2f2f;
          color: #fff; margin-top: 30px; padding-top: 20px;
          padding-bottom: 20px;" class="container-fluid text-center">
    <p>All rights reserved by &copy;JUST</p>
  </footer>







  <script>
    $(function() {
      $(document).scroll(function() {
        var $nav = $(".navbar-fixed-top");
        $a = $(".parallax");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
      });
    });
  </script>


  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


  <script>
    window.sr = ScrollReveal();
    sr.reveal('.foo', {
      duration: 800
    });
    sr.reveal('.foo1', {
      duration: 800,
      origin: 'top'
    });
  </script>

</body>

</html>