<h2 class="text-center">Add Department</h2>
<div class="container  w-50 p-3">
    <form action="<?php echo $base_url ?>/department/update" method="post">
        <div class="mb-3">
            <input type="hidden" class="form-control" id="" name="id" value="<?php echo $department->id ?>">
            <label for="" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="" name="department_name" value="<?php echo $department->department_name ?>">

            <button type="submit" class="btn btn-primary mt-5" name="updateDept">Submit</button>

    </form>
</div>