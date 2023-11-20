<?php
require("../Includes/config.php");
require("../Includes/sidebar.php");
require("../Includes/topbar.php");


?>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <?php

    $query1 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id`;
");
    $patientlistall = mysqli_num_rows($query1);

    $query2 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` WHERE a.`PStatus` = 'Approve';
");
    $patientlistal2 = mysqli_num_rows($query2);

    $query3 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Reject';
");
    $patientlistal3 = mysqli_num_rows($query3);

    $query4 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Pending';
");
    $patientlistal4 = mysqli_num_rows($query4);

    $query5 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1';
");
    $patientlistal5 = mysqli_num_rows($query5);

    $query6 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`PStatus3` = 'Waiting';
");
    $patientlistal6 = mysqli_num_rows($query6);

    $query66 = mysqli_query(
        $conn,
        "SELECT * 
FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` 
INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` 
WHERE a.`PStatus` = 'Approve' 
  AND a.`Status2` = '1' 
  AND a.`PStatus33` = 'Waiting' 
  AND a.`Dose` = 'First';
"
    );
    $patientlistal66 = mysqli_num_rows($query66);

    $query7 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`PStatus3` = 'On The Way For Sample Collection';
");
    $patientlistal7 = mysqli_num_rows($query7);

    $query77 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`PStatus33` = 'On The Way For Sample Collection' AND a.`Dose` = 'First';
");
    $patientlistal77 = mysqli_num_rows($query77);

    $query8 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`PStatus3` = 'Sample Collected';
");
    $patientlistal8 = mysqli_num_rows($query8);

    $query88 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`PStatus33` = 'Sample Collected' AND a.`Dose` = 'First';
");
    $patientlistal88 = mysqli_num_rows($query88);

    $query9 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`PStatus3` = 'Sent To Lab';
");
    $patientlistal9 = mysqli_num_rows($query9);

    $query99 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`PStatus33` = 'Sent To Lab' AND a.`Dose` = 'First';
");
    $patientlistal99 = mysqli_num_rows($query99);

    $query10 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`PStatus3` = 'Delivered' AND a.`Dose` = 'First';
");
    $patientlistal10 = mysqli_num_rows($query10);

    $query110 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`PStatus33` = 'Delivered' AND a.`Dose` = 'Second';
