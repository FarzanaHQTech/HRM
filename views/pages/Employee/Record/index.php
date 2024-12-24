<?php
$employees = Employee::display();;
?>

<div class="content container-fluid">


	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col">
				<h3 class="page-title">Employee Report</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Employee Report</li>
				</ul>
			</div>
			<div class="col-auto">
				<a href="#" class="btn btn-primary btn_print" onclick="print()">PDF</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->

	<!-- Content Starts -->

	<!-- Search Filter -->
	<div class="row filter-row mb-4">
		<div class="col-sm-6 col-md-3">
			<div class="input-block mb-3 form-focus">
				<input class="form-control floating" type="text">
				<label class="focus-label">Employee</label>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="input-block mb-3 ">
				<select class="form-select form-control">
					<option>Select Department</option>
					<option>Designing</option>
					<option>Development</option>
					<option>Finance</option>
					<option>Hr &amp; Finance</option>
				</select>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="input-block mb-3 form-focus">
				<div class="cal-icon">
					<input class="form-control floating datetimepicker" type="text">
				</div>
				<label class="focus-label">From</label>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="input-block mb-3 form-focus">
				<div class="cal-icon">
					<input class="form-control floating datetimepicker" type="text">
				</div>
				<label class="focus-label">To</label>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="d-grid">
				<a href="#" class="btn btn-success"> Search </a>
			</div>
		</div>
	</div>
	<!-- /Search Filter -->
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
										<option value="10">10</option>
									</select> entries</label></div>
						</div>
						<div class="col-sm-12 col-md-6"></div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
								<thead>
									<tr role="row">
										<th style="width: 179.547px;">#</th>
										<th style="width: 179.547px;">ID</th>
										<th style="width: 179.547px;">Employee Name</th>
										<th style="width: 104.641px;">Employee Type</th>
										<th style="width: 178.703px;">Email</th>
										<th style="width: 116.672px;">Department</th>
										<th style="width: 142.234px;">Designation</th>
										<th style="width: 86.9844px;">Joining Date</th>
										<th style="width: 75.5312px;">DOB</th>
										<th style="width: 96.8594px;">Martial Status</th>
										<th column ascending" style="width: 51.3906px;">Gender</th>
										<th style="width: 114.094px;">Terminated Date</th>

										<th style="width: 47.9219px;">Salary</th>
										<th aria-label="Address: activate to sort column ascending" style="width: 325.859px;">Address</th>
										<th style="width: 115.406px;">Contact Number</th>
										<th style="width: 186.875px;">Emercency Contact Details</th>
										<th a style="width: 184.234px;">Experience</th>
										<th style="width: 55.9688px;">Status</th>
									</tr>
								</thead>
								<tbody>




									<?php foreach ($employees as $key => $value): ?>
										<tr class="odd">
											<td><?php echo $key + 1 ?></td>
											<td>#00<?php echo $value['id'] ?></td>
											<td class="sorting_1">
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="<?php echo $base_url ?>/img/employees/<?= $value['image'] ?>" alt="User Image"></a>
													<a href="profile.html" class="text-primary"><?php echo $value['first_name'] . " " . $value['last_name'] ?> <span></span></a>
												</h2>
											</td>
											<td><?php echo $value['role'] ?></td>
											<td class="text-info"><?php echo $value['email'] ?></td>
											<td><?php echo $value['department'] ?></td>
											<td><?php echo $value['designation'] ?></td>
											<td><?php echo date("F d, Y", strtotime($value['joining_date'])) ?></td>
											<td><?php echo $value['dob'] ?></td>
											<td><?php echo $value['martial_status'] ?></td>
											<td><?php echo $value['gender'] ?></td>
											<td><?php echo $value['terminated_date'] ?></td>

											<td><?php echo $value['basic_salary'] ?></td>

											<td>
												<?php echo $value['address'] ?>
											</td>
											<td><?php echo $value['mobile'] ?></td>
											<td><?php echo $value['mobile'] ?></td>
											<td><?php echo $value['experience'] ?></td>
											<td><button class="btn btn-outline-success btn-sm"><?php echo $value['status'] ?></button></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div>
						</div>
						<div class="col-sm-12 col-md-7">
							<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
								<ul class="pagination">
									<li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i> </a></li>
									<li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
									<li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link"> <i class=" fa fa-angle-double-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- /Content End -->

</div>