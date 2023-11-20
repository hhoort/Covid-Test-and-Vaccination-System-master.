<?php
// connection
require('../Includes/config.php');

$id = $_POST['id'];
$img = $_FILES['image']['name'];
$img_tmp = $_FILES['image']['tmp_name'];
$img_size = $_FILES['image']['size'];
$himg = $_FILES['himage']['name'];
$himg_tmp = $_FILES['himage']['tmp_name'];
$himg_size = $_FILES['himage']['size'];
$hname = $_POST['hospitalname'];
$uname = $_POST['hospitalusername'];
$location = $_POST['location'];
$address = $_POST['address'];
$date = $_POST['date'];
$status = $_POST['status'];
// update query
$update = "UPDATE `hospital` SET `username`='$uname',`Hospital Name`='$hname',`Location`='$location',`Address`='$address',`Date`='$date',`profileImage`='$img',`Himage`='$himg',`Status`='$status' WHERE `id` = '$id'";
$connection_check = mysqli_query($conn, $update);
move_uploaded_file($img_tmp, '../Hospital/hospitaluserimg/' . $img);
move_uploaded_file($himg_tmp, '../Hospital/hospitalimg/' . $himg);
if (!$connection_check) {
    echo 'connection error';
} else {
    echo "<script> alert('Update Hospital Succesfull') </script>";
    echo "<script> window.location.href='hospitals.php' </script>";
}







?>