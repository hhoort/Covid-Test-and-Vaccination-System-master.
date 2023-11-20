<?php
// connection
require('../Includes/config.php');
// header
require('../Includes/adminheader.php');

// session
if (!isset($_SESSION["aid"])) {
    echo '<script> window.location.href="adminlogin.php"</script>';
    exit();
}
$sessions = $_SESSION['aid'];
// fetch data from database
$admins = "SELECT * FROM `admin` WHERE `id` = '$sessions'";
$connect = mysqli_query($conn, $admins);
$row = mysqli_fetch_assoc($connect);

?>
<!-- page-wrapper -->
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Edit Profile</h4>
            </div>
        </div>
        <!-- form -->
        <form method="post" action="updateadminprofile.php" enctype="multipart/form-data" class="form-group">
            <div class="card-box">
                <h3 class="card-title">Basic Informations</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-img-wrap">
                            <img class="inline-block" src="<?php echo 'AdminUserProfile/' . $row['Image'] ?>"
                                alt="Admin Img">
                            <div class="fileupload btn">
                                <span class="btn-text">edit</span>
                                <input class="upload" name="image" type="file"
                                    value="<?php echo 'AdminUserProfile/' . $row['Image'] ?>">
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Username</label>
                                        <input type="text" class="form-control floating" name="username"
                                            value="<?php echo $row['Username'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Email</label>
                                        <input type="email" class="form-control floating" name="email"
                                            value="<?php echo $row['Email'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Position</label>
                                        <input type="text" class="form-control floating" name="position"
                                            value="<?php echo $row['position'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Birth Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control floating" name="date" type="date"
                                                value="<?php echo $row['Date Of Birth'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <label class="focus-label">Address</label>
                                        <input type="text" class="form-control floating" name="address"
                                            value="<?php echo $row['Address'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus select-focus">
                                        <label class="focus-label">Gendar</label>
                                        <select class="select form-control floating" name="gender">
                                            <option value="Male" selected>Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center m-t-20">
                <button class="btn btn-primary submit-btn" name="submit" type="submit">Save</button>
            </div>
        </form>
        <!-- form -->
    </div>
</div>
<!-- page-wrapper -->
</div>
<?php
require('../Includes/adminfooter.php');
?>