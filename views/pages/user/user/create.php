<?php $roles = Role::display();
$company = Company::display()?>
<h2 class="text-center">Add User</h2>
<div class="container  w-50 p-3">
    <form action="<?php echo $base_url ?>/user/save_user" method="post">
        <div class="mb-3">
            <label for="" class="form-label">User Name</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="user_name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" id="" aria-describedby="" name="email">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" id="" aria-describedby="" name="password">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="" aria-describedby="" name="phone">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Role</label>
            <select class="form-select form-control" name="role">
					<option data-select2-id="select2-data-9-gr0x">Select Role</option>
						<?php foreach($roles as $value):?>
						<option value="<?php echo $value['id']?>"><?php echo $value['role_name']?></option>
						<?php endforeach;?>
					</select>
            <!-- <input type="text" class="form-control" id="" aria-describedby="" name="role" value=""> -->
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Company Id</label>
            <select class="form-select form-control" name="company">
					<option data-select2-id="select2-data-9-gr0x">Select Company</option>
						<?php foreach($company as $value):?>
						<option value="<?php echo $value['id']?>"><?php echo $value['company_name']?></option>
						<?php endforeach;?>
					</select>
            <!-- <input type="text" class="form-control" id="" aria-describedby="" name="company"> -->
        </div>

        <button type="submit" class="btn btn-primary" name="createUser">Submit</button>
    </form>
</div>