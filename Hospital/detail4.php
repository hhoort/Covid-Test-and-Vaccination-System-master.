<?php
require("../Includes/config.php");
require("../Includes/sidebar.php");
require("../Includes/topbar.php");

$user_id = $_GET['pid'];
$fetching_pro = "SELECT * 
FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` 
INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` 
WHERE a.`pid` = '$user_id' AND a.`Status2` = '1' AND a.`PStatus33` = 'Waiting' AND a.`Dose` = 'First';";
$result = mysqli_query($conn, $fetching_pro);
if (!$result) {
    die("Query Failed");
}
if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Update Waiting Report</h1>
            </div>

            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="zain col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="align-items-center justify-content-between">
                            <form method="post" action="details1.php" enctype="multipart/form-data" class="form-group">
                                <br>
                                <div class="input-group">
                                    <input type="hidden" name="pid" value="<?php echo $rows['pid'] ?>">
                                    <input type="text" name="pname" required value="<?php echo $rows['pname'] ?>">
                                    <label for="location">Paitent Name</label>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="hospitalname" required
                                        value="<?php echo $rows['Hospital Name'] ?>">
                                    <label for="hospitalName">Hospital Name</label>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="text" name="Vaccine" required value="<?php echo $rows['Vaccine'] ?>">
                                    <label for="location">Vaccine</label>
                                </div>
                                <br>
                                <div class="input-group">
                                    <input type="date" name="date" required value="<?php echo $rows['visit date'] ?>">
                                    <label for="date">Date</label>
                                </div>
                                <br>
                                <label for="pstatus33" style="color:#3498db;">Status</label>
                                <div class="input-group">
                                    <select name="pstatus33" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center"
                                        id="statusSelect">
                                        <option value="Waiting" selected>Select Status</option>
                                        <option value="On The Way For Sample Collection">On The Way For Sample Collection
                                        </option>
                                        <option value="Sample Collected">Sample Collected</option>
                                        <option value="Sent To Lab">Sent To Lab</option>
                                        <option id="delivered" value="Delivered">Delivered</option>
                                    </select>
                                </div>
                                <br>

                                <!-- Hidden file input field initially -->
                                <div id="fileInputWrapper" style="display: none;">
                                    <div class="input-group">
                                        <input type="file" name="deliveryFile" accept=".pdf, .doc, .docx, .xls, .xlsx">
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