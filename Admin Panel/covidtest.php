<?php
// connection
require('../Includes/config.php');
// header
require('../Includes/adminheader.php');
// data fetch from database
$test = "SELECT * FROM `test` AS t INNER JOIN `paitent` AS p ON t.`tname` = p.`id` INNER JOIN `hospital` AS h ON t.`thospital` = h.`id`";
$connection_check = mysqli_query($conn, $test);
if (mysqli_num_rows($connection_check) > 0) {
	?>
	<!-- page-wrapper -->
	<div class="page-wrapper">
		<div class="content">
			<div class="row">
				<div class="col-sm-4 col-3">
					<h4 class="page-title">Covid-19 Test</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<!--table  -->
						<table id="example" class="display nowrap table table-border table-striped custom-table mb-0">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">Patient Name</th>
									<th class="text-center">Hospital Name</th>
									<th class="text-center">Date</th>
									<th class="text-center">Time</th>
									<th class="text-center">Status</th>
									<th class="text-center">Report</th>
									<th class="text-center">Download</th>
								</tr>
							</thead>
							<tbody>
								<?php
								while ($row = mysqli_fetch_array($connection_check)) {
									?>
									<tr>
										<td class="text-center">
											<?php echo $row['tid'] ?>
										</td>
										<td class="text-center">
											<?php echo $row['Username'] ?>
										</td>
										<td class="text-center">
											<?php echo $row['Hospital Name'] ?>
										</td>
										<td class="text-center">
											<?php echo $row['tdate'] ?>
										</td>
										<td class="text-center">
											<?php echo $row['ttime'] ?>
										</td>
										<?php
										if ($row['tstatus'] == 'Positive') {
											echo "<td class='text-center'><span class='custom-badge status-green col-lg-6'>Positive</span></td>";
										} else {
											echo "<td class='text-center'><span class='custom-badge status-red col-lg-6'>Negative</span></td>";
										} ?>
										<td class="text-center">
											<?php echo $row['Report'] ?>
										</td>
										<td class="text-center" style="display: flex; justify-content:space-around;"><a
												style="text-decoration: none;"
												href="downloadreports.php?Report=<?php echo $row['Report']; ?>"
												class="btn btn-success">Download</a>
										</td>
									</tr>
									<?php
								}
}
?>
						</tbody>
					</table>
					<!-- table -->
				</div>
			</div>
		</div>
	</div>
</div>
<div id="delete_schedule" class="modal fade delete-modal" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body text-center">
				<img src="assets/img/sent.png" alt="" width="50" height="46">
				<h3>Are you sure want to delete this Schedule?</h3>
				<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
					<button type="submit" class="btn btn-danger">Delete</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- page-wrapper -->
</div>
<?php
require('../Includes/adminfooter.php');
?>