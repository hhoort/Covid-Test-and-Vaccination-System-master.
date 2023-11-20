<?php
require("includes/header1.php");
?>
<div class="main-banner banner-bg2 funfacts-area ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-content">
                    <span class="sub-title">COVID-19</span>
                    <h1>Login</h1>
                    <p>Home | Login</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h2 class="text-uppercase text-center mb-3">Login Your Account</h2>

                    <form action="Login.php" method="post" class="form-group">

                        <div class="form-outline mb-2">
                            <input type="email" name="login_email" class="form-control form-control-lg" required />
                            <label class="form-label" for="email">Email</label>
                        </div>

                        <div class="form-outline mb-2">
                            <div class="input-group">
                                <input type="password" class="form-control" name="login_pass" id="password" required>
                                <button class="btn" style="border:darkgray; background-color:lightgray;" type="button"
                                    id="show-hide-password">
                                    <i class="fa-solid fa-eye fa-flip" id="show-hide-password"></i>
                                </button>
                            </div>
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="form-check d-flex mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" />
                            <label class="form-check-label" for="checkbox">Remeber me
                            </label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                                name="Login">Login</button>
                        </div>

                        <p class="text-center text-muted mt-3 mb-0">Don't have an account? <a href="Register.php"
                                class="fw-bold text-body"><u>Register here</u></a></p>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
require("includes/config.php");

$login = "SELECT `Status` FROM `paitent`";
$get = mysqli_query($conn, $login);
$userStatus = mysqli_fetch_assoc($get)['Status'];
if ($userStatus == 1) {
    if (isset($_POST["Login"])) {
        $login_email = $_POST["login_email"];
        $login_pass = $_POST["login_pass"];

        $login_query = "select * from paitent where Email = '$login_email'";
        $get_from_db = mysqli_query($conn, $login_query);
        if (mysqli_num_rows($get_from_db) > 0) {
            $row = mysqli_fetch_assoc($get_from_db);
            $db_pass = $row['Password'];
            $pass_decode = password_verify($login_pass, $db_pass);
            if ($pass_decode) {
                // session_start();
                $_SESSION["email"] = $row['Email'];
                echo '<script> window.location.href="index.php"; </script>';
            } else {
                echo '<script>alert("Invalid Password"); </script>';
            }
        } else {
        }
    }
} else {
    echo '<script>alert("You Are Not Register"); </script>';
    echo '<script> window.location.href="Register.php"; </script>';
}
?>
<?php
require("includes/footer.php");
?>

</body>

</html>