<?php
?>

<h2 class="text-center">Add Role</h2>
<div class="container  w-50 p-3">
    <form action="<?php echo $base_url ?>/role/save_role" method="post">
        <div class="mb-3">
            <label for="" class="form-label">ID</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="id">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Role</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="role_name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Created Time</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="created_at">
        </div>
       

        <button type="submit" class="btn btn-primary" name="addRole">Create Role</button>
    </form>
</div>