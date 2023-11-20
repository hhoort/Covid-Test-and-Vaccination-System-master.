<?php
// connection
require('../Includes/config.php');

$id = $_POST['id'];
$uname = $_POST['username'];
$email = $_POST['email'];
$city = $_POST['city'];
$area = $_POST['area'];
// update query
$update = "UPDATE `paitent` SET `Username`='$uname',`Email`='$email',`City`='$city',`Area`='$area' WHERE `id` = '$id'";
$connection_check = mysqli_query($conn, $update);

if (!$connection_check) {
    echo 'connection error';

} else {
    echo "<script> alert('Update patient Succesfull') </script>";
    echo "<script> window.location.href='patients.php' </script>";
}







?>