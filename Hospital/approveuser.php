<?php
require '../Includes/config.php';

$user_id = $_GET['pid'];
$user_name = "Approve";
$update = "update `Appointment` set `pstatus` ='$user_name' where pid = '$user_id' ";
$res = mysqli_query($conn, $update);
if (!$res) {
    die("Query failed");
} else {
    echo '<script> alert("Your approval successful") </script>';
    echo '<script> window.location.href="approve.php" </script>';
}
?>