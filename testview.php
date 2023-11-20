<?php
require("Includes/config.php");
require("Includes/header.php");

if (!isset($_SESSION["email"])) {
    echo '<script> window.location.href="login.php"</script>';
    exit();
}
$username = $_SESSION["email"];

$fetching_pro = "SELECT * FROM `test` AS a 
INNER JOIN `hospital` AS h ON a.`thospital` = h.`id` INNER JOIN `paitent` AS pp ON a.`tname` = pp.`id` WHERE pp.`Email` = '$username';
";
$pro_result = mysqli_query($conn, $fetching_pro);

?>
<section class="page-title-area">
    <div class="container-fluid">
        <div class="page-title-content">
            <h2>Covid-19 Test View</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Covid-19 Test View</li>
            </ul>
        </div>
    </div>
</section>

<section class="appointment-area ptb-100">
    <div class="container-fluid">
        <div class="section-title">
            <span class="sub-title">Covid-19 Test</span>
            <h2>Covid-19 Test View</h2>
        </div>
        <div class="appointment-form col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert-success" id="dose1Alert" style="display: none">
                You are Negative! Downlaod The Report
            </div>
            <div class="alert alert-danger" id="dose2Alert" style="display: none">
                You are Positive ! Downlaod The Report
            </div>
            <div class="alert alert-warning" id="dose3Alert" style="display: none">
                Please Wait! Your Test has been sent to hospital. Please wait for Report .
            </div>
            <div class="table-responsive">
                <table class="table table-warning table-bordered text-center">
                    <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Paitent Name</th>
                            <th scope="col">Hospital Name</th>
                            <th scope="col">Test Date</th>
                            <th scope="col">Test Time</th>
                            <th scope="col">Status</th>
                            <th scope="col">Report</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($pro_result) > 0) {
                            while ($pro_data = mysqli_fetch_assoc($pro_result)) {
                                ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $pro_data['tid'] ?>
                                    </th>
                                    <td>
                                        <?php echo $pro_data['Username'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['Hospital Name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['tdate'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['ttime'] ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_data['tstatus'] ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($pro_data['tstatus'] == "Positive") {
                                            echo "<a class='btn btn-success' href='downloadreport1.php?Report=$pro_data[Report]'>Download Report</a>
                                            ";
                                        } elseif ($pro_data['tstatus'] == "Negative") {
                                            echo "<a class='btn btn-success' href='downloadreport1.php?Report=$pro_data[Report]'>Download Report</a>
                                            
                                        ";
                                        } else {
                                            echo "Pending";
                                        }
                                        ?>
                                    </td>

                                </tr>
                                <?php

                                if ($pro_data['tstatus'] == "Negative") {

                                    echo ' <script>
    // Display Dose 1 Alert
document.getElementById("dose1Alert").style.display = "block";
// Hide Dose 2 Alert
document.getElementById("dose2Alert").style.display = "none";
document.getElementById("dose3Alert").style.display = "none";
</script>';
                                } elseif ($pro_data['tstatus'] == "Positive") {
                                    echo ' <script>
    // Display Dose 1 Alert
document.getElementById("dose1Alert").style.display = "none";
document.getElementById("dose3Alert").style.display = "none";
// Hide Dose 2 Alert
document.getElementById("dose2Alert").style.display = "block";
</script>';
                                } else {
                                    echo ' <script>
                                    // Display Dose 1 Alert
                                document.getElementById("dose1Alert").style.display = "none";
                                document.getElementById("dose2Alert").style.display = "none";
                                // Hide Dose 2 Alert
                                document.getElementById("dose3Alert").style.display = "block";
                                </script>';
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
<?php
include("includes/footer.php");
?>
</body>

</html>