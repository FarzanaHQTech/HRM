<?php
$departments = Department::display();
$designations = Designation::display();
$roles = Role::display();
//  $users = User::display();
$company = Company::display();
$maritals = Martial::display();
//  // $payrolls = Payroll::display();
$status = Status::display();
?>
<?php
// echo '<pre>';
// print_r($cardemployee);
// echo '</pre>';
?>

<!-- <label class="col-form-label">Employee ID <span class="text-danger">*</span></label> -->

<div class="modal-body" data-select2-id="select2-data-25-5ef8">
    <form data-select2-id="select2-data-24-w7sx" action="
    <?php echo $base_url ?>/CardEmployee/update_all"
        method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <input type="hidden" class="form-control" name="id" value="<?php echo htmlspecialchars(isset($cardemployee->id)) ? $cardemployee->id : 'no value'; ?>">
                <div class="input-block mb-3">
                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="first_name" value="<?php echo isset($cardemployee->first_name) ? $cardemployee->first_name : 'no value'; ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Last Name</label>
                    <input class="form-control" type="text" name="last_name" value="<?php echo htmlspecialchars(isset($cardemployee->last_name)) ? $cardemployee->last_name : 'no value'; ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Username <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="username" value="<?php echo htmlspecialchars(isset($cardemployee->username)) ? $cardemployee->username : 'no value'; ?>">

                </div>
            </div>
            <div class="col-md-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Upload Photo</label>
                    <input class="form-control" type="file" name="image" value="<?php echo htmlspecialchars(isset($cardemployee->image)) ? $cardemployee->image : 'no value'; ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                    <input class="form-control" type="email" name="email" value="<?php echo htmlspecialchars(isset($cardemployee->email)) ? $cardemployee->email : 'no value'; ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-block mb-3">
                    <label for="">Is User</label>
                    <input type="checkbox" name="" id="isUser">
                    <label class="col-form-label passField">Password</label>
                    <input class="form-control passField" name="password" type="password" value="<?php echo htmlspecialchars(isset($cardemployee->password)) ? $cardemployee->password : 'no value'; ?>">
                </div>
            </div>


            <div class="col-sm-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Joining Date <span class="text-danger">*</span></label>

                    <input class="form-control" type="date" name="joining_date" value="<?php echo htmlspecialchars(isset($cardemployee->joining_date)) ? $cardemployee->joining_date : 'no value'; ?>">

                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Phone </label>
                    <input class="form-control" type="text" name="mobile" value="<?php echo htmlspecialchars(isset($cardemployee->mobile)) ? $cardemployee->mobile : 'no value'; ?>">
                </div>

            </div>
            <div class="col-sm-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">DOB </label>
                    <input class="form-control" type="date" name="dob" value="<?php echo htmlspecialchars(isset($cardemployee->dob)) ? $cardemployee->dob : 'no value'; ?>">
                </div>

            </div>
            <div class="col-sm-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Address </label>
                    <input class="form-control" type="text" name="address" value="<?php echo htmlspecialchars(isset($cardemployee->address)) ? $cardemployee->address : 'no value'; ?>">
                </div>

            </div>
            <div class="col-md-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Maritail Status </label>
                    <select class="form-select form-control" name="martial_status_id">

                        <option data-select2-id="select2-data-9-gr0x" value="<?php echo htmlspecialchars(isset($cardemployee->martial_status)) ? $cardemployee->martial_status : 'no value'; ?>"><?php echo htmlspecialchars(isset($cardemployee->martial_status)) ? $cardemployee->martial_status : 'no value'; ?></option>
                        <?php //foreach ($maritals as $value): 
                        ?>
                        <?php foreach ($maritals as $value): ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- <input class="form-control" type="text" name="martial_status_id" > -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Gender </label>
                    <select class="form-select form-control" name="gender">
                        <option value="<?php echo htmlspecialchars(isset($cardemployee->gender)) ? $cardemployee->gender : 'no value'; ?>" data-select2-id="select2-data-6-n4r2"><?php echo htmlspecialchars(isset($cardemployee->gender)) ? $cardemployee->gender : 'no value'; ?> </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <!-- <input class="form-control" type="text" name="gender"> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Experience </label>
                    <input class="form-control" type="text" name="experience" value="<?php echo htmlspecialchars(isset($cardemployee->experience)) ? $cardemployee->experience : 'no value'; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Basic salary</label>
                    <input class="form-control" type="number" name="basic_salary" value="<?php echo htmlspecialchars(isset($cardemployee->basic_salary)) ? $cardemployee->basic_salary : 'no value'; ?>">
                    <!-- <input class="form-control" type="text" name="payroll_id" value=""> -->

                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Staus</label>
                    <!-- <input class="form-control" type="text" name="status_id" id=""> -->
                    <select class="form-select form-control" name="status_id">
                        <option data-select2-id="select2-data-9-gr0x" value="<?php echo htmlspecialchars(isset($cardemployee->status)) ? $cardemployee->status : 'no value'; ?>"><?php echo htmlspecialchars(isset($cardemployee->status)) ? $cardemployee->status : 'no value'; ?></option>
                        <?php foreach ($status as $value): ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['status_name'] ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
            </div>
            <div class="col-md-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Employee Type </label>
                    <select class="form-select form-control" name="role_id">
                        <option data-select2-id="select2-data-9-gr0x">Select Employee Type</option>
                        <?php foreach ($roles as $value): ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['role_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- <input class="form-control" type="text" name="role_id" > -->

                </div>
            </div>

            <div class="col-md-6">
                <div class="input-block mb-3" data-select2-id="select2-data-23-yvng">
                    <label class="col-form-label">Department <span class="text-danger">*</span></label>
                    <select class="form-select form-control" name="department_id">
                        <option data-select2-id="select2-data-9-gr0x"><?php echo htmlspecialchars(isset($cardemployee->department)) ? $cardemployee->department : 'no value'; ?></option>
                        <?php foreach ($departments as $value): ?>
                            <option data-select2-id="select2-data-29-3lk9" value="<?php echo $value['id'] ?>"><?= $value['department_name'] ?></option>

                        <?php endforeach; ?>
                    </select>

                </div>
            </div>
            <!-- <div class="col-sm-6">
                <div class="input-block mb-3">
                    <label class="col-form-label">Company</label> -->
            <!-- <input type="text" name="company" value="<?php //echo htmlspecialchars(isset($cardemployee->company_id)) ? $cardemployee->company_id : 'no value'; 
                                                            ?>"> -->
            <!-- <select class="form-select form-control" name="company_id">
                        <option data-select2-id="select2-data-9-gr0x"><?php //echo htmlspecialchars(isset($cardemployee->company)) ? $cardemployee->company : 'no value'; 
                                                                        ?></option>
                        <?php //foreach ($company as $value): 
                        ?>
                            <option value="<?php //echo $value['id'] 
                                            ?>"><?php // echo $value['company_name'] 
                                                ?></option>
                        <?php //endforeach; 
                        ?>
                    </select> -->

        </div>
</div>


<div class="col-md-6">
    <div class="input-block mb-3" data-select2-id="select2-data-33-ch8w">
        <label class="col-form-label">Designation <span class="text-danger">*</span></label>
        <select class="form-select form-control" name="designation_id">
            <option data-select2-id="select2-data-12-2ip8"><?php echo htmlspecialchars(isset($cardemployee->designation)) ? $cardemployee->designation : 'no value'; ?></option>
            <?php foreach ($designations as $value): ?>
                <option data-select2-id="select2-data-34-p8kl" value="<?php echo $value['id'] ?>"><?= $value['designation_name'] ?></option>
                <!-- <option data-select2-id="select2-data-35-5qxc">Web Developer</option>
						<option data-select2-id="select2-data-36-9clo">Android Developer</option> -->
            <?php endforeach; ?>
        </select>

    </div>
</div>
</div>
<div class="table-responsive m-t-15">
    <table class="table table-striped custom-table">

    </table>
</div>
<div class="submit-section">
    <button class="btn btn-primary submit-btn" name="btnUpdate">Update</button>
</div>
</form>
</div>

<script>
    $(function() {
        // Initially hide the password field
        $(".passField").hide();

        // Listen for changes on the "isUser" checkbox
        $("#isUser").on("change", function() {
            if ($(this).is(":checked")) {
                // Show the password field if the checkbox is checked
                $(".passField").show();
            } else {
                // Hide the password field if the checkbox is unchecked
                $(".passField").hide();
            }
        });
    });
</script>