<?php
// connection
include '../includes/config.php';

$user_id = $_GET['pid'];
// update query
$update = "update `appointment` set pstatus = 'Reject' where pid = '$user_id' ";
$res = mysqli_query($conn, $update);
if (!$res) {
    die("Query failed");
} else {
    echo '<script>
    window.location.href="appointments.php";
    </script>';
}
?>