<?php
require("../Includes/config.php");
require("../Includes/sidebar.php");
require("../Includes/topbar.php");

if (!isset($_SESSION["hospital"])) {
    echo '<script> window.location.href="hospitallogin.php"</script>';
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];
    $username = $_SESSION["hospital"];

    $query = "SELECT `Password` FROM `hospital` WHERE `Hospital Name` = '$username'";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $dbPassword = $row["Password"];

        if (password_verify($currentPassword, $dbPassword)) {
            if ($newPassword == $confirmPassword) {
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE `hospital` SET `Password` = '$hashedPassword' WHERE `Hospital Name` = '$username'";
                if ($conn->query($updateQuery) === TRUE) {
                    echo '<script> alert("Password change successful") </script>';
                } else {
                    echo '<script> alert("Error Changing Password "). $conn->error </script>';
                }
            } else {
                echo '<script> alert("New Password And Confirm Password do not match") </script>';
            }
        } else {
            echo '<script> alert("Current Password is incorrect") </script>';
        }
    } else {
        echo '<script> alert("User Not Fount") </script>';
    }
}
?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Change Password</h1>
    <form method="post" action="changepassword.php">
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="password" name="current_password" value="" class="form-control"
                                required="true">
                            <label>Current Password</label>
                        </div>

                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="new_password" value="" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" value=""
                                required="true">

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
                        </div>

                    </div>
                </div>

            </div>



        </div>
    </form>
</div>
<?php
require("../Includes/hospitalfooter.php");
?>