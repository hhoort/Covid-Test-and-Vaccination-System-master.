<?php
require("../Includes/config.php");
require("../Includes/sidebar.php");
require("../Includes/topbar.php");

$message = "SELECT * FROM `readmore`";
$con = mysqli_query($conn, $message);
if (mysqli_num_rows($con) > 0 ) {
    ?>
    <style>
        h1 {
            text-align: center;
            background-color: #3498db;
            color: #fff;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .col-lg-4 {
            flex-basis: calc(33.33% - 20px);
            margin-bottom: 20px;
        }

        .card {
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #333;
        }

        .card-subtitle {
            font-size: 1.2rem;
            color: #777;
            margin-top: 5px;
        }

        .card-text {
            margin-top: 10px;
            color: #555;
        }

        .btn-primary {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #1f77c7;
        }
    </style>

<h1>Patient Message</h1>
    <div class="container mt-5">
    <div class="row " style="justify-content:center ;">
<?php
while ($row = mysqli_fetch_assoc($con)) {
    ?>
    <div class="col-lg-4 col-md-8 col-sm-12"> 
<div class="card" style="justify-content: center;">
    <div class="card-body">
          <h3 class="card-title"><?php echo $row['Remail'] ?></h3>
    <h2 class="card-title"><?php echo $row['Rname'] ?></h2>
    <h5 class="card-title"><?php echo $row['Rcity'] ?></h5>
    <p class="card-text"><?php echo $row['Rmessage'] ?></p>
    <p class="card-text"><?php echo $row['Rreply'] ?></p>
    <a href="reply.php?Rid=<?php echo $row['Rid'];?>" class="btn btn-primary col-lg-12 col-md-12 col-sm-12">Reply</a>
  </div>
</div>
</div>
<?php
}}
?>
    </div>
    </div>


<?php
require("../Includes/hospitalfooter.php");
?>