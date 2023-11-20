<?php
// connection 
require('../Includes/config.php');
require('../Includes/adminheader.php');

// Check if the user is logged in and their session is valid (you can implement your own authentication system)
if (!isset($_SESSION['aid'])) {
    header("Location: adminlogin.php");
    exit;
}


$user_id = $_SESSION['aid'];
$old_password = $_POST['Current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];
// Verify that the new password and confirm password match

// Check if the old password is correct
$sql = "SELECT `Password` FROM `admin` WHERE `id` = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $pass = $row['Password'];
    if ($new_password !== $confirm_password) {
        echo "<script> alert('New password and confirm password do not match.') </script>";
    } elseif ($old_password == $pass) {
        $update_sql = "UPDATE `admin` SET `Password` = '$new_password' WHERE `id` = $user_id";
        if ($conn->query($update_sql) === TRUE) {
            echo "<script> alert('Password changed successfully.') </script>";
        } else {
            echo "<script> alert('Error updating password:') </script> " . $conn->error;
        }
    } else {
        echo "<script> alert('Incorrect old password.') </script>";
    }
} else {
    echo "<script> alert('User Not Found.') </script>";
}

$conn->close();
?>
<!-- page-wrapper -->
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4 class="page-title">Change Password</h4>
                <!-- form  -->
                <form method="post" action="change-password.php">
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Current Password</label>
                                    <input type="password" name="Current_password" value="" class="form-control"
                                        required="true">
                                </div>

                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="new_password" value="" class="form-control"
                                        required="true">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control" value=""
                                        required="true">

                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                                </div>

                            </div>
                        </div>

                    </div>



            </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
</div>
<!-- page-wrapper -->
</div>
<?php
require('../Includes/adminfooter.php');
?>