<?php
require("../Includes/config.php");
require("../Includes/sidebar.php");
require("../Includes/topbar.php");

$fetching_pro = "SELECT * FROM `appointment` AS a 
INNER JOIN `hospital` AS h ON a.`hospital name` = h.`id` INNER JOIN `vaccines` AS v ON a.`vaccine` = v.`id` INNER JOIN `paitent` AS pp ON a.`pname` = pp.`id` where a.`PStatus` = 'Approve' and a.`Status2` = '1' and a.`Dose` = 'Second' and a.`PStatus33` = 'Delivered' ;
";
$pro_result = mysqli_query($conn, $fetching_pro);


?>
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Second Dose</h1>
    </div>

    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow mb-4">
                <div
                    class="card-header py-3 table-responsive d-flex flex-row align-items-center justify-content-between">
                    <table class="table table-warning table-bordered text-center">
                        <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                            <tr style="text-align: center;">
                                <th scope="col">Id</th>
                                <th scope="col">Paitent Name</th>
                                <th scope="col">Hospital Name</th>
                                <th scope="col">Vaccine</th>
                                <th scope="col">Date</th>
                                <th scope="col">Report Status</th>
                                <th scope="col">Dose Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($pro_result) > 0) {
                                while ($pro_data = mysqli_fetch_assoc($pro_result)) {
                                    ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $pro_data['pid'] ?>
                                        </th>
                                        <td>
                                            <?php echo $pro_data['Username'] ?>
                                        </td>
                                        <td>
                                            <?php echo $pro_data['Hospital Name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $pro_data['Vaccine'] ?>
                                        </td>
                                        <td>
                                            <?php echo $pro_data['visit date'] ?>
                                        </td>
                                        <td>
                                            <?php echo $pro_data['PStatus33'] ?>
                                        </td>
                                        <td>
                                            <?php echo $pro_data['Dose'] ?>
                                        </td>
                                        <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
require("../Includes/hospitalfooter.php");
?>