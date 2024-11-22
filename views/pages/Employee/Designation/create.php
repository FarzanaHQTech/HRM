<?php $department = Department::display();
// echo "<pre>"
// print_r($department);
// die();
?>

<h2 class="text-center">Add Department</h2>
<div class="container  w-50 p-3">
    <form action="<?php echo $base_url ?>/designation/save" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Designation Name *</label>
            
            <input type="text" class="form-control" id="" aria-describedby="" name="designation_name">
            <label for="" class="form-label mt-5">Department * </label>
            <select class="form-select form-control " aria-label="Default select 
            example" name="department_id">
            <option selected>Select  a department</option>
           <?php foreach($department as $value):?>
                
                <option  value="<?= $value['id']?>"><?= $value['department_name']?></option>
                <!-- <option value="2">Two</option>
                <option value="3">Three</option> -->
                <?php endforeach;?>
            </select>
            <button type="submit" class="btn btn-primary mt-5" name="createDesig">Submit</button>

    </form>
</div>