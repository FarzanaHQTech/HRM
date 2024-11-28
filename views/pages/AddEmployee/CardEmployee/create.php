<?php $departments = Department::display();
$designations = Designation::display();
$roles = Role::display();
$users = User::display();
$company = Company::display();
$maritals = Martial::display();
$payrolls = Payroll::display();
$status = Status::display();
?>


<div class="modal-body" data-select2-id="select2-data-25-5ef8">
	<form data-select2-id="select2-data-24-w7sx" action="<?php echo $base_url?>/cardemployee/save" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">First Name <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="first_name">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Last Name</label>
					<input class="form-control" type="text" name="last_name">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Username <span class="text-danger">*</span></label>
					<select class="form-select form-control" name="user_id">
					<option data-select2-id="select2-data-9-gr0x">Select user name</option>
						<?php foreach($users as $value):?>
						<option value="<?php echo $value['id']?>"><?php echo $value['username']?></option>
						<?php endforeach;?>
					</select>
					<!-- <input class="form-control" type="text" name="user_id"> -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Upload Photo</label>
					<input class="form-control" type="file" name="image">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Email <span class="text-danger">*</span></label>
					<input class="form-control" type="email" name="email">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label" name="password">Password</label>
					<input class="form-control" type="password">
				</div>
			</div>
			<!-- <div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Confirm Password</label>
					<input class="form-control" type="password" name="password">
				</div>
			</div> -->
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="id">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
					
					<input class="form-control" type="date" name="joining_date">
					
				</div>
			</div>
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Phone </label>
					<input class="form-control" type="text" name="mobile">
				</div>

			</div>
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">DOB </label>
					<input class="form-control" type="date" name="dob">
				</div>

			</div>
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Address </label>
					<input class="form-control" type="text" name="address">
				</div>

			</div>
			<div class="col-md-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Maritail Status </label>
					<select class="form-select form-control" name="martial_status_id">
					<option data-select2-id="select2-data-9-gr0x">Select Marital Status</option>
						<?php foreach($maritals as $value):?>
						<option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
						<?php endforeach;?>
					</select>
					<!-- <input class="form-control" type="text" name="martial_status_id" > -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Gender </label>
					<select class="form-select form-control" name="gender">
						<option value="" data-select2-id="select2-data-6-n4r2">Select Gender </option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<!-- <input class="form-control" type="text" name="gender"> -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Experience </label>
					<input class="form-control" type="text" name="experience">
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Basic salary</label>
					<select class="form-select form-control" name="payroll_id">
					<option data-select2-id="select2-data-9-gr0x">Select Salary</option>
						<?php foreach($payrolls as $value):?>
						<option value="<?php echo $value['id']?>"><?php echo $value['basic_salary']?></option>
						<?php endforeach;?>
					</select>
					<!-- <input class="form-control" type="text" name="payroll_id" value=""> -->
					
				</div>
			</div>
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Staus</label>
					<!-- <input class="form-control" type="text" name="status_id" id=""> -->
					<select class="form-select form-control" name="status_id">
					<option data-select2-id="select2-data-9-gr0x">Select Current Status</option>
						<?php foreach($status as $value):?>
						<option value="<?php echo $value['id']?>"><?php echo $value['status_name']?></option>
						<?php endforeach;?>
					</select>
					<!-- <select class="form-select form-control" name="status_id">
						<option value="" data-select2-id="select2-data-6-n4r2">Global Technologies</option>
						<option value="1">Delta Infotech</option>
					</select> -->
				</div>
			</div>
			<div class="col-sm-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Company</label>
					<select class="form-select form-control" name="company_id">
					<option data-select2-id="select2-data-9-gr0x">Select Company</option>
						<?php foreach($company as $value):?>
						<option value="<?php echo $value['id']?>"><?php echo $value['company_name']?></option>
						<?php endforeach;?>
					</select>
					<!-- <input class="form-control" type="text" name="company_id" > -->
					<!-- <select class="form-select form-control" name="company_id">
						<option value="1" data-select2-id="select2-data-6-n4r2">Global Technologies</option>
						<option value="2">Delta Infotech</option>
					</select> -->
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-block mb-3">
					<label class="col-form-label">Employee Type </label>
					<select class="form-select form-control" name="martial_status_id">
					<option data-select2-id="select2-data-9-gr0x">Select Employee Type</option>
						<?php foreach($roles as $value):?>
						<option value="<?php echo $value['id']?>"><?php echo $value['role_name']?></option>
						<?php endforeach;?>
					</select>
					<!-- <input class="form-control" type="text" name="role_id" > -->
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-block mb-3" data-select2-id="select2-data-23-yvng">
					<label class="col-form-label">Department <span class="text-danger">*</span></label>
					<select class="form-select form-control" name="department_id">
						<option data-select2-id="select2-data-9-gr0x">Select Department</option>
						<?php foreach($departments as $value):?>
						<option data-select2-id="select2-data-29-3lk9" value="<?php echo $value['id']?>"><?= $value['department_name']?></option>
						<!-- <option data-select2-id="select2-data-30-4ojr">IT Management</option>
						<option data-select2-id="select2-data-31-j8jw">Marketing</option> -->
						<?php endforeach;?>
					</select>

				</div>
			</div>
			<div class="col-md-6">
				<div class="input-block mb-3" data-select2-id="select2-data-33-ch8w">
					<label class="col-form-label">Designation <span class="text-danger">*</span></label>
					<select class="form-select form-control" name="designation_id">
						<option data-select2-id="select2-data-12-2ip8">Select Designation</option>
						<?php foreach($designations as $value):?>
						<option data-select2-id="select2-data-34-p8kl" value="<?php echo $value['id']?>"><?= $value['designation_name']?></option>
						<!-- <option data-select2-id="select2-data-35-5qxc">Web Developer</option>
						<option data-select2-id="select2-data-36-9clo">Android Developer</option> -->
						<?php endforeach;?>
					</select>

				</div>
			</div>
		</div>
		<div class="table-responsive m-t-15">
			<table class="table table-striped custom-table">
				
			</table>
		</div>
		<div class="submit-section">
			<button class="btn btn-primary submit-btn" name="btnCreate">Submit</button>
		</div>
	</form>
</div>