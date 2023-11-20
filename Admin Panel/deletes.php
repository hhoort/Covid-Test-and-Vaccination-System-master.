<?php
// connection
include('../Includes/config.php');
$user_id = $_GET['id'];

// delete query
$delete = "delete from hospital where id = '$user_id'";

$results = mysqli_query($conn, $delete);

if (!$results) {
    die("Query Failed");
} else {
    echo '<script> alert("Your Hospital Data Has been Deleted") </script>';
    echo '<script> window.location.href="hospitals.php" </script>';
}
?>