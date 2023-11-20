<?php
// connection
require('../Includes/config.php');
// header
require('../Includes/adminheader.php');


// fetch data from database
$patient = "SELECT * FROM `paitent`";
$conn1 = mysqli_query($conn, $patient);
$fetch = mysqli_num_rows($conn1);

$test = "SELECT * FROM `test`";
$conn2 = mysqli_query($conn, $test);
$fetch1 = mysqli_num_rows($conn2);

$vaccine = "SELECT * FROM `vaccines`";
$conn3 = mysqli_query($conn, $vaccine);
$fetch2 = mysqli_num_rows($conn3);

$hospital = "SELECT * FROM `hospital`";
$conn4 = mysqli_query($conn, $hospital);
$fetch3 = mysqli_num_rows($conn4);

$happrove = "SELECT * FROM `hospital` WHERE `Status` = 'Approve'";
$conn5 = mysqli_query($conn, $happrove);
$fetch4 = mysqli_num_rows($conn5);

$hreject = "SELECT * FROM `hospital` WHERE `Status` = 'Reject'";
$conn6 = mysqli_query($conn, $hreject);
$fetch5 = mysqli_num_rows($conn6);

$appointment = "SELECT * FROM `appointment`";
$conn7 = mysqli_query($conn, $appointment);
$fetch6 = mysqli_num_rows($conn7);

$approve = "SELECT * FROM `appointment` WHERE `pstatus` = 'Approve'";
$conn8 = mysqli_query($conn, $approve);
$fetch7 = mysqli_num_rows($conn8);

$reject = "SELECT * FROM `appointment` WHERE `pstatus` = 'Reject'";
$conn9 = mysqli_query($conn, $reject);
$fetch8 = mysqli_num_rows($conn9);

