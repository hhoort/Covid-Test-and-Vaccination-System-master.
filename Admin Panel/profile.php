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
$connect = mysqli_query($conn,$admins);
$row = mysqli_fetch_assoc($connect);

?>
<!-- page-wrapper -->
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="edit-profile.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="<?php echo 'AdminUserProfile/' . $row['Image']?>" alt="admin Image"></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left mt-4 ml-3">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $row['Username']?></h3>
                                                <small class="text-muted"><?php echo $row['position']?></small>
                                                <div class="staff-id">Employee ID : <?php echo $row['id']?></div>
                                                    <div class="staff-msg"><a class="btn"></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info mt-4">
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><?php echo $row['Email']?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text"><?php echo $row['Date Of Birth']?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo $row['Address']?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text"><?php echo $row['Gender']?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
</div>
        </div>
        <!-- page-wrapper -->
    </div>
    <?php
    require('../Includes/adminfooter.php');
    ?>