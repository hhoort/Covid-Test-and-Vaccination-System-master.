<?php
// CONNECTION
require('../Includes/config.php');
// HEADER
require('../Includes/adminheader.php');
?>
<!-- PAGE WRAPPER -->
<div class="page-wrapper">
    <!-- CONTENT -->
    <div class="content">
        <!-- ROW -->
        <div class="row">
            <!-- HEADING -->
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Approve Appointments</h4>
            </div>
            <!-- HEADING -->
        </div>
        <!-- ROW -->
        <!-- ROW -->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <!-- TABLE START -->
                    <table id="example" class="table table-striped custom-table text-center">
                        <thead>
                            <tr>
                                <th class="text-center">PID</th>
                                <th class="text-center">Patient Name</th>
                                <th class="text-center">Hospital Name</th>
                                <th class="text-center">Vaccine</th>
                                <th class="text-center">Appointment Date</th>
                                <th class="text-center">Appointment Time</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $appointments = "SELECT * FROM `appointment` AS a INNER JOIN `paitent` AS p ON a.`pname` = p.`id` INNER JOIN `hospital` AS h on a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v on a.vaccine = v.`id` WHERE a.`pstatus` = 'Approve'";
                            $connection = mysqli_query($conn, $appointments);
                            if (mysqli_num_rows($connection) > 0) {
                                while ($row = mysqli_fetch_array($connection)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['pid'] ?>
                                        </td>
                                        <td><img width="28" height="28" src="<?php echo '../userimg/' . $row['Image'] ?>"
                                                class="rounded-circle m-r-5" alt="">
                                            <?php echo $row['Username'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Hospital Name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Vaccine'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['visit date'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Time'] ?>
                                        </td>
                                        <?php if ($row['pstatus'] == 'Approve') {
                                            echo "<td><span class='custom-badge status-green col-lg-6'>Approve</span></td>";
                                        } elseif ($row['pstatus'] == 'Reject') {
                                            echo "<td><span class='custom-badge status-red col-lg-6'>Reject</span></td>";
                                        } else {
                                            echo "<td><span class='custom-badge status-blue   col-lg-6'>Pending</span></td>";
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- TABLE END -->
                </div>
            </div>
        </div>
        <!-- ROW END -->
    </div>

    <div id="delete_appointment" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="assets/img/sent.png" alt="" width="50" height="46">
                    <h3>Are you sure want to delete this Appointment?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE WRAPPER -->
</div>
<!-- DATE TIME PICKER -->
<script>
    $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'LT'
        });
        $('#datetimepicker4').datetimepicker({
            format: 'LT'
        });
    });
</script>
    <!-- DATE TIME PICKER END -->
    <!-- FOOTER-->
<?php
require('../Includes/adminfooter.php');
?>