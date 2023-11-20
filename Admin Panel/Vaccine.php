<?php
// connection
require('../Includes/config.php');
// header
require('../Includes/adminheader.php');

// fetch data from database
$vaccine = "SELECT * FROM `vaccines`";
$connection_check = mysqli_query($conn, $vaccine);
if (mysqli_num_rows($connection_check) > 0) {
	?>
	<!-- page-wrapper -->
	<div class="page-wrapper">
		<div class="content">
			<div class="row">
				<div class="col-sm-4 col-3">
					<h4 class="page-title">Vaccines</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<!--table  -->
						<table id="example"
						class="display nowrap table table-border table-striped custom-table mb-0 text-center">
							<thead class="text-center">
								<tr>
									<th>ID</th>
									<th>Vaccines</th>
									<th>Status</th>
									<!-- <th class="text-right">Action</th> -->
								</tr>
							</thead>
							<tbody>
								<?php
								while ($row = mysqli_fetch_array($connection_check)) {
									?>
									<tr>
										<td>
											<?php echo $row['id'] ?>
										</td>
										<td>
											<?php echo $row['Vaccine'] ?>
										</td>
										<?php
										if ($row['status'] == 'Available') {
											echo "<td><span class='custom-badge status-green col-lg-6'>Available</span></td>";
										} else {
											echo "<td><span class='custom-badge status-red col-lg-6'>Out Of Stock</span></td>";
										} ?>
									</tr>
									<?php
								}
}
?>
						</tbody>
					</table>
					<!--table  -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- page-wrapper -->
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
</div>
<!-- footer -->
<?php
require('../Includes/adminfooter.php');
?>