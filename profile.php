<?php
include('includes/header.php');
include('Includes/config.php');

if (!isset($_SESSION["email"])) {
    echo '<script> window.location.href="login.php"</script>';
    exit();
}
$username = $_SESSION["email"];
$query = "SELECT * FROM `paitent` WHERE `Email` = '$username'";
$result = mysqli_query($conn, $query);
$result1 = mysqli_fetch_assoc($result);
// print_r($result1);
// die();

?>
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Profile</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>User Profile Update</li>
            </ul>
        </div>
    </div>
</section>


<section class="appointment-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Profile</span>
            <h2>User Profile Update</h2>
        </div>
        <div class="appointment-form">
            <div class="alert alert-danger" id="dose2Alert" style="display: none">
                Profile Update Failed
            </div>
            <form method="post" action="updateprofile.php" enctype="multipart/form-data" class="form-group">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $result1['id'] ?>">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label for="file">Dp</label>
                            <div id="image-container">
                                <img id="selected-image" src="<?php echo 'userimg/' . $result1['Image'] ?>"
                                    alt="Selected Image" height="100px" width="100px"
                                    style="border-radius: 200px; border:2px solid black;">
                                <button id="change-image" style="display: none;">Change Image</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input type="file" id="image-input" name="img" class="form-control" style="display: none;">
                            <label for="image-input" class="custom-file-upload">
                                Upload Image
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control"
                                value="<?php echo $result1['Username'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="City" class="form-control" value="<?php echo $result1['City'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Area</label>
                            <input type="text" name="area" class="form-control" value="<?php echo $result1['Area'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <button type="submit" class="btn btn-primary" name="submit"><i class="flaticon-plane"></i>
                            Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
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


</script>
<?php
include("includes/footer.php");
?>