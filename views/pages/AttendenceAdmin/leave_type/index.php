
<?php
   $results= Leave_type::display();
?>
<div class="container p-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">UserName</th>
                <th scope="col">Total Leave</th>
               
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $row):?>
            <tr>
                <th scope="row"><?=$row['id']?></th>
                <th scope="row"><?=$row['name']?></th>
                <th scope="row"><?=$row['total_leaves']?></th>
            </tr>   
            <?php endforeach ; ?> 
        <tbody>
    </table>
    <a href="<?= $base_url?>/leave_type/create" class="btn btn-info">Add leave Type</a>
</div>
