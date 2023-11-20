<?php
require("../Includes/config.php");
require("../Includes/sidebar.php");
require("../Includes/topbar.php");

$user_id = $_GET['Rid'];
$fetching_pro = "SELECT * 
FROM `readmore`";
$result = mysqli_query($conn, $fetching_pro);
if (!$result) {
    die("Query Failed");
}
if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Reply To User</h1>
            </div>

            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="zain col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="align-items-center justify-content-between">
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                            <form method="post" action="replyback.php" class="form-group">
                                <br>
                                <div class="input-group">
                                    <input type="hidden" name="Rid" value="<?php echo $rows['Rid'] ?>">
                                    <input type="text" name="Rname"  value="<?php echo $rows['Rname'] ?>">
                                    <label for="location">Paitent Name</label>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="Remail"
                                        value="<?php echo $rows['Remail'] ?>">
                                    <label for="Remail">Patient Email</label>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="Rcity" value="<?php echo $rows['Rcity'] ?>">
                                    <label for="Rcity">Patient City</label>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="message" name="Rmessage" value="<?php echo $rows['Rmessage'] ?>">
                                    <label for="Rmessage">Message</label>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="message" name="Rreply" >
                                    <label for="Rreply">Reply</label>
                                </div>
                                <br>
                                <button class="btn btn-register btn-primary btn-block" name="submit"
                                    type="submit">Submit</button>
                            </form>
                            <?php
    }
}
?>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
require("../Includes/hospitalfooter.php");
?>