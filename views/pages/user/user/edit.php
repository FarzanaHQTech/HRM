<?php $roles = Role::display();
    $company = Company::display();
?>
<h2 class="text-center">Update user</h2>
<div class="container  w-50 p-3">
    <form action="<?php echo $base_url?>/user/update_all" method="post">
    <div class="mb-3">
            <input type="hidden" class="form-control" id="" aria-describedby="" name="id" value="<?=$user->id?>" >
        </div>
        <div class="mb-3"> 
            <label for="" class="form-label">User Name</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="user_name" value="<?=$user->username?>">
            <!-- value="<?//=$value->username?>" -->
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" id="" aria-describedby="" name="email" value="<?=$user->email?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="" aria-describedby="" name="phone" value="<?=$user->mobile?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Role</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="role" value="<?=$user->role_id?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Company_id</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="company" value="<?=$user->company_id?>">
        </div>
        <!-- <div class="mb-3">
            <label for="" class="form-label">Person id</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="person_id" value="<?=$user->person_id?>">
        </div> -->

        <button type="submit" class="btn btn-primary" name="updateUser">Update</button>
    </form>
</div>