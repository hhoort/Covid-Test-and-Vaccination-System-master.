<?php
include('../Includes/config.php');
$user_id = $_GET['pid'];

$delete = "DELETE from `Appointment` where pid = '$user_id'";

$result = mysqli_query($conn, $delete);

if (!$result) {
    die("Query Failed");
} else {
    echo '<script> alert("Your Data Has been Deleted") </script>';
    echo '<script> window.location.href="trashdata.php" </script>';
}
?>