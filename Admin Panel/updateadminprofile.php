<?php
// connection
require("../Includes/config.php");
// session
session_start();

if (!isset($_SESSION["aid"])) {
    echo '<script>window.location.href="adminlogin.php"</script>';
    exit();
}

$img = $_FILES['image']['name'];
$img_tmp = $_FILES['image']['tmp_name'];
$img_size = $_FILES['image']['size'];
$user_name = $_POST['username'];
$user_email = $_POST['email'];
$user_position = $_POST['position'];
$user_date = $_POST['date'];
$user_address = $_POST['address'];
$user_gender = $_POST['gender'];
$username = $_SESSION["aid"];

// update query
$updateQuery = "UPDATE `admin` SET `Username` = '$user_name', `Email` = '$user_email', `position` = '$user_position', `Date Of Birth` = '$user_date', `Address` = '$user_address', `Gender` = '$user_gender', `Image` = '$img' WHERE `id` = '$username'";
move_uploaded_file($img_tmp, 'AdminUserProfile/' . $img);
$res = mysqli_query($conn, $updateQuery);
if (!$res) {
    die("Query failed");
} else {
    echo "<script>alert('Profile Has Been Updated')</script>";
    echo "<script>window.location.href='profile.php'</script>";
}
?>