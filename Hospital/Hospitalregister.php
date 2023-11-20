<?php
require("../Includes/hospitalheader2.php");
require("../Includes/config.php");

if (isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $hname = mysqli_real_escape_string($conn, $_POST["hospitalname"]);
    $hlocation = mysqli_real_escape_string($conn, $_POST["location"]);
    $haddress = mysqli_real_escape_string($conn, $_POST["address"]);
    $hdate = mysqli_real_escape_string($conn, $_POST["date"]);
    $hpass = mysqli_real_escape_string($conn, $_POST["password"]);
    $hcpass = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);

    if ($hpass === $hcpass) {

        $hpassword = password_hash($hpass, PASSWORD_BCRYPT);

        $hospital_check = "SELECT * FROM hospital WHERE `Hospital Name` = '$hname'";
        $result = mysqli_query($conn, $hospital_check);
        if (mysqli_num_rows($result) > 0) {
            echo "<script> alert('Hospital already exist'); </script>";
        } else {
            $insert_query = "INSERT INTO `hospital` (`username`,`Hospital Name`, `Location`, `Address`, `Date`, `Password`) VALUES ('$username','$hname', '$hlocation', '$haddress', '$hdate', '$hpassword')";
            $connection_insert = mysqli_query($conn, $insert_query);
            echo '<script> alert("Your Registration has been Succesful")</script>';
            echo '<script>
            window.location.href="hospitallogin.php";
            </script>';

        }
    } else {
        echo '<script> alert("Your ConfirmPassword and Password is incorrect")</script>';
    }
}
;
?>

<div class="container zain">
    <h2 class="text-center">Hospital Registration Panel</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form-group" onsubmit="return validateForm()">
        <div class="input-group">
            <input type="text" name="username" id="username">
            <label for="username">UserName</label>
        </div>
        <span id="usererror" class="text-danger font-weight-bold"></span>
        <br>
        <br>
        <div class="input-group">
            <input type="text" name="hospitalname" id="hospitalname">
            <label for="hospitalName">Hospital Name</label>
        </div>
        <span id="hospitalerror" class="text-danger font-weight-bold"></span>
        <br>
        <br>
        <div class="input-group">
            <input type="text" name="location">
            <label for="location">Location</label>
        </div>
        <br>
        <div class="input-group">
            <input type="text" name="address">
            <label for="address">Address</label>
        </div>
        <br>
        <div class="input-group">
            <input type="date" name="date">
            <label for="date">Date</label>
        </div>
        <br>
        <div class="input-group">
            <input type="password" name="password" id="password">
            <label for="password">Password</label>
            <span class="toggle-password">
                <i class="fas fa-eye" id="password-toggle"></i>
            </span>
            <span id="passworderror" class="text-danger font-weight-bold"></span>
        </div>
        <br>
        <div class="input-group">
            <input type="password" name="confirmPassword" id="confirmPassword">
            <label for="confirmPassword">Confirm Password</label>
            <span class="toggle-password">
                <i class="fas fa-eye" id="confirmPassword-toggle"></i>
            </span>
            <span id="confirmpassworderror" class="text-danger font-weight-bold"></span>
        </div>

        <br>
        <button class="btn btn-register btn-block" name="submit" type="submit">Register</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../assets/js/hospital.js"></script>
<script>
    function validateForm() {
        var username = document.getElementById('username').value;
        var hospitalname = document.getElementById('hospitalname').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        // Regular expressions for validation
        var usercheck = /^[A-Za-z .]{3,15}$/;
        var hospitalcheck = /^[A-Za-z\s]+$/;
        var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*].{8,16}$/;
        var cpasswordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*].{8,16}$/;

        if (usercheck.test(username)) {
            document.getElementById('usererror').innerHTML = " ";
        } else {
            document.getElementById('usererror').innerHTML = " Invalid username. Please enter alphabets only. ";
            return false;
        }

        if (hospitalcheck.test(hospitalname)) {
            document.getElementById('hospitalerror').innerHTML = " ";
        } else {
            document.getElementById('hospitalerror').innerHTML = " Invalid Hospital. Please enter alphabets only. ";
            return false;
        }

        if (passwordcheck.test(password)) {
            document.getElementById('passworderror').innerHTML = " ";
        } else {
            document.getElementById('passworderror').innerHTML = "Password must be at least 9,16 characters long. may include numbers and Special Characters. ";
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
</body>

</html>