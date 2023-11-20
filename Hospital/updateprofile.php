<?php
require("../Includes/config.php");
session_start();

if (!isset($_SESSION["hospital"])) {
    echo '<script> window.location.href="hospitallogin.php"</script>';
    exit();
}
$img = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];
$img_size = $_FILES['img']['size'];
$user_hname = $_POST['username'];
$user_location = $_POST['Location'];
$user_address = $_POST['Address'];
$user_date = $_POST['date'];
$username = $_SESSION["hospital"]; // Assuming that "hospital" is the session variable where the username is stored

// Update query with correct column names
$updateQuery = "UPDATE `hospital` SET `username` = '$user_hname', `Location` = '$user_location' , `Address` = '$user_address', `Date` = '$user_date' , `profileImage` = '$img' WHERE `Hospital Name` = '$username'";
move_uploaded_file($img_tmp, 'hospitaluserimg/' . $img);
    $res = mysqli_query($conn, $updateQuery);
    if (!$res) {
        die("Query failed");
    } else {
        echo "<script>alert('Profile Has Been Update')</script>";
        echo "<script>window.location.href='profile.php'</script>";
    }
?>