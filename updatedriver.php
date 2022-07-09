<?php
$driverid = $_POST['driverid'];
$drname = $_POST['drname'];
$drmobile = $_POST['drmobile'];
$drjoin = $_POST['drjoin'];
$drnid = $_POST['drnid'];
$drlicense = $_POST['drlicense'];
$drlicensevalid = $_POST['drlicensevalid'];
$draddress = $_POST['draddress'];
$drphoto = $_POST['drphoto'];
$dr_available = $_POST['dr_available'];

$conn = mysqli_connect('localhost', 'root', '', 'vehicle_management');
$sql = "UPDATE driver SET 'drname'='$drname', 'drmobile'='$drmobile', 'drjoin'='$drjoin','drnid'='$drnid',  tcost='$tcost' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: showbill.php?id=" . $id);
} else {
    echo "Not inserted";
}
