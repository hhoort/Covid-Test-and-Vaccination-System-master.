<?php
require("includes/header1.php");
?>

<div class="main-banner banner-bg3 funfacts-area ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-content">
                    <span class="sub-title">COVID-19</span>
                    <h1>Register</h1>
                    <p>Home | Register</p>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-md-12">
                    <div class="main-banner-image">
                        <img src="assets/img/banner-img3.png" alt="image">
                    </div>
                </div> -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-uppercase text-center mb-3">Create an account</h2>

                    <form action="Register.php" method="post" class="form-group" onsubmit="return validateForm()">
                        <div class="form-outline mb-2">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" name="username" class="form-control form-control-lg" id="username" />
                            <span id="usererror" class="text-danger font-weight-bold"></span>
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" id="email" />
                            <span id="emailerror" class="text-danger font-weight-bold"></span>
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="city">City</label>
                            <input type="text" name="city" class="form-control form-control-lg" id="city" />
                            <span id="cityerror" class="text-danger font-weight-bold"></span>
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="area">Area</label>
                            <input type="text" name="area" class="form-control form-control-lg" id="area" />
                            <span id="areaerror" class="text-danger font-weight-bold"></span>
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password">
                                <button class="btn" style="border:darkgray; background-color:lightgray;" type="button"
                                    id="show-hide-password">
                                    <i class="fa-solid fa-eye fa-spin" id="show-hide-password"></i>
                                </button>
                            </div>
                            <span id="passworderror" class="text-danger font-weight-bold"></span>
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="confirmPassword">Repeat your password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                                <button class="btn" style="border:darkgray; background-color:lightgray;" type="button"
                                    id="show-hide-confirm-password">
                                    <i class="fa-solid fa-eye fa-spin" id="show-hide-confirm-password"></i>
                                </button>
                            </div>
                            <span id="confirmpassworderror" class="text-danger font-weight-bold"></span>
                        </div>

                        <div class="form-check d-flex mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" />
                            <label class="form-check-label" for="checkbox">
                                I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                            </label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"
                                name="submit">Register</button>
                        </div>

                        <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="login.php"
                                class="fw-bold text-body"><u>Login here</u></a></p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
    function validateForm() {
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var city = document.getElementById('city').value;
        var area = document.getElementById('area').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        // Regular expressions for validation
        var usercheck = /^[A-Za-z .]{3,15}$/;
        var emailcheck = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
        var citycheck = /^[A-Za-z\s]+$/;
        var areacheck = /^[A-Za-z\s]+$/;
        var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*].{8,16}$/;
        var cpasswordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*].{8,16}$/;

        if (usercheck.test(username)) {
            document.getElementById('usererror').innerHTML = " ";
        } else {
            document.getElementById('usererror').innerHTML = " Invalid username. Please enter alphabets only. ";
            return false;
        }
        if (emailcheck.test(email)) {
            document.getElementById('emailerror').innerHTML = " ";
        } else {
            document.getElementById('emailerror').innerHTML = " Invalid Email.";
            return false;
        }
        if (citycheck.test(city)) {
            document.getElementById('cityerror').innerHTML = " ";
        } else {
            document.getElementById('cityerror').innerHTML = " Invalid city. Please enter alphabets only. ";
            return false;
        }
        if (areacheck.test(area)) {
            document.getElementById('areaerror').innerHTML = " ";
        } else {
            document.getElementById('areaerror').innerHTML = " Invalid area. Please enter alphabets only. ";
            return false;
        }
        if (passwordcheck.test(password)) {
            document.getElementById('passworderror').innerHTML = " ";
        } else {
            document.getElementById('passworderror').innerHTML = "Password must be at least 9,16 characters long. may include numbers and Special Characters ";
            return false;
        }
        if (cpasswordcheck.test(confirmPassword)) {
            document.getElementById('confirmpassworderror').innerHTML = " ";
        } else {
            document.getElementById('confirmpassworderror').innerHTML = " Invalid ConfirmPassword. Password and confirm password do not match. ";
            return false;
        }
    }
</script>
<?php
require("includes/config.php");

require 'vendor/autoload.php'; // Composer se install kiya hua ho to yeh line add karein
// PHPMailer Integration
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST["submit"])) {
    $name = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $area = mysqli_real_escape_string($conn, $_POST["area"]);
    $pass = mysqli_real_escape_string($conn, $_POST["password"]);
    $cpass = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);

    if ($pass === $cpass) {
        $password = password_hash($pass, PASSWORD_BCRYPT);

        $email_check = "select * from paitent where Email = '$email'";
        $result = mysqli_query($conn, $email_check);
        if (mysqli_num_rows($result) > 0) {
            echo "<script> alert('Email already exists'); </script>";
        } else {
            // User ka email address $user_email variable mein store karein
            $user_email = $email;

            // PHPMailer configuration
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // SMTP server
                $mail->SMTPAuth = true;
                $mail->Username = 'zainsarfraz745@gmail.com'; // Sender's email address
                $mail->Password = 'lkqe avoe gwnx xdcr';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
                $mail->Port = 587; // Port for TLS

                // Recipient settings
                $mail->setFrom('zainsarfraz745@gmail.com', 'Zain');
                $mail->addAddress($user_email, $name); // User ka email address

                // Email content
                $mail->isHTML(true);
                $mail->Subject = 'Welcome to Our Website';
                $mail->Body = 'Thank you for registering on our website.';

                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            $insert_query = "INSERT INTO `paitent` (`Username`, `Email`, `City`, `Area`, `Password`) VALUES ('$name', '$email', '$city', '$area', '$password')";
            $connection_insert = mysqli_query($conn, $insert_query);
            echo '<script> window.location.href="login.php"; </script>';
        }
    } else {
        echo '<script> alert(" Invalid ConfirmPassword. Password and confirm password do not match.")</script>';
    }
}
?>

<?php
require("includes/footer.php");
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
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

</body>

</html>