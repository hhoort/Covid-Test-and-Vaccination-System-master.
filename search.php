<?php
require('Includes/config.php');

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $sql = "SELECT `id`, `Hospital Name` FROM `hospital` WHERE `Hospital Name` LIKE '%$query%' AND `Status` = 'Approve'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<li class="suggestion" data-hospital-id="' . $row['id'] . '" style="margin-left: 30px; margin-top:20px; color: white; list-style-type: none; text-decoration: none;" 
            onmouseover="this.style.color=\'blue\';" onmouseout="this.style.color=\'white\';">' . $row['Hospital Name'] . '</li>';

        }
    } else {
        echo "No results found";
    }
}

$conn->close();
?>