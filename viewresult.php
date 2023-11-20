<?php
require("Includes/config.php");
require("Includes/header.php");

if (!isset($_SESSION["email"])) {
    echo '<script> window.location.href="login.php"</script>';
    exit();
}
$username = $_SESSION["email"];

$fetching_pro = "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` INNER JOIN `paitent` AS pp ON a.`pname` = pp.`id` WHERE pp.`Email` = '$username';
";
$pro_result = mysqli_query($conn, $fetching_pro);


?>
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>View Result</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>View Result</li>
            </ul>
        </div>
    </div>
</section>

<section class="appointment-area ptb-100">
    <div class="container-fluid">
        <div class="section-title">
            <span class="sub-title">Result</span>
            <h2>View Result</h2>
        </div>
        <div class="appointment-form col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert-success" id="dose1Alert" style="display: none">
                Your appointment has been Approve! Check View Appointment
            </div>
            <div class="alert alert-danger" id="dose2Alert" style="display: none">
                Sorry! Your Appointment has been Rejected. Please Book an Appointment Again.
            </div>
            <div class="alert alert-warning" id="dose3Alert" style="display: none">
                Please Wait! Your Appointment has been sent to hospital. Please wait for approve .
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
                            <th scope="col">Status</th>
                            <th scope="col">Goto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
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
                                        <?php echo $pro_data['pstatus'] ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($pro_data['pstatus'] == 'Approve') {
                                            echo "<a class='btn btn-success' href='appointmentview.php'>View Appointment</a>";
                                        } elseif ($pro_data['pstatus'] == 'Reject') {
                                            echo "<h3>Sorry</h3>";
                                        } else {
                                            echo "<h4>Please Wait</h4>";
                                        }
                                        ?>
                                    </td>

                                </tr>
                                <?php
                                if ($pro_data['pstatus'] == "Approve") {
                                    echo ' <script>
                                    // Display Dose 1 Alert
    document.getElementById("dose1Alert").style.display = "block";
    // Hide Dose 2 Alert
    document.getElementById("dose2Alert").style.display = "none";
    document.getElementById("dose3Alert").style.display = "none";
    </script>';
                                } elseif ($pro_data['pstatus'] == "Reject") {
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