<?php
session_start();

if (!isset($_SESSION["hospital"])) {
    header('location:hospitallogin.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <title>Covid Test & Vaccination System</title>
    <link rel="stylesheet" href="../assets/css/hospital.css">
    <link rel="icon" type="image/png" href="../assets/img/tt.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../Hospital/hospital/Files/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../Hospital/hospital/Files/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../Hospital/hospital/Files/css/loader.css" rel="stylesheet">

</head>
<div class="mainu">
    <div class="loader" id="loader">
        <img src="../assets/img/tt.png" alt="Virus Loader">
    </div>
</div>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-sharp fa-solid fa-hospital fa-beat-fade"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hospital Dashboard</div>
            </a>


            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Interface
            </div>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-list-ul fa-flip"></i>
                    <span>Hospital Paitent List</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Hospital List</h6>
                        <a class="collapse-item" href="all.php">All</a>
                        <a class="collapse-item" href="approve.php">Approve</a>
                        <a class="collapse-item" href="reject.php">Reject</a>
                        <a class="collapse-item" href="pending.php">Pending</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-virus fa-spin fa-spin-reverse"></i>
                    <span>Covid19 Vaccine Dose 1</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Status:</h6>
                        <a class="collapse-item" href="update.php">Waiting</a>
                        <a class="collapse-item" href="ontheway.php">On the way for <br> Sample Collection</a>
                        <a class="collapse-item" href="samplecollected.php">Sample Collected</a>
                        <a class="collapse-item" href="senttolab.php">Send to Lab</a>
                        <a class="collapse-item" href="reportdelivered.php">Report Delivered</a>
                        <a class="collapse-item" href="alltests.php">All Reports</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fa-solid fa-virus fa-spin fa-spin-reverse"></i>
                    <span>Covid19 Vaccine Dose 2</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Status:</h6>
                        <a class="collapse-item" href="dupdate.php">Waiting</a>
                        <a class="collapse-item" href="dontheway.php">On the way for <br> Sample Collection</a>
                        <a class="collapse-item" href="dsamplecollected.php">Sample Collected</a>
                        <a class="collapse-item" href="dsenttolab.php">Send to Lab</a>
                        <a class="collapse-item" href="ddelivered.php">Report Delivered</a>
                        <a class="collapse-item" href="alltests.php">All Reports</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fa-solid fa-virus fa-spin fa-spin-reverse"></i>
                    <span>Covid19 Test Report</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Status:</h6>
                        <a class="collapse-item" href="positive.php">Positive</a>
                        <a class="collapse-item" href="negative.php">Negative</a>
                        <a class="collapse-item" href="death.php">Death</a>
                        <a class="collapse-item" href="recover.php">Recover</a>
                        <a class="collapse-item" href="covid.php">All Covid Reports</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fa-solid fa-virus fa-spin fa-spin-reverse"></i>
                    <span>Covid19 Vaccine Dose</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Status:</h6>
                        <a class="collapse-item" href="dose1.php">Dose 1</a>
                        <a class="collapse-item" href="dose2.php">Dose 2</a>
                        <a class="collapse-item" href="alldose.php">All Dose Reports</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiess"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Covid-19 Trash</span>
                </a>
                <div id="collapseUtilitiess" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Status:</h6>
                        <a class="collapse-item" href="trashdata.php">Trash</a>
                    </div>
                </div>
            </li>


            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Addons
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="changepassword.php">Change Password</a>
                        <a class="collapse-item" href="profile.php">Profile</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.php">404 Page</a>

                    </div>
                </div>
            </li>
        </ul>