");
    $patientlistal110 = mysqli_num_rows($query110);
    // test
    $query11 = mysqli_query($conn, "SELECT * FROM `test` AS a 
INNER JOIN `hospital` AS h ON a.`thospital` = h.`id`;
");
    $patientlistal11 = mysqli_num_rows($query11);

    $query12 = mysqli_query($conn, "SELECT * FROM `test` AS a 
INNER JOIN `hospital` AS h ON a.`thospital` = h.`id` where a.`tstatus` = 'Positive';
");
    $patientlistal12 = mysqli_num_rows($query12);

    $query13 = mysqli_query($conn, "SELECT * FROM `test` AS a 
INNER JOIN `hospital` AS h ON a.`thospital` = h.`id` where a.`tstatus` = 'Negative';
");
    $patientlistal13 = mysqli_num_rows($query13);
    // dose
    
    $query14 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
    INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1';
    ");
    $patientlistal14 = mysqli_num_rows($query14);

    $query15 = mysqli_query($conn, "SELECT * 
    FROM `appointment` AS a 
    INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` 
    INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` 
    INNER JOIN `paitent` AS pp ON a.`pname` = pp.`id` 
    WHERE a.`PStatus` = 'Approve' 
      AND a.`Status2` = '1' 
      AND a.`PStatus3` = 'Delivered' 
      AND a.`Dose` = 'First';
    ");
    $patientlistal15 = mysqli_num_rows($query15);

    $query16 = mysqli_query($conn, "SELECT * FROM `appointment` AS a 
    INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`PStatus33` = 'Delivered' and a.`Dose` = 'Second';
    ");
    $patientlistal16 = mysqli_num_rows($query16);

    $query17 = mysqli_query($conn, "SELECT * FROM `test` Where `Dstatus` = 'Death';
    ");
    $patientlistal17 = mysqli_num_rows($query17);

    $query18 = mysqli_query($conn, "SELECT * FROM `test` Where `Dstatus` = 'Recover';
    ");
    $patientlistal18 = mysqli_num_rows($query18);

    ?>
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="all.php">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold  text-primary text-uppercase mb-1"
                                    style="color: blue !important;">
                                    Patient List (All)</div>
                                <div class="h5 mb-0 font-weight-bold" style="color: blue !important;">
                                    <?php echo $patientlistall ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list fa-2x" style="color: blue !important;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="approve.php">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"
                                    style="color:lightgreen !important;">
                                    Paitent List (Approve)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"
                                    style="color:lightgreen !important;">
                                    <?php echo $patientlistal2 ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check fa-2x" style="color:lightgreen;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="reject.php">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1"
                                    style="color:red !important;">
                                    Paitent List (Reject)
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"
                                            style="color:red !important;">
                                            <?php echo $patientlistal3 ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-circle-xmark fa-2x" style="color: red;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="pending.php">
                <div class="card border-left-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"
                                    style="color:black !important;">
                                    Paitent List (Pending)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="color:black !important;">
                                    <?php echo $patientlistal4 ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-circle-pause fa-2x" style="color: black;"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="covid.php">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                                    style="color:gold !important;">
                                    Covid-19 Test (All)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="color:gold !important;">
                                    <?php echo $patientlistal11 ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list-check fa-2x mt-3" style="color: gold;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="positive.php">
                <div class="card border-left-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"
                                    style="color:black !important;">
                                    Covid-19 Test (Positive)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="color:black !important;">
                                    <?php echo $patientlistal12 ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-stopwatch-20 fa-2x mt-3" style="color:black;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="negative.php">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Covid-19 Test (Negative)
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 text-info font-weight-bold">
                                            <?php echo $patientlistal13 ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-person-biking fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="alltests.php">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                                    style="color:gold !important;">
                                    Covid-19 Vaccince (All)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="color:gold !important;">
                                    <?php echo $patientlistal5 ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list-check fa-2x mt-3" style="color: gold;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"
                                style="color:black !important;">
                                Covid-19 Vaccince (Waiting)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="color:black !important;">
                                <a href="update.php" style="color:black ;">
                                    <?php echo $patientlistal6 ?> Dose 1
                                </a>
                                <br>
                                <a href="dupdate.php" style="color:black ;">
                                    <?php echo $patientlistal66 ?> Dose 2
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-stopwatch-20 fa-2x mt-3" style="color:black;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Covid-19 Vaccince (On The Way For Sample Collection)
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 text-info font-weight-bold">
                                        <a href="ontheway.php" class="text-info">
                                            <?php echo $patientlistal7 ?> Dose 1
                                        </a>
                                        <br>
                                        <a href="dontheway.php" class="text-info">
                                            <?php echo $patientlistal77 ?> Dose 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-person-biking fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Covid-19 Vaccince (Sample Collected)</div>
                            <div class="h5 mb-0 font-weight-bold text-danger">
                                <a href="samplecollected.php" class="text-danger">
                                    <?php echo $patientlistal8 ?> Dose 1
                                </a>
                                <br>
                                <a href="dsamplecollected.php" class="text-danger">
                                    <?php echo $patientlistal88 ?> Dose 2
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-vial-virus fa-2x mt-3" style="color:red;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Covid-19 Vaccince (Sent To lab)
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-info">
                                        <a href="senttolab.php" class="text-info">
                                            <?php echo $patientlistal9 ?> Dose 1
                                        </a>
                                        <br>
                                        <a href="dsenttolab.php" class="text-info">
                                            <?php echo $patientlistal99 ?> Dose 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-flask fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Covid-19 Vaccince (Report Delivered)</div>
                            <div class="h5 mb-0 font-weight-bold text-danger">
                                <a href="reportdelivered.php" class="text-danger">
                                    <?php echo $patientlistal10 ?> Dose 1
                                </a>
                                <br>
                                <a href="ddelivered.php" class="text-danger">
                                    <?php echo $patientlistal110 ?> Dose 2
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck fa-2x" style="color:brown;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <a href="alldose.php">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Covid-19 Vaccine (All)</div>
                                <div class="h5 mb-0 font-weight-bold text-danger">
                                    <?php echo $patientlistal14 ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-vial-virus fa-2x mt-3" style="color:red;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- death and recover -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="dose1.php">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Covid-19 Vaccine (Dose 1)
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-info">
                                            <?php echo $patientlistal15 ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-flask fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="dose2.php">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Covid-19 Vaccine (Dose 2)</div>
                                <div class="h5 mb-0 font-weight-bold text-danger">
                                    <?php echo $patientlistal16 ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-truck fa-2x" style="color:brown;"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </a>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="death.php">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Covid-19 (Death)
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-info">
                                            <?php echo $patientlistal17 ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-flask fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="recover.php">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Covid-19 (Recover)</div>
                                <div class="h5 mb-0 font-weight-bold text-danger">
                                    <?php echo $patientlistal18 ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-truck fa-2x" style="color:brown;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php
require("../Includes/hospitalfooter.php");
?>