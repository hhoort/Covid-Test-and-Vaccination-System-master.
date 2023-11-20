<?php
session_start();
include_once('../includes/config.php');
if (!isset($_SESSION['aid'])) {
    header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Covid Test & Vaccination System</title>
    <link rel="stylesheet" type="text/css" href="../Admin Panel/assets/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="../Admin Panel/assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../Admin Panel/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../Admin Panel/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../Admin Panel/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../Admin Panel/assets/css/style.css">
    <link rel="icon" type="image/png" href="../assets/img/tt.png">
    <link rel="stylesheet" href="../assets/css/loader.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="mainu">
            <div class="loader" id="loader">
                <img src="../assets/img/tt.png" alt="Virus Loader">
            </div>
        </div>
        <div class="header">
            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="../assets/img/tt.png" width="50" height="50" alt=""> <span>COVID-19</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <?php
                    require('../Includes/config.php');

                    $username = $_SESSION['aid'];


                    $pro = "SELECT * FROM `admin` WHERE `id` = '$username'";
                    $pros = mysqli_query($conn, $pro);
                    if (mysqli_num_rows($pros) > 0) {
                        $row = mysqli_fetch_array($pros)
                            ?>
                        <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                            <span class="user-img">
                                <img class="rounded-circle" src="<?php echo 'AdminUserProfile/' . $row['Image'] ?>"
                                    width="24" alt="Admin">
                                <span class="status online"></span>
                            </span>
                            <span>
                                <?php echo $row['Username'] ?>
                            </span>
                        </a>
                        <?php
                    }
                    ?>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="adminlogout.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                        class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>

                        <li class="active">
                            <a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="patients.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="vaccine.php"><i class="fa fa-virus"></i> <span>Vaccine</span></a>
                        </li>
                        <li>
                            <a href="covidtest.php"><i class="fa fa-vial-virus"></i> <span>COVID-19 Test</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-calendar"></i> <span>Appointments</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="appointments.php">Appointments</a></li>
                                <li><a href="appointmentsapprove.php">Appointments Approve</a></li>
                                <li><a href="appointmentsreject.php">Appointments Reject</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-user-md"></i> <span>Hospitals</span><span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="Hospitals.php">Hospitals</a></li>
                                <li><a href="Hospitalsapprove.php">Hospitals Approve</a></li>
                                <li><a href="Hospitalsreject.php">Hospitals Reject</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Extras</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="change-password.php"> Change Password </a></li>
                                <li><a href="profile.php"> Profile </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>