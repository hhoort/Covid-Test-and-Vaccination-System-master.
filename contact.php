<?php
include('includes/header.php');
require("Includes/config.php");

if (!isset($_SESSION["email"])) {
    echo '<script> window.location.href="login.php"</script>';
    exit();
}
$username = $_SESSION["email"];
$query = mysqli_query($conn, "SELECT * FROM `paitent` WHERE `Email` = '$username'");
$rows = mysqli_fetch_assoc($query);

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $message = $_POST["message"];
    $insert_query = "INSERT INTO `readmore` (`Rname`,`Remail`,`Rcity`, `Rmessage`) VALUES ('$name','$email','$city','$message')";
    $connection_insert = mysqli_query($conn, $insert_query);
    if ($connection_insert) {
        echo '<script> alert("Your Message Has Been Sent Succesfully"); </script>';
    } else {
        echo '<script> alert("Error: ' . mysqli_error($conn) . '"); </script>';
    }
}
?>
<section class="page-title-area">
    <div class="container-fluid">
        <div class="page-title-content">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>


<section class="contact-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <h3>Drop Us A Line</h3>
                    <p>We're happy to answer any questions you have or provide you with an estimate. Just send us a
                        message in the form below with any questions you may have.</p>
                    <div class="row">
                        <form method="post" action="contact.php" class="form-group">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-outline mb-2">
                                    <label>Name <span>*</span></label>
                                    <br>
                                    <input type="text" name="name" class="form-control"
                                        value="<?php echo $rows['Username'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-outline mb-2">
                                    <label>Email <span>*</span></label>
                                    <br>
                                    <input type="email" name="email" class="form-control"
                                        value="<?php echo $rows['Email'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-outline mb-2">
                                    <label>City <span>*</span></label>
                                    <br>
                                    <input type="text" name="city" class="form-control"
                                        value="<?php echo $rows['City'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-outline mb-2">
                                    <label>Your Message <span>*</span></label>
                                    <br>
                                    <textarea name="message" cols="5" rows="8" class="form-control"
                                        placeholder="Write your message..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" name="submit" class="btn  btn-primary"><i
                                        class="flaticon-plane"></i> Send
                                    Message</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <h3>Here to Help</h3>
                    <p>Have a question? You may find an answer in our <a href="faq.php">FAQs</a>. But you can also
                        contact us.</p>
                    <ul class="contact-list">
                        <li><i class="bx bx-map"></i>location:<a
                                href="https://www.google.com/maps/place/Aptech+Computer+Education+North+Nazimabad+Center/@24.9273781,67.02842,17z/data=!3m1!4b1!4m6!3m5!1s0x3eb33f90157042d3:0x93d609e8bec9a880!8m2!3d24.9273733!4d67.0330334!16s%2Fg%2F11xyvbmyb?entry=ttu"
                                target="_blank"> SD-1, Block A North Nazimabad Town, Karachi,
                            </a></li>
                        <li><i class="bx bx-phone-call"></i> Call Us: <a href="tel:(021) 5871 5476">(021) 5871
                                5476</a>
                        </li>
                        <li><i class="bx bx-envelope"></i> Email Us: <a
                                href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfpJnrjGDsfnPkKpsnTKxnHKdhmMDGMHKFFbQRZcvcBstZZfKLMbStmhzhNjDTltkKjrJq"
                                target="_blank">abc@gmail.com</span></a>
                        </li>
                        <li><i class="bx bx-microphone"></i> Fax: <a href="tel:+55 785 4578964">+55 785 4578964</a>
                        </li>
                    </ul>
                    <h3>Opening Hours:</h3>
                    <ul class="opening-hours">
                        <li><span>Monday:</span> 8AM - 6AM</li>
                        <li><span>Tuesday:</span> 8AM - 6AM</li>
                        <li><span>Wednesday:</span> 8AM - 6AM</li>
                        <li><span>Thursday - Friday:</span> 8AM - 6AM</li>
                        <li><span>Saturday - Sunday:</span> 8AM - 6AM </li>
                    </ul>
                    <h3>Follow Us:</h3>
                    <ul class="social">
                        <li><a href="https://www.facebook.com" target="_blank"><i class="bx bxl-facebook"></i></a>
                        </li>
                        <li><a href="https://www.twitter.com" target="_blank"><i class="bx bxl-twitter"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com" target="_blank"><i class="bx bxl-instagram"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </li>
                        <li><a href="https://www.skype.com" target="_blank"><i class="bx bxl-skype"></i></a></li>
                        <li><a href="https://www.pinterest.com" target="_blank"><i class="bx bxl-pinterest-alt"></i></a>
                        </li>
                        <li><a href="https://www.youtube.com" target="_blank"><i class="bx bxl-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// $reply = "SELECT * FROM `readmore` WHERE `Remail` = '$username'";
// $reply1 = mysqli_query($conn, $reply);
// if(mysqli_num_rows($reply1) > 0 ) {
// ?>
<!-- //     <div class="container-fluid mt-1 mb-5"> 
 //     <div class="row" style="justify-content:center ;"> 
 // <?php
 // while ($row = mysqli_fetch_assoc($reply1)) {
//     ?>
//     <div class="col-lg-10 col-md-8 col-sm-12"> 
// <div class="card">
//     <div class="card-body">
//            <h3 class="card-title"><?php echo $row['Remail'] ?></h3> 
//     <h2 class="card-title"><?php echo $row['Rname'] ?></h2>
//     <h5 class="card-text"><?php echo $row['Rcity'] ?></h5>
//     <p class="card-text"><?php echo $row['Rmessage'] ?></p>
//     <span>From Hospital</span>
//     <p class="card-text"><?php echo $row['Rreply'] ?></p>
//     <a href="reply.php?Rid=<" class="btn btn-primary col-lg-12 col-md-12 col-sm-12">Reply</a>
//   </div>
// </div>
// </div>
// <?php
// }}
// ?>
//     </div>
//     </div> -->

<div id="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57890.20566602487!2d66.95681574863282!3d24.927373300000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1697391102112!5m2!1sen!2s"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
include("includes/footer.php");
?>
</body>

</html>