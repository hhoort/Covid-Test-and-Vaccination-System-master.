<?php
include('includes/header.php');
include('includes/config.php');



$hospital = "SELECT * FROM `hospital` WHERE `Status` = 'Approve'";
$conns = mysqli_query($conn, $hospital);
$rows = mysqli_num_rows($conns);

$test = "SELECT `Dstatus` FROM `test`";
$conns1 = mysqli_query($conn, $test);
$rows1 = mysqli_num_rows($conns1);

$death = "SELECT * FROM `test` where `Dstatus` = 'Death'";
$conns2 = mysqli_query($conn, $death);
$rows2 = mysqli_num_rows($conns2);

$recover = "SELECT * FROM `test` where `Dstatus` = 'Recover'";
$conns3 = mysqli_query($conn, $recover);
$rows3 = mysqli_num_rows($conns3);
?>
<section class="page-title-area">
    <div class="container-fluid">
        <div class="page-title-content">
            <h2>Coronavirus Outbreak</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Outbreak</li>
            </ul>
        </div>
    </div>
</section>


<section class="outbreak-area ptb-100">
    <div class="container-fluid">
        <div class="outbreak-content">
            <div class="outbreak-box-list">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-outbreak-box">
                            <div class="icon">
                                <img src="assets/img/icon5.png" alt="icon">
                            </div>
                            <h3 class="odometer">
                                <?php echo $rows ?>
                            </h3>
                            <p>Total Hospital</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-outbreak-box">
                            <div class="icon">
                                <img src="assets/img/icon6.png" alt="icon">
                            </div>
                            <h3 class="odometer">
                                <?php echo $rows1 ?>
                            </h3>
                            <p>ConfirmedCases</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-outbreak-box">
                            <div class="icon">
                                <img src="assets/img/icon7.png" alt="icon">
                            </div>
                            <h3 class="odometer">
                                <?php echo $rows2 ?>
                            </h3>
                            <p>Deaths</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-outbreak-box">
                            <div class="icon">
                                <img src="assets/img/icon8.png" alt="icon">
                            </div>
                            <h3 class="odometer">
                                <?php echo $rows3 ?>
                            </h3>
                            <p>Recovered</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/banner-map.png" alt="image">
        </div>
    </div>
</section>
<?php
include("includes/footer.php");
?>
</body>

</html>