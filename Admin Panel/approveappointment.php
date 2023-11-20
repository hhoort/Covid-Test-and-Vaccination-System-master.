<?php
// connection
include '../includes/config.php';

$user_id = $_GET['pid'];

// Update Query
$update = "update `appointment` set pstatus = 'Approve' where pid = '$user_id' ";
$ress = mysqli_query($conn, $update);
if ($ress) {
    echo '<script>
    window.location.href="appointments.php";
    </script>';
} else {
    die("Query failed");
}
?>