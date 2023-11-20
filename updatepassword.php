<?php
require("Includes/header.php");
require("Includes/config.php");

if (!isset($_SESSION["email"])) {
    echo '<script> window.location.href="login.php"</script>';
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];
    $username = $_SESSION["email"];

    $query = "SELECT `Password` FROM `paitent` WHERE `Email` = '$username'";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $dbPassword = $row["Password"];

        if (password_verify($currentPassword, $dbPassword)) {
            if ($newPassword == $confirmPassword) {
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE `Paitent` SET `Password` = '$hashedPassword' WHERE `Email` = '$username'";
                if ($conn->query($updateQuery) === TRUE) {
                    echo ' <script>
                    alert("Password Updated Succesfully");
                    </script>';

                } else {
                    echo ' <script>
                    alert("Error Updating Password")
                    </script>';
                }
            } else {
                echo ' <script>
                alert("New Password And Confirm Password Dosenot Match");
                    </script>';
            }
        } else {
            echo ' <script>
            alert("Current Password Is Incorrect")
                    </script>';
        }
    } else {
        echo ' <script>
                    alert("User Not Found");
                    </script>';
    }
}
?>
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Password</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Change Password</li>
            </ul>
        </div>
    </div>
</section>


<section class="appointment-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Password</span>
            <h2>Change Password</h2>
        </div>
        <div class="appointment-form">
            <form method="post" action="updatepassword.php">
                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="password" name="current_password" value="" class="form-control"
                                    required="true">
                            </div>

                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" name="new_password" value="" class="form-control"
                                    required="true">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" value=""
                                    required="true">

                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="submit"
                                    id="submit">
                            </div>

                        </div>
                    </div>

                </div>



        </div>
        </form>
    </div>
    </div>
</section>



<?php
require("Includes/footer.php");
?>