<?php
// connection
require('../Includes/config.php');
// header
require('../Includes/adminheader.php');
// data get from database
$id = $_GET['id'];
$patientedit = "SELECT * FROM `paitent` WHERE `id` = '$id'";
$connection = mysqli_query($conn, $patientedit);

if (!$connection) {
    die('Connection Error');
}
if (mysqli_num_rows($connection) > 0) {

    while ($row = mysqli_fetch_assoc($connection)) {

        ?>
        <!-- page-wrapper -->
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Patient</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- form  -->
                    <form action="edit-patients.php" method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" name="id" type="hidden" value="<?php echo $row['id'] ?>">
                                        <label>Profile Image <span class="text-danger">*</span></label>
                                        <br>
                                        <img src="<?php echo '../userimg/' . $row['Image'] ?>" height="200px" width="250px">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input class="form-control" type="text" name="username"
                                            value="<?php echo $row['Username'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email"
                                            value="<?php echo $row['Email'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>City <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="city" value="<?php echo $row['City'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Area</label>
                                        <input class="form-control" type="text" name="area" value="<?php echo $row['Area'] ?>">
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button name="submit" class="btn btn-primary submit-btn">Save</button>
                                </div>
                        </form>
                        <!-- form -->
                        <?php
    }
}
?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- page-wrapper -->
<?php
require('../Includes/adminfooter.php');
?>