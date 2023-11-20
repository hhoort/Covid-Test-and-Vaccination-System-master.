<?php
// connection
include '../includes/config.php';

$user_id = $_GET['id'];
// update query
$update = "update `hospital` set Status = 'Reject' where id = '$user_id' ";
$res = mysqli_query($conn, $update);
if (!$res) {
    die("Query failed");
} else {
    echo '<script>
    window.location.href="hospitals.php";
    </script>';
}
?>