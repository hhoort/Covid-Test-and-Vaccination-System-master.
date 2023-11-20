<?php
// connection
require('../Includes/config.php');
// header
require('../Includes/adminheader.php');

$records_per_page = 3;

// Get the current page number from the URL
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $current_page = intval($_GET['page']);
} else {
    $current_page = 1;
}

// Calculate the starting record for the current page
$start_from = ($current_page - 1) * $records_per_page;

// Perform your database query with pagination
$query = "SELECT * FROM `hospital` WHERE `Status` = 'Approve' LIMIT $start_from, $records_per_page ";
$result = mysqli_query($conn, $query);
?>
<!-- page-wrapper -->
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Approve Hospitals</h4>
            </div>
        </div>
        <div class="row doctor-grid">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <!-- card -->
                <div class="col-md-6 col-sm-12  col-lg-4">
                    <div class="profile-widget">
                        <div class="doctor-img">
                            <a class="avatar"><img alt=""
                                    src="<?php echo "../Hospital/hospitalimg/" . $row['Himage'] ?>"></a>
                        </div>
                        <h4 class="doctor-name text-ellipsis">
                            <?php echo $row['Hospital Name'] ?>
                        </h4>
                        <div class="doc-prof">
                            <?php echo $row['Location'] ?>
                        </div>
                        <div class="user-country">
                            <i class="fa fa-map-marker"></i>
                            <?php echo $row['Address'] ?>
                        </div>
                        <hr>
                        <div>
                            <?php if ($row['Status'] == 'Approve') {
                                echo "<span class='custom-badge status-green col-lg-12'>Approve</span>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- card -->
                <?php
            }
            ?>
            <!-- page-wrapper -->
        </div>
        <?php

        // Calculate the total number of records in the table
        $total_records = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `hospital` WHERE `Status` = 'Approve'"));

        // Calculate the total number of pages
        $total_pages = ceil($total_records / $records_per_page);

        echo "<div class='pagination h-50'>";
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $current_page) {
                echo "<button class='btn btn-primary current-page'>$i</button>";
            } else {
                echo "<button class='btn mx-2'><a href='hospitalsapprove.php?page=$i'>$i</a></button>";
            }
        }
        echo "</div>";

        ?>
        <?php
        require('../Includes/adminfooter.php');
        ?>