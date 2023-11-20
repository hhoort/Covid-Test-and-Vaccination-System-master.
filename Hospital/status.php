<?php
require("../Includes/config.php");
require("../Includes/sidebar.php");
require("../Includes/topbar.php");

$user_id = $_GET['tid'];
$fetching_pro = "SELECT * FROM `test` AS a 
INNER JOIN `hospital` AS h ON a.`thospital` = h.`id` INNER JOIN `paitent` AS pp ON a.`tname` = pp.`id` WHERE `tstatus` = 'Positive';
";
?>

<div class="container-fluid">
    
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Covid</h1>
</div>

            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="zain col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="align-items-center justify-content-between">
<?php
$result = mysqli_query($conn, $fetching_pro);
if (!$result) {
    die("Query Failed");
}
if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
                            <form method="post" action="details6.php" enctype="multipart/form-data" class="form-group">
                                <br>
                                <div class="input-group">
                                    <input type="hidden" name="tid" value="<?php echo $rows['tid'] ?>">
                                    <input type="text" name="username" required value="<?php echo $rows['Username'] ?>">
                                    <label for="username">Paitent Name</label>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="hospitalname" required
                                        value="<?php echo $rows['Hospital Name'] ?>">
                                    <label for="hospitalName">Hospital Name</label>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="time" name="ttime" required value="<?php echo $rows['ttime'] ?>">
                                    <label for="time">Time</label>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="date" name="tdate" required value="<?php echo $rows['tdate'] ?>">
                                    <label for="tdate">Date</label>
                                </div>
                                <br>
                                <label for="dstatus" style="color:#3498db;">Patient Status</label>
                                <div class="input-group">
                                    <select name="dstatus" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                                        <option value="Pending" selected>Select paitent Status</option>
                                        <option value="Death">Death</option>
                                        <option value="Recover">Recover</option>
                                    </select>
                                </div>
                                <br>
                                <label for="tstatus" style="color:#3498db;">Test Status</label>
                                <div class="input-group">
                                    <select name="tstatus" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center" id="statusSelect">
                                        <option value="Pending" selected>Select Test Status</option>
                                        <option value="Positive">Positive</option>
                                        <option id="delivered" value="Negative">Negative</option>
                                    </select>
                                </div>
                                <br>
                                                                <!-- Hidden file input field initially -->
                                                                <div id="fileInputWrapper" style="display: none;">
                                    <div class="input-group">
                                        <input type="file" name="deliveryFile" required accept=".pdf, .doc, .docx, .xls, .xlsx">
                                        <label for="deliveryFile">Upload Delivery File (PDF, Word, or Excel)</label>
                                    </div>
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
<script>
    document.getElementById('statusSelect').addEventListener('change', function () {
        var fileInputWrapper = document.getElementById('fileInputWrapper');
        var selectedOption = this.options[this.selectedIndex];

        if (selectedOption.id === 'delivered') {
            fileInputWrapper.style.display = 'block';
        } else {
            fileInputWrapper.style.display = 'none';
        }
    });
</script>
<?php
require("../Includes/hospitalfooter.php");
?>