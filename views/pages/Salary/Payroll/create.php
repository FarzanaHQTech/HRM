<?php //$employees = employee::display();
// echo "<pre>"
// print_r($department);
// die();
?>

<h2 class="text-center">Make Salary</h2>
<div class="container  w-50 p-3">
    <form action="<?php echo $base_url ?>/payroll/save" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Employee Name *</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="employee_id">
            <label for="" class="form-label mt-5">Basic Salary * </label>
            <input type="text" class="form-control" id="" aria-describedby="" name="basic_salary">
            <!-- <select class="form-select form-control " aria-label="Default select 
            example" name="basic_salary">
            <option selected>Select  a department</option>
           <?php //foreach($employees as $value):?>
                
                <option  value="<? //= $value['id']?>"><?= $value['department_name']?></option>
                 <option value="2">Two</option>
                <option value="3">Three</option> -->
                <?php //endforeach;?>
            </select> 
            <button type="submit" class="btn btn-primary mt-5" name="btnCreate">Submit</button>

    </form>
</div>