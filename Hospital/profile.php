<?php
require("../Includes/config.php");
require("../Includes/sidebar.php");
require("../Includes/topbar.php");
if (!isset($_SESSION["hospital"])) {
    echo '<script> window.location.href="hospitallogin.php"</script>';
    exit();
}
$username = $_SESSION["hospital"];
$query = "SELECT * FROM `hospital` WHERE `Hospital Name` = '$username'";
$result = mysqli_query($conn, $query);
$result1 = mysqli_fetch_assoc($result);
// print_r($result1);
// die();

?>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hospital Profile</h1>
    </div>

    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="zain col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="align-items-center justify-content-between">
                    <br>
                    <form action="updatehospitalimg.php" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <div id="image-container">
                                <label>Hospital Image</label>
                                <br>
                                <img id="selected-images" src="<?php echo 'hospitalimg/' . $result1['Himage'] ?>"
                                    alt="Selected Image" height="100px" width="100px"
                                    style="border-radius: 200px; border:2px solid black">
                                <button id="change-images" style="display: none;">Change Hospital Image</button>
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="file" id="image-inputs" name="himg" class="form-group">
                            <label for="image-inputs">Hospital Image</label>
                        </div>
                        <br>
                        <button class="btn btn-register btn-primary" name="submits" type="submit"> Update
                            Hospital Image</button>
                    </form>
                    <form method="post" action="updateprofile.php" enctype="multipart/form-data" class="form-group">
                        <br>
                        <input type="hidden" name="id" required value="<?php echo $result1['id'] ?>">
                        <input type="hidden" required value="<?php echo $result1['Hospital Name'] ?>">
                        <br>
                        <div class="input-group">
                            <div id="image-container">
                                <label>Profile Image</label>
                                <br>
                                <img id="selected-image" src="<?php echo 'hospitaluserimg/' . $result1['profileImage'] ?>"
                                    alt="Selected Image" height="100px" width="100px"
                                    style="border-radius: 200px; border:2px solid black">
                                <button id="change-image" style="display: none;">Change Image</button>
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="file" id="image-input" name="img" class="form-group">
                            <label for="image-input">Image</label>
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="text" name="username" required value="<?php echo $result1['username'] ?>">
                            <label for="username">UserName</label>
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="text" name="Location" required value="<?php echo $result1['Location'] ?>">
                            <label for="Address">Location</label>
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="text" name="Address" required value="<?php echo $result1['Address'] ?>">
                            <label for="Address">Address</label>
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="date" name="date" required value="<?php echo $result1['Date'] ?>">
                            <label for="date">Date</label>
                        </div>
                        <br>
                        <button class="btn btn-register btn-primary btn-block" name="submit" type="submit"> Update
                            Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    const imageInput = document.getElementById("image-input");
    const selectedImage = document.getElementById("selected-image");
    const changeImageBtn = document.getElementById("change-image");

    changeImageBtn.addEventListener("click", function () {
        // Trigger the file input click event
        imageInput.click();
    });

    imageInput.addEventListener("change", function (event) {
        const file = event.target.files[0];

        if (file) {
            const imageUrl = URL.createObjectURL(file);
            selectedImage.src = imageUrl;
        }
    });

    const imageInputs = document.getElementById("image-inputs");
    const selectedImages = document.getElementById("selected-images");
    const changeImageBtns = document.getElementById("change-images");

    changeImageBtns.addEventListener("click", function () {
        // Trigger the file input click event
        imageInputs.click();
    });

    imageInputs.addEventListener("change", function (event) {
        const files = event.target.files[0];

        if (files) {
            const imageUrls = URL.createObjectURL(files);
            selectedImages.src = imageUrls;
        }
    });


</script>
<?php
require("../Includes/hospitalfooter.php");
?>