<?php
require("../Includes/config.php");
session_start();

if (!isset($_SESSION["hospital"])) {
    echo '<script> window.location.href="hospitallogin.php"</script>';
    exit();
}
$himg = $_FILES['himg']['name'];
$himg_tmp = $_FILES['himg']['tmp_name'];
$himg_size = $_FILES['himg']['size'];
$username = $_SESSION["hospital"];

$updateQuery = "UPDATE `hospital` SET `Himage` = '$himg' WHERE `Hospital Name` = '$username'";

if (move_uploaded_file($himg_tmp, 'hospitalimg/' . $himg)) {
    $res = mysqli_query($conn, $updateQuery);
    if (!$res) {
        die("Query failed");
    } else {
        echo "<script>alert('Hospital Picture Has Been Update')</script>";
        echo "<script>window.location.href='profile.php'</script>";
    }
} else {
    echo "Hospital update failed.";
}