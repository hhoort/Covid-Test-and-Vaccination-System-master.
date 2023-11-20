<?php
require("Includes/config.php");
require("Includes/header.php");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $hname = $_POST["hospitalname"];
    $vaccine = $_POST["vaccine"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    // print_r($_POST);
    // die();
    $insert = "INSERT INTO `appointment` (`pname`, `hospital name`, `vaccine`, `visit date`, `Time`) VALUES ('$name','$hname','$vaccine','$date','$time')";
    $connection_insert = mysqli_query($conn, $insert);
    if ($connection_insert) {
        echo "
        <script>
        alert('Your Appointment Sent to Hospital. Once its checked your appointment will be set as per date and time.')
</script>";
        echo '<script> window.location.href="viewresult.php";</script>';
    } else {
        echo ' <script>
        document.getElementById("dose2Alert").style.display = "block";
        </script>';

    }
}

?>
<section class="page-title-area">
    <div class="container-fluid">
        <div class="page-title-content">
            <h2>Appointment</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Appointment</li>
            </ul>
        </div>
    </div>
</section>


<section class="appointment-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Appointment</span>
            <h2>Book an Appointment</h2>
        </div>
        <div class="appointment-form">
            <div class="alert alert-danger" id="dose2Alert" style="display: none">
                Sorry!Your appointment Was not Sent
            </div>
            <form method="post" action="appointment.php" class="form-group">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Your Name</label>
                            <?php
                            if (!isset($_SESSION["email"])) {
                                echo '<script> window.location.href="login.php"</script>';
                                exit();
                            }
                            $username = $_SESSION["email"];

                            $pname = "SELECT * FROM `paitent` WHERE `Email` ='$username'";
                            $result2 = mysqli_query($conn, $pname);
                            if (mysqli_num_rows($result2) > 0) {
                                ?>
                                <select class=" col-md-12" name="name" aria-label="Default select example">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result2)) {
                                        ?>
                                        <option selected value="<?php echo $row['id'] ?>">
                                            <?php echo $row['Username'] ?>
                                        </option>
                                        <?php
                                    }
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Hospital Name</label>
                            <?php
                            $hospital = "SELECT * FROM `hospital` WHERE `Status` = 'Approve'";
                            $result1 = mysqli_query($conn, $hospital);
                            if (mysqli_num_rows($result1) > 0) {
                                ?>
                                <select class="form-select col-md-12" name="hospitalname"
                                    aria-label="Default select example">
                                    <option selected>Select Hospital Name</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result1)) {
                                        ?>
                                        <option value="<?php echo $row['id'] ?>">
                                            <?php echo $row['Hospital Name'] ?>
                                        </option>
                                        <?php
                                    }
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Vaccine</label>
                            <?php
                            $vaccine = "SELECT * FROM `vaccines` WHERE `status` = 'Available' ";
                            $result = mysqli_query($conn, $vaccine);
                            if (mysqli_num_rows($result) > 0) {
                                ?>
                                <select class="form-select col-md-12" name="vaccine" aria-label="Default select example">
                                    <option selected>Select Vaccine</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <option value="<?php echo $row['id'] ?>">
                                            <?php echo $row['Vaccine'] ?>
                                        </option>
                                        <?php
                                    }
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Visit Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Time</label>
                            <input type="time" name="time" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="btn btn-primary" name="submit"><i class="flaticon-plane"></i>
                            Book
                            Appointment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
include("includes/footer.php");
?>
</body>

</html>