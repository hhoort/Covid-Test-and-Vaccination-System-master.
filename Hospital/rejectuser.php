<?php
require '../Includes/config.php';

$user_id = $_GET['pid'];
$user_name = "Reject";
$update = "update `Appointment` set `pstatus` ='$user_name' where pid = '$user_id' ";
$res = mysqli_query($conn, $update);
if (!$res) {
    die("Query failed");
} else {
    echo '<script> alert("Your Rejection successful") </script>';
    echo '<script> window.location.href="reject.php" </script>';
}
?>