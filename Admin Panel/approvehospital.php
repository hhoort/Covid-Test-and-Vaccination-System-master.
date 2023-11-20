<?php
// connection
include '../includes/config.php';

$user_id = $_GET['id'];
// update query
$update = "update `hospital` set Status = 'Approve' where id = '$user_id' ";
$ress = mysqli_query($conn, $update);
if ($ress) {
    echo '<script>
    window.location.href="hospitals.php";
    </script>';
} else {
    die("Query failed");
}
?>