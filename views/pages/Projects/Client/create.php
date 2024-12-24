<?php $roles = Role::display();
// print_r($roles);
$companies = AllCompany::display();
// print_r($companies); 
?>

<div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title">Add Client</h5>

	</div>
	<div class="modal-body">
		<form action="<?php echo $base_url ?>/client/save" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<div class="input-block mb-3">
						<label class="col-form-label">Client ID <span class="text-danger">*</span></label>
						<input class="form-control floating" type="text" name="id ">
					</div>
				</div>
				<div class="col-md-6">
					<div class="input-block mb-3">
						<label class="col-form-label">Full Name <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="client_name">
					</div>
				</div>
				<div class="col-md-6">
					<div class="input-block mb-3">
						<label class="col-form-label">User Name <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="username">
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-block mb-3">
						<label class="col-form-label">upload photo<span class="text-danger">*</span></label>
						<input class="form-control floating" type="file" name="image">
					</div>
				</div>
				<div class="col-md-6">
					<div class="input-block mb-3">
						<label class="col-form-label">Email <span class="text-danger">*</span></label>
						<input class="form-control floating" type="email" name="email">
					</div>
				</div>
				<div class="col-md-6">
					<div class="input-block mb-3">


						<div class="">
							<label for="">Is User</label>
							<input type="checkbox" name="isUser" id="isUser">
							<label class="col-form-label pass_field ">Password</label>
							<input class="form-control pass_field" type="password" name="password">
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-block mb-3">
						<label class="col-form-label">Phone </label>
						<input class="form-control" type="text" name="phone">
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-block mb-3">
						<label class="col-form-label">Designation</label>
						<input class="form-control" type="text" name="designation">
					</div>
				</div>
				<div class="col-md-6">
					<div class="input-block mb-3">
						<label class="col-form-label">Company Name</label>
						<select class="form-select form-control" name="company_name">
							<option data-select2-id="select2-data-9-gr0x">Select Company</option>
							<?php foreach ($companies as $value): ?>
								<option value="<?php echo $value['id'] ?>"><?= $value['company_name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-block mb-3">
						<label class="col-form-label">User Type</label>
						<select class="form-select form-control" name="role_id">
							<option data-select2-id="select2-data-9-gr0x">Select Role</option>
							<?php foreach ($roles as $value): ?>
								<option data-select2-id="select2-data-29-3lk9" value="<?php echo $value['id'] ?>"><?= $value['role_name'] ?></option>

							<?php endforeach; ?>
						</select>
					</div>
				</div>
			</div>
			<div class="table-responsive m-t-15">
				<table class="table table-striped custom-table">
					<thead>
						<tr>
							<th>Module Permission</th>
							<th class="text-center">Read</th>
							<th class="text-center">Write</th>
							<th class="text-center">Create</th>
							<th class="text-center">Delete</th>
							<th class="text-center">Import</th>
							<th class="text-center">Export</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Projects</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
						</tr>
						<tr>
							<td>Tasks</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
						</tr>
						<tr>
							<td>Chat</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>
							<td class="text-center">
								<label class="custom_check">
									<input type="checkbox" checked="">
									<span class="checkmark"></span>
								</label>
							</td>

						</tr>
					</tbody>
				</table>
			</div>
			<div class="submit-section">
				<button class="btn btn-primary submit-btn" name="btnCreate">Submit</button>
			</div>
		</form>
	</div>
</div>

<script>
	// $(function(){
	// 	$(".pass_field").hide()
	// 	$("#isUser").on("change",function(){
	// 		let user = $(this).is(":checked");
	// 		if(user == 1){
	// 			alert()
	// 			$(".pass_field").show()
	// 		}else{
	// 			$(".pass_field").hide()
	// 		}
	// 	})
	// })

	$(function() {
		// Initially hide the password field
		$(".pass_field").hide();

		// Listen for changes on the "isUser" checkbox
		$("#isUser").on("change", function() {
			if ($(this).is(":checked")) {
				// Show the password field if the checkbox is checked
				$(".pass_field").show();
			} else {
				// Hide the password field if the checkbox is unchecked
				$(".pass_field").hide();
			}
		});
	});
</script>