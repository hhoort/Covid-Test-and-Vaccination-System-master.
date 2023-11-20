<?php
require('Includes/config.php');

if (isset($_GET['id'])) {
    $hospital_id = $_GET['id'];
    $sql = "SELECT * FROM `hospital` WHERE `id` = '$hospital_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <a href="hospital.php" style="text-decoration: none;">
            <br><br>
            <div class="card" style="width: 30rem; transition: transform 0.2s;"
                onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1.00)';">
                <img src="Hospital/hospitalimg/<?php echo $row['Himage']; ?>" class="card-img-top"
                    style="height: 250px; width:450px; margin: 0 auto 0 auto; border:2px solid black;" alt="Hospital Image">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo 'Hospital Name:- <br>' . $row['Hospital Name']; ?>
                    </h5>
                    <p class="card-text">
                        <?php echo 'Location:- <br>' . $row['Address']; ?>
                    </p>
                    <p class="card-text">
                        <?php echo 'Address:- ' . '' . $row['Location']; ?>
                    </p>
                    <!-- Add more fields as needed -->
                </div>
            </div>
        </a>
        <?php
    } else {
        echo "Hospital details not found";
    }
}

$conn->close();
?>