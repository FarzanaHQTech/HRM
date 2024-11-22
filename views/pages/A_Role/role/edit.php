
<?php  ?>
<h2 class="text-center">Update Role</h2>
<div class="container w-50 p-3">
    <form action="<?php echo $base_url?>/role/update_all" method="post">
        <input type="hidden" name="id" value="<?php echo  $role->id ?>">
        <div class="mb-3">
            <label for="" class="form-label">Role Name</label>
            <input type="text" class="form-control" name="role_name" value="<?php echo $role->role_name ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="updateRole">Update</button>
    </form>

</div>