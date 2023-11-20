<?php
include('includes/header.php');
require('Includes/config.php');

// Define the number of records to display per page
$records_per_page = 3;

// Get the current page number from the URL
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $current_page = intval($_GET['page']);
} else {
    $current_page = 1;
}

// Calculate the starting record for the current page
$start_from = ($current_page - 1) * $records_per_page;

// Perform your database query with pagination
$query = "SELECT * FROM hospital  WHERE `Status` = 'Approve' LIMIT $start_from, $records_per_page";
$result = mysqli_query($conn, $query);
?>
<style>
    .card {
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 20px 10px 4px rgba(0, 0, 0, 0.1);
    }

    /* Style the card image */
    .card-img-top {
        max-height: 350px;
        object-fit: cover;
    }

    /* Style the card title */
    .card-title {
        font-size: 1.5rem;
        color: #333;
        font-weight: bold;
    }

    /* Style the card text */
    .card-text {
        color: #555;
    }

    /* Style the appointment button */
    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
    }

    /* Add some spacing and center the cards */
    .row {
        justify-content: space-evenly;
        margin-top: 20px;
    }

    .card {
        margin: 0 10px;
    }

    /* Media queries for responsiveness */
    @media (max-width: 768px) {
        .card {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 576px) {
        .card {
            width: 100%;
        }
    }
</style>

<section class="page-title-area">
    <div class="container-fluid">
        <div class="page-title-content">
            <h2>Hospitals</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Hospitals</li>
            </ul>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row justify-content-around">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card col-lg-3 col-md-6 col-sm-12 mt-5">
                <img class="card-img-top mt-2" src="<?php echo 'Hospital/hospitalimg/' . $row['Himage'] ?>"
                    alt="Card image cap" style="min-height: 350px;">
                <div class="card-body">
                    <p class="card-title text-primary" style="font-size: x-large;">
                        <?php echo $row['Hospital Name'] ?>
                    </p>
                    <p class="card-text text-dark">
                        <?php echo $row['Location'] ?>
                    </p>
                    <a href="appointment.php" class="btn btn-primary">Appointment</a>
                </div>
            </div>
            <?php
        }
        ?>
        <?php
        // Calculate the total number of records in the table
        $total_records = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM hospital  WHERE `Status` = 'Approve'"));

        // Calculate the total number of pages
        $total_pages = ceil($total_records / $records_per_page);

        // Display pagination links
        echo "<div class='pagination h-50 mt-5 ml-5'>";
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $current_page) {
                echo "<button class='btn btn-primary current-page'>$i</button>";
            } else {
                echo "<button class='btn mx-2'><a href='hospital.php?page=$i'>$i</a></button>";
            }
        }
        echo "</div>";
        ?>
    </div>
</div>



<section class="symptoms-area mb-5 pt-100 mt-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="symptoms-image">
                    <img src="assets/img/symptoms-img.png" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="symptoms-content">
                    <span class="sub-title">Symptoms</span>
                    <h2>Coronavirus Symptoms</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.</p>
                    <ul>
                        <li><span><i class="flaticon-tick"></i> Cough</span></li>
                        <li><span><i class="flaticon-tick"></i> Fever</span></li>
                        <li><span><i class="flaticon-tick"></i> Tiredness</span></li>
                        <li><span><i class="flaticon-tick"></i> Headache</span></li>
                        <li><span><i class="flaticon-tick"></i> Breath Shortness</span></li>
                        <li><span><i class="flaticon-tick"></i> Muscle Pain</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include("includes/footer.php");
?>
</body>

</html>