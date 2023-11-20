<?php
// connection
require('../Includes/config.php');
// header
require('../Includes/adminheader.php');
// data get from database
$id = $_GET['id'];
$hospitaledit = "SELECT * FROM `hospital` WHERE `id` = '$id'";
$connection = mysqli_query($conn, $hospitaledit);

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
                        <h4 class="page-title">Edit Hospital</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- form -->
                        <form method="post" action="edit-hospitals.php" enctype="multipart/form-data" class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                        <label>User Image <span class="text-danger">*</span></label>
                                        <br>
                                        <img id="selected-images"
                                            src="<?php echo '../Hospital/hospitaluserimg/' . $row['profileImage'] ?>"
                                            alt="Selected Image" height="100px" width="100px"
                                            style="border-radius: 200px; border:2px solid black">
                                        <br>
                                        <br>
                                        <input class="form-control" type="file" name="image"
                                            value="<?php echo '../Hospital/hospitaluserimg/' . $row['profileImage'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Hospital Image <span class="text-danger">*</span></label>
                                        <br>
                                        <img id="selected-images"
                                            src="<?php echo '../Hospital/hospitalimg/' . $row['Himage'] ?>" alt="Selected Image"
                                            height="100px" width="100px" style="border-radius: 200px; border:2px solid black">
                                        <br>
                                        <br>
                                        <input class="form-control" type="file" name="himage"
                                            value="<?php echo '../Hospital/hospitalimg/' . $row['Himage'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Hospital Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="hospitalname"
                                            value="<?php echo $row['Hospital Name'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Hospital Username</label>
                                        <input class="form-control" name="hospitalusername" type="text"
                                            value="<?php echo $row['username'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Location <span class="text-danger">*</span></label>
                                        <input class="form-control" name="location" type="text"
                                            value="<?php echo $row['Location'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="address"
                                            value="<?php echo $row['Address'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input class="form-control" type="date" name="date" value="<?php echo $row['Date'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="status"
                                            value="<?php echo $row['Status'] ?>">
                                    </div>
                                </div>
                                <div class=" text-center">
                                    <button name="submit" class="btn btn-primary submit-btn">Save</button>
                                </div>
                        </form>
                        <!-- form  -->
                        <?php
    }
}
?>
            </div>
        </div>
    </div>
</div>
<!-- page-wrapper -->
<?php
require('../Includes/adminfooter.php');
?>