<?php $department = Department::display();
$designations = Department::display();
// echo "<pre>"
// print_r($department);
// die();
?>

<h2 class="text-center">Add Department</h2>
<div class="container  w-50 p-3">
    <form action="<?php echo $base_url ?>/designation/update/<?php echo $id?>" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Designation Name </label>
            <input type="hidden" class="form-control" id="" aria-describedby="" name="id" value="<?php echo $designation->id?>">
            <!-- <label for="" class="form-label mt-5"> -->
            <input type="text" class="form-control" id="" aria-describedby="" name="designation_name" value="<?php echo $designation->designation_name?>">
            <label for="" class="form-label mt-5">Department </label>
            <select class="form-select form-control " aria-label="Default select 
            example" name="department" v>
            <option value="<?php echo $department_id?>"><?php echo $designation->department_id?></option>
           <?php foreach($department as $value):?>
                
                <option  value="<?= $value['id']?>"><?= $value['department_name']?></option>
                <!-- <option value="2">Two</option>
                <option value="3">Three</option> -->
                <?php endforeach;?>
            </select>
            <button type="submit" class="btn btn-primary mt-5" name="updateDesig">Submit</button>

    </form>
</div>