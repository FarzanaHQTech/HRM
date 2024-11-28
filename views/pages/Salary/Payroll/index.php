
<?php
   $results= Payroll::display();
?>
<div class="container p-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Employee Name</th>
                <th scope="col">Basic Salary</th>
                <th scope="col">Action</th>
               
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $row):?>
            <tr>
                <th scope="row"><?=$row['id']?></th>
                <th scope="row"><?=$row['employee_id']?></th>
                <th scope="row"><?=$row['basic_salary']?></th>
                <th scope="row">
                <a href="<?=$base_url?>/payroll/edit/<?=$row['id']?>" class="btn btn-secondary">Edit</a>
                    <a href="<?=$base_url?>/payroll/delete/<?=$row['id']?>" class="btn btn-danger">Delete</a>
                </th>
            </tr>   
            <?php endforeach ; ?> 
        <tbody>
    </table>
    <a href="<?= $base_url?>/payroll/create" class="btn btn-info">Make Salary</a>
</div>
