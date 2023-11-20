<?php
// SESSION
include("sessionlogin.php");
?>
<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <title>Admin Panel</title>
    <link rel="icon" type="image/png" href="../assets/img/tt.png">
</head>

<body>

    <!-- LOGIN FORM START -->
    <div class="loginBox">
        <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Admin Login </h3>
        <form action="adminlogin.php" method="post" class="form-group">
            <div class="inputBox">
                <input id="uname" type="text" name="Username" class="form-control" placeholder="Username">
                <input id="pass" type="password" name="Password" class="form-control" placeholder="Password">
            </div>
            <input type="submit" name="Admin" value="Login">
        </form>
        <a href="#">Forget Password<br> </a>
    </div>
    <!-- LOGIN FORM END -->

    <?php
    // CONNECTION
    include('../includes/config.php');
    // LOGIN PHP START
    if (isset($_POST['Admin'])) {
        $uname = $_POST['Username'];
        $Password = $_POST['Password'];
        $query = "SELECT * FROM `admin` WHERE `Username`='$uname' AND `Password` = '$Password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $ret = mysqli_fetch_assoc($result);
            $_SESSION['aid'] = $ret['id'];
            echo '<script> window.location.href="index.php"; </script>';
        } else {
            echo "<script>alert('Invalid Details.');</script>";
        }
    }
    // LOGIN PHP END
    ?>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/ajaxchimp.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>