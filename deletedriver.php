<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','vehicle_management'); 

   $sql="DELETE FROM `driver` WHERE driverid='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: admindriver.php");
   }else{
         echo "Not deleted";
   }