?>
<!-- page-wrapper -->
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <!-- cards -->
            <div class="col-md-8 col-sm-6 col-lg-6 col-xl-3">
                <a href="patients.php">
                    <div class="dash-widget">
                        <span class="dash-widget-bg1 bg-dark"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3 class="text-dark">
                                <?php echo $fetch ?>
                            </h3>
                            <span class="widget-title1 bg-dark">All Patient List <i class="fa fa-check"
                                    aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="covidtest.php">
                    <div class="dash-widget">
                        <span class="dash-widget-bg1"><i class="fa fa-flask"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3 class="text-info">
                                <?php echo $fetch1 ?>
                            </h3>
                            <span class="widget-title1">Covid Test <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="Vaccine.php">
                    <div class="dash-widget">
                        <span class="dash-widget-bg3"><i class="fa fa-bars" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3 class="text-secondary">
                                <?php echo $fetch2 ?>
                            </h3>
                            <span class="widget-title3">List Of Vaccine <i class="fa fa-check"
                                    aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="hospitals.php">
                    <div class="dash-widget">
                        <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3 class=" text-warning ">
                                <?php echo $fetch3 ?>
                            </h3>
                            <span class="widget-title4">Hospital List <i class="fa fa-check"
                                    aria-hidden="true"></i></span>
                        </div>
                    </div>
            </div>
            </a>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="hospitalsapprove.php">
                    <div class="dash-widget">
                        <span class="dash-widget-bg2"><i class="fa fa-check" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3 class="text-success">
                                <?php echo $fetch4 ?>
                            </h3>
                            <span class="widget-title2">Hospital (Approve) <i class="fa fa-check"
                                    aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="hospitalsreject.php">
                    <div class="dash-widget">
                        <span class="dash-widget-bg2 bg-danger"><i class="fa fa-xmark"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3 class="text-danger">
                                <?php echo $fetch5 ?>
                            </h3>
                            <span class="widget-title2 bg-danger">Hospital (Reject) <i class="fa fa-check"
                                    aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="appointments.php">
                    <div class="dash-widget">
                        <span class="dash-widget-bg3"><i class="fa fa-hospital" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3 class="text-secondary">
                                <?php echo $fetch6 ?>
                            </h3>
                            <span class="widget-title3">Appointment List<i class="fa fa-check"
                                    aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="appointmentsapprove.php">
                    <div class="dash-widget">
                        <span class="dash-widget-bg4 bg-success"><i class="fa fa-check-double"
                                aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3 class="text-success">
                                <?php echo $fetch7 ?>
                            </h3>
                            <span class="widget-title4 bg-success">Appointment (Approve) <i class="fa fa-check"
                                    aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="appointmentsreject.php">
                    <div class="dash-widget">
                        <span class="dash-widget-bg1 bg-danger"><i class="fa fa-user-xmark"
                                aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3 class="text-danger">
                                <?php echo $fetch8 ?>
                            </h3>
                            <span class="widget-title1 bg-danger">Appointment (Reject) <i class="fa fa-check"
                                    aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- cards -->
        </div>
        <?php
        $query1 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
    INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` INNER JOIN `paitent` AS p ON a.`pname` = p.`id` ;
    ");
        if (mysqli_num_rows($query1) > 0) {
            ?>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                    <div class="card member-panel">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Upcoming Appointments</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                           <!-- table -->
                           <table class="table mb-0">
                               <thead class="d-none">
                                        <tr>
                                            <th>Patient Name</th>
                                            <th>Hospital Name</th>
                                            <th>Timing</th>
                                            <th class="text-right">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row1 = mysqli_fetch_assoc($query1)) {
                                            ?>
                                            <tr>
                                                <td style="min-width: 200px;">
                                                    <a class="avatar"><img
                                                            src="<?php echo "../userimg/" . $row1['Image'] ?>"></a>
                                                    <h2>
                                                        <?php echo $row1['Username'] ?> <span>
                                                            <?php echo $row1['City'] ?>
                                                        </span>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <h5 class="time-title p-0">Appointment in</h5>
                                                    <p>
                                                        <?php echo $row1['Hospital Name'] ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <h5 class="time-title p-0">Timing</h5>
                                                    <p>
                                                        <?php echo $row1['Time'] ?>
                                                    </p>
                                                </td>
                                                <td class="text-right">
                                                    <h5 class="time-title p-0">Date</h5>
                                                    <p>
                                                        <?php echo $row1['Date'] ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <?php
                                        }
        }
        ?>
                                </tbody>
                            </table>
                            <!-- table -->
                        </div>
                    </div>
                    <div class="card-footer text-center bg-white">
                        <a href="appointments.php" class="btn btn-primary">View all Appointments</a>
                    </div>
                </div>
            </div>
            <?php
            $hospitalsfetch = "SELECT * FROM `hospital`";
            $query2 = mysqli_query($conn, $hospitalsfetch);
            if (mysqli_num_rows($query2) > 0) {
                ?>





                <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card member-panel">
                        <div class="card-header bg-white">
                            <h4 class="card-title mb-0">Hospitals</h4>
                        </div>
                        <!-- card -->
                        <div class="card-body" style="border-top: 1px solid lightgrey;">
                            <ul class="contact-list">
                                <?php
                                while ($row2 = mysqli_fetch_assoc($query2)) {
                                    ?>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="hospitals.php" title="<?php echo $row2['Hospital Name'] ?>"><img
                                                        src="<?php echo "../Hospital/hospitalimg/" . $row2['Himage'] ?>" alt=""
                                                        class="w-40 rounded-circle" height="40"><span
                                                        class="status online"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">
                                                    <?php echo $row2['Hospital Name'] ?>
                                                </span>
                                                <span class="contact-date">
                                                    <?php echo $row2['Location'] ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- card -->
                    <div class="card-footer text-center bg-white">
                        <a href="hospitals.php" class="btn btn-primary">View all Hospitals</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $querys3 = "SELECT * FROM `paitent`";
        $query3 = mysqli_query($conn, $querys3);
        if (mysqli_num_rows($query3) > 0) {

            ?>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">New Patients </h4> <a href="patients.php"
                            class="btn btn-primary float-right">View all</a>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <!-- table  -->
                                <table class="table mb-0 new-patient-table">
                                    <tbody>
                                        <?php
                                        while ($row3 = mysqli_fetch_assoc($query3)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <img width="28" height="28" class="rounded-circle"
                                                        src="<?php echo "../userimg/" . $row3['Image'] ?>" alt="">
                                                    <h2>
                                                        <?php echo $row3['Username'] ?>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <?php echo $row3['Email'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row3['City'] ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $row3['Area'] ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
        }
        ?>
                                </tbody>
                            </table>
                            <!-- table  -->
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