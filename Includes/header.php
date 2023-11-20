<?php
session_start();

if (!isset($_SESSION["email"])) {
    header('location:login.php');
}
require("config.php");
$username = $_SESSION["email"];
$query = "SELECT * FROM `Paitent` WHERE `Email` = '$username'";
$result = mysqli_query($conn, $query);
$result1 = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Add these lines to include Bootstrap and jQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Hospital/hospital/Files/css/sb-admin-2.css">
    <link rel="stylesheet" href="Hospital/hospital/Files/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/mainsss.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Bootstrap JS -->

    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <title>Covid Test & Vaccination System</title>
    <link rel="icon" type="image/png" href="assets/img/tt.png">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="mainu">
        <div class="loader" id="loader">
            <img src="./assets/img/tt.png" alt="Virus Loader">
        </div>
    </div>

    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <h1 style="margin-left: 20px; color:white;">Search Hospital</h1>
                        <br>
                        <input type="text" id="hospital-search" class="input-search"
                            placeholder="Search for a hospital">
                        <div id="suggestions-container"></div>
                    </form>

                    <div id="hospital-details" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>



    <header class="header-area">

        <div class="top-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <ul class="top-header-social">
                            <li> <a href="https://www.facebook.com" target="_blank"><i class="bx bxl-facebook"></i></a>
                            </li>
                            <li> <a href="https://www.Twitter.com" target="_blank"><i class="bx bxl-twitter"></i></a>
                            </li>
                            <li> <a href="https://www.instagram.com" target="_blank"><i
                                        class="bx bxl-instagram"></i></a>
                            </li>
                            <li><a href="https://www.pinterest.com/" target="_blank"><i
                                        class="bx bxl-pinterest-alt"></i></a></li>
                            <li> <a href="https://www.linkedin.com" target="_blank"><i class="bx bxl-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <ul class="top-header-contact-info">
                            <li><a href="https://www.google.com/maps/place/Aptech+Computer+Education+North+Nazimabad+Center/@24.9273781,67.02842,17z/data=!3m1!4b1!4m6!3m5!1s0x3eb33f90157042d3:0x93d609e8bec9a880!8m2!3d24.9273733!4d67.0330334!16s%2Fg%2F11xyvbmyb?entry=ttu"
                                    target="_blank"><i class="bx bx-map"></i> SD-1, Block A North Nazimabad Town,
                                    Karachi,
                                    74700, Pakistan
                                </a> </li>

                            <li> <a href="tel:(021) 5871 5476"><i class="bx bx-phone-call"></i> Emergancy Helpline:(021)
                                    5871
                                    5476</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-area col-lg-12">
            <div class="cognizance-responsive-nav">
                <div class="container">
                    <div class="cognizance-responsive-menu">
                        <div class="logo">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/img/logos2.png" class="main-logo vh-10" alt="logo" width="200">
                                <img src="assets/img/logos1.png" class="white-logo vh-10" alt="logo" width="200">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cognizance-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logos2.png" class="main-logo vh-10" alt="logo" width="200">
                            <img src="assets/img/logos1.png" class="white-logo vh-10" alt="logo" width="200">
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="index.php" class="nav-link ">Home</a></li>
                                </li>
                                <li class="nav-item"><a href="about-1.php" class="nav-link">About</a></li>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Test<i
                                            class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="test.php" class="nav-link">Covid Test</a></li>
                                        <li class="nav-item"><a href="testview.php" class="nav-link">Covid Test View</a>
                                        </li>
                                        <li class="nav-item"><a href="appointmentview.php" class="nav-link">Appointment
                                                View</a></li>
                                        <li class="nav-item"><a href="viewresult.php" class="nav-link">View Result</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Pages <i
                                            class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="hospital.php" class="nav-link">Hospital</a></li>
                                        <li class="nav-item"><a href="spread.php" class="nav-link">Spreads</a></li>
                                        <li class="nav-item"><a href="out-break.php" class="nav-link">Outbreak</a></li>
                                        <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="single-post.php" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                                <div class="option-item mt-2">
                                    <a href="appointment.php" class="default-btn"><i class="flaticon-open-book"></i>
                                        Appointment</a>
                                </div>
                            </ul>
                            <div class="others-option d-flex align-items-center zains">
                                <div class="option-item">
                                    <div class="search-btn-box">
                                        <i class="search-btn bx bx-search-alt"></i>
                                    </div>
                                </div>
                                <div class="option-item navbar-nav zains col-lg-4">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">
                                            <span>
                                                <?php echo $result1['Username'] ?>
                                            </span>
                                            <img src="<?php echo 'userimg/' . $result1['Image'] ?>" alt="" height="40px"
                                                width="40px" style="border-radius: 200px; border:2px solid black ;">
                                        </a>
                                        <ul class="dropdown-menu zains">
                                            <li class="nav-item"><a href="profile.php" class="nav-link"><i
                                                        class="bx bx-user"></i> My Profile</a></li>
                                            <li class="nav-item"><a href="updatepassword.php" class="nav-link"><i
                                                        class="bx bx-cog"></i> Update Password</a></li>
                                            <li class="nav-item"><a href="logout.php" class="nav-link"><i
                                                        class="bx bx-log-out"></i> Logout</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>