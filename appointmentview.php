<?php
require("Includes/config.php");
require("Includes/header.php");

if (!isset($_SESSION["email"])) {
    echo '<script> window.location.href="login.php"</script>';
    exit();
}
$username = $_SESSION["email"];

$fetching_pro = "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` INNER JOIN `paitent` AS pp ON a.`pname` = pp.`id` WHERE pp.`Email` = '$username' AND a.`pstatus` = 'Approve';
";
$pro_result = mysqli_query($conn, $fetching_pro);

?>
<section class="page-title-area">
    <div class="container-fluid">
        <div class="page-title-content">
            <h2>Appointment View</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Appointment View</li>
            </ul>
        </div>
    </div>
</section>

<!-- ... (Previous HTML code) ... -->

<section class="appointment-area ptb-100">
    <div class="container-fluid">
        <div class="section-title">
            <span class="sub-title">Appointment</span>
            <h2>Appointment View</h2>
        </div>
        <div class="appointment-form">
            <div class="alert alert-success" id="dose1Alert" style="display: none">
                Dose 1 Report Ready
            </div>
            <div class="alert alert-success" id="dose2Alert" style="display: none">
                Dose 2 Report Ready
            </div>
            <div class="alert alert-success" id="dose3Alert" style="display: none">
                Please Wait For Report
            </div>

            <div class="table-responsive">
                <table class="table table-warning table-bordered text-center">
                    <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Paitent Name</th>
                            <th scope="col">Hospital Name</th>
                            <th scope="col">Vaccine</th>
                            <th scope="col">Apointent Date</th>
                            <th scope="col">Apointent Time</th>
                            <th scope="col">Dose</th>
                            <th scope="col">Dose Status</th>
                            <th scope="col">Dose Status</th>
                            <th scope="col">Dose 1 Report</th>
                            <th scope="col">Dose 2 Report</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $dose1ReportDisplayed = false;
                        $dose2ReportDisplayed = false;
                        $dose3ReportDisplayed = false;

                        if (mysqli_num_rows($pro_result) > 0) {
                            while ($pro_data = mysqli_fetch_assoc($pro_result)) {
                                ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $pro_data['pid'] ?>
                                    </th>
                                    <td>
                                        <?php echo $pro_data['Username'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['Hospital Name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['Vaccine'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['visit date'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['Time'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['Dose'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['PStatus3'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['PStatus33'] ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($pro_data['PStatus3'] == "Delivered") {
                                            echo "<a class='btn btn-success' href='downloadreport2.php?Report=$pro_data[Report] '>Download Report</a>";
                                        } else {
                                            echo "Wait For Report";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($pro_data['PStatus33'] == "Delivered") {
                                            echo "<a class='btn btn-success' href='downloadreport2.php?Report=$pro_data[Report] '>Download Report</a>";
                                        } else {
                                            echo "Wait For Report";
                                        } ?>
                                    </td>
                                </tr>
                                <?php
                                if ($pro_data['PStatus3'] == "Delivered" && !$dose1ReportDisplayed) {
                                    echo '<script>
    // Display Dose 1 Alert
    document.getElementById("dose1Alert").style.display = "block";
    // Hide Dose 2 Alert
    document.getElementById("dose2Alert").style.display = "none";
    document.getElementById("dose3Alert").style.display = "none";
    </script>';
                                    $dose1ReportDisplayed = true;
                                }
                                if ($pro_data['PStatus33'] == "Delivered" && !$dose2ReportDisplayed) {
                                    echo '<script>
    // Display Dose 2 Alert
    document.getElementById("dose2Alert").style.display = "block";
    // Hide Dose 1 Alert
    // document.getElementById("dose3lert").style.display = "none";
    document.getElementById("dose1Alert").style.display = "none";
    </script>';
                                    $dose2ReportDisplayed = true;
                                } elseif ($pro_data['PStatus33'] . $pro_data['PStatus3'] == "Delivered" && !$dose3ReportDisplayed) {
                                    echo ' <script>
                                    // Display Dose 2 Alert
                                    document.getElementById("dose2Alert").style.display = "none";
                                    document.getElementById("dose3Alert").style.display = "block";
                                    // Hide Dose 1 Alert
                                    document.getElementById("dose1Alert").style.display = "none";
                                    </script>';
                                    $dose3ReportDisplayed = true;
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- ... (Remaining HTML code) ... -->
<?php
include("includes/footer.php");
?>
</body>

</html>