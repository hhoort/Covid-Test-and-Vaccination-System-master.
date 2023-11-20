<?php
include '../Includes/config.php';

$user_id = mysqli_real_escape_string($conn, $_POST['tid']);
$user_name = mysqli_real_escape_string($conn, $_POST['username']);
$user_hname = mysqli_real_escape_string($conn, $_POST['hospitalname']);
$user_time = mysqli_real_escape_string($conn, $_POST['ttime']);
$user_date = mysqli_real_escape_string($conn, $_POST['tdate']);
$user_status = mysqli_real_escape_string($conn, $_POST['tstatus']);

$deliveryFile = $_FILES['deliveryFile']['name'];
$deliveryFile_tmp = $_FILES['deliveryFile']['tmp_name'];
$deliveryFile_size = $_FILES['deliveryFile']['size'];

$target_directory = '../Reports/Testreport/';
$target_file = $target_directory . $deliveryFile;

$update = "UPDATE `test` AS a 
INNER JOIN `hospital` AS h ON a.`thospital` = h.`id` 
INNER JOIN `paitent` AS p ON a.`tname` = p.`id` 
SET
    h.`Hospital Name` = '$user_hname', 
    a.`tdate` = '$user_date',
    a.`ttime` = '$user_time',
    a.`tstatus` = '$user_status',
    a.`Report` = '$deliveryFile'
WHERE a.`tid` = '$user_id'";

if (move_uploaded_file($deliveryFile_tmp, $target_file)) {
    $res = mysqli_query($conn, $update);
    if (!$res) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        if ($user_status == 'Positive') {
            echo "<script>alert('Positive')</script>";
            echo "<script>alert('Report Delivered Successfully')</script>";
            echo "<script>window.location.href='positive.php'</script>";
        } elseif ($user_status == 'Negative') {
            echo "<script>alert('Negative')</script>";
            echo "<script>alert('Report Delivered Successfully')</script>";
            echo "<script>window.location.href='negative.php'</script>";
        }
    }
} else {
    echo "File upload failed.";
}
?>