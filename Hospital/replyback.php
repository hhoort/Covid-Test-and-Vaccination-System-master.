<?php
include '../Includes/config.php';

$user_id = $_POST['Rid'];
$user_name = $_POST['Rname'];
$user_hname = $_POST['Remail'];
$user_vaccine = $_POST['Rcity'];
$user_date = $_POST['Rmessage'];
$user_status = $_POST['Rreply'];
$update = "UPDATE `readmore` AS a SET a.`Rname` = '$user_name', 
    a.`Remail` = '$user_hname', 
    a.`Rcity` = '$user_vaccine', 
    a.`Rmessage` = '$user_date',
    a.`Rreply` = '$user_status'
    WHERE a.`Rid` = '$user_id';
";
$res = mysqli_query($conn, $update);
if (!$res) {
    die("Query failed");
} else {
    echo "<script> alert('Reply Send')</script>";
    echo "<script> window.location.href='readmore.php'</script>";
} 
?>