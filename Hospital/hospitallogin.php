<?php
// print_r($userStatus);
// die();
require("../Includes/hospitalheader2.php");
require("../Includes/config.php");
if (isset($_POST["submit"])) {

    $hospital_name = $_POST["hospital_name"];
    $hospital_password = $_POST["hospital_password"];

    $fetching = "SELECT * FROM hospital where `Hospital Name` = '$hospital_name'";
    $userstatus = mysqli_query($conn, $fetching);
    if (mysqli_num_rows($userstatus) > 0) {
        $row = mysqli_fetch_assoc($userstatus);
        $db_status = $row['Status'];
        $db_pass = $row['Password'];
        $pass_decode = password_verify($hospital_password, $db_pass);
        if ($pass_decode) {
            if ($db_status == "Approve") {
                $_SESSION["hospital"] = $row['Hospital Name'];
                $_SESSION["status"] = $row['Status'];
                echo '<script>alert("Welcome to our Website"); </script>';
                echo '<script> window.location.href="index.php"; </script>';
            }
        } else {
            echo '<script>alert("Invalid Password"); </script>';
        }
        if ($db_status == "Pending") {
            echo '<script>alert("Your request is pending. You can log in once its approved."); </script>';
        } else {
            echo '<script>alert("Sorry, your request has been rejected. You cannot log in."); </script>';
        }
    } else {
        echo '<script>alert("Invalid Username"); </script>';

    }
}

?>

<div class="container zain mt-5">
    <h2 class="text-center">Hospital Login Panel</h2>
    <br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form-group">
        <div class="input-group">
            <input type="text" name="hospital_name" required>
            <label for="hospitalName">Hospital Name</label>
        </div>
        <br>
        <div class="input-group">
            <input type="password" name="hospital_password" required id="password">
            <label for="password">Password</label>
            <span class="toggle-password">
                <i class="fas fa-eye" id="password-toggle"></i>
            </span>
        </div>
        <br>
        <button class="btn btn-register btn-block" name="submit" type="submit">login</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../assets/js/hospital.js"></script>
</body>

</html>