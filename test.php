<?php
require("Includes/config.php");
require("Includes/header.php");

if (isset($_POST["submit"])) {
    $name = $_POST["tname"];
    $hname = $_POST["thospital"];
    $date = $_POST["tdate"];
    $time = $_POST["ttime"];
    // print_r($_POST);
    // die();
    $insert = "INSERT INTO `test` (`tname`, `thospital`,`tdate`, `ttime`) VALUES ('$name','$hname','$date','$time')";
    $connection_insert = mysqli_query($conn, $insert);
    if ($connection_insert) {
        echo ' <script>
        alert("Your Test Sent To Hospital Succesfully")
        </script>';
        echo '<script> window.location.href="testview.php";</script>';
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
            <h2>Covid Test</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Covid Test</li>
            </ul>
        </div>
    </div>
</section>


<section class="appointment-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Covid Test</span>
            <h2>Book an Covid Test</h2>
        </div>
        <div class="appointment-form">
            <div class="alert alert-success" id="dose2Alert" style="display: none">
                Your Test Was not Sent
            </div>
            <form method="post" action="test.php" class="form-group">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
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
                                <select class=" col-md-12" name="tname" aria-label="Default select example">
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
                                <select class="form-select col-md-12" name="thospital" aria-label="Default select example">
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
                            <label>Visit Date</label>
                            <input type="date" name="tdate" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Time</label>
                            <input type="time" name="ttime" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="btn btn-primary" name="submit"><i class="flaticon-plane"></i>
                            Book
                            Covid Test</button>
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