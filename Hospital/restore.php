<?php
include('../Includes/config.php');
$user_id = $_GET['pid'];

$delete = "UPDATE `appointment` SET Status2 = '1' where pid = $user_id";

$result = mysqli_query($conn, $delete);

if (!$delete) {
    die("Query Failed");
} else {
    echo '<script> alert("Your data has been restore") </script>';
    echo '<script> window.location.href="trashdata.php" </script>';
}
?>