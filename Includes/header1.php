<?php
session_start();

if (isset($_SESSION["email"])) {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
    <link rel="stylesheet" href="assets/css/loader.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/Registers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Covid Test & Vaccination System</title>
    <link rel="icon" type="image/png" href="assets/img/tt.png">
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
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class="bx bx-search-alt"></i></button>
                    </form>
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


        <div class="navbar-area">
            <div class="cognizance-responsive-nav">
                <div class="container-fluid">
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
                                <li class="nav-item"><a href="Register.php" class="nav-link">Signup</a></li>
                                <li class="nav-item"><a href="login.php" class="nav-link">login</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>