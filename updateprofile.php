<?php
require("Includes/config.php");
session_start();

if (!isset($_SESSION["email"])) {
    echo '<script> window.location.href="login.php"</script>';
    exit();
}


$user_id = $_POST['id'];
$img = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];
$img_size = $_FILES['img']['size'];
$user_name = mysqli_real_escape_string($conn, $_POST['name']);
$user_city = mysqli_real_escape_string($conn, $_POST['City']);
$user_area = mysqli_real_escape_string($conn, $_POST['area']);
$username = $_SESSION["email"]; // Assuming that "hospital" is the session variable where the username is stored
// Update query with correct column names
$updateQuery = "UPDATE `paitent` SET `Username` = '$user_name', `City` = '$user_city' , `Area` = '$user_area', `Image` = '$img' WHERE `Email` = '$username'";
move_uploaded_file($img_tmp, 'userimg/' . $img);

    $res = mysqli_query($conn, $updateQuery);
    if (!$res) {
        die("Query failed");
    } else {
        echo "
        <script>alert('Profile Has Been Updated Successfully')
</script>";
        echo "<script>window.location.href='profile.php'</script>";
    }
?>