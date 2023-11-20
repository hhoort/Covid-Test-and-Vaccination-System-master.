<?php
// connection
require('../Includes/config.php');
// header
require('../Includes/adminheader.php');
// fetch data from database
$patient = "SELECT * FROM `paitent`";
$connection = mysqli_query($conn, $patient);
if (mysqli_num_rows($connection) > 0) {
    ?>
    <!-- page-wrapper -->
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Patients</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                    <!-- table    -->
                    <table id="example"
                    class="Display nowrap table table-border table-striped custom-table datatable mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Area</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($connection)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['id'] ?>
                                        </td>
                                        <td><img width="28" height="28" src="<?php echo '../userimg/' . $row['Image'] ?>"
                                        class="rounded-circle m-r-5" alt="">
                                        <?php echo $row['Username'] ?>
                                    </td>
                                        <td>
                                            <?php echo $row['Area'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['City'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Email'] ?>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item"
                                                        href="edit-patient.php?id=<?php echo $row['id'] ?>"><i
                                                            class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="deletepatient.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash-o m-r-5"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
}
?>
                        </tbody>
                    </table>
                    <!-- table    -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-wrapper -->
<div id="delete_patient" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Patient?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <a href="deletepatient.php" type="submit" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?php
require('../Includes/adminfooter.php');
?>