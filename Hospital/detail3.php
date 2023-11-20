<?php
include '../Includes/config.php';

$user_id = $_POST['pid'];
$user_name = mysqli_real_escape_string($conn, $_POST['pname']);
$user_hname = mysqli_real_escape_string($conn, $_POST['hospitalname']);
$user_vaccine = mysqli_real_escape_string($conn, $_POST['Vaccine']);
$user_date = $_POST['date'];
$user_dose = $_POST['dose'];
$user_status = $_POST['pstatus3'];

$deliveryFile = $_FILES['deliveryFile']['name'];
$deliveryFile_tmp = $_FILES['deliveryFile']['tmp_name'];
$deliveryFile_size = $_FILES['deliveryFile']['size'];

$target_directory = '../Reports/';
$target_file = $target_directory . $deliveryFile;

$update = "UPDATE `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` 
INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` 
SET a.`pname` = '$user_name', 
    h.`Hospital Name` = '$user_hname', 
    v.`Vaccine` = '$user_vaccine', 
    a.`visit date` = '$user_date',
    a.`Dose` = '$user_dose',
    a.`PStatus3` = '$user_status',
    a.`Report` = '$deliveryFile'
WHERE a.`pid` = '$user_id'";

if (move_uploaded_file($deliveryFile_tmp, $target_file)) {
    $res = mysqli_query($conn, $update);
    if (!$res) {
        die("Query failed");
    } else {
        if ($user_status == 'Sent To Lab') {
            echo "<script>alert('No Data Update')</script>";
            echo "<script>window.location.href='senttolab.php'</script>";
        } elseif ($user_status == 'Delivered') {
            echo "<script>alert('Report Delivered Successful')</script>";
            echo "<script>window.location.href='reportdelivered.php'</script>";
        }
    }
} else {
    echo "File upload failed.";
}
?>