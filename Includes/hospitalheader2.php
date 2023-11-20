<?php
session_start();

if (isset($_SESSION["hospital"])) {
    header('location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/hospital.css">
    <link rel="stylesheet" href="../assets/css/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hospital Panel</title>
    <link rel="icon" type="image/png" href="../assets/img/tt.png">
</head>

<body>

    <div class="mainu">
        <div class="loader" id="loader">
            <img src="../assets/img/tt.png" alt="Virus Loader">
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        </a>
        <span class="hospital-name"><a class="navbar-brand" href="index.php">
                <img src="../assets/img/logos1.png" alt="Hospital Logo" class="hospital-logo" height="70">
            </a></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Hospitalregister.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hospitallogin.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <script>document.addEventListener("DOMContentLoaded", function () {
            var loader = document.getElementById("loader");
            var content = document.querySelector(".content");

            window.addEventListener("load", function () {
                loader.style.display = "none";
                content.style.display = "block";
            });
        });
    </script>
</body>

</html>