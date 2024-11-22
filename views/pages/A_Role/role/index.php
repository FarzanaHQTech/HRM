
<?php
   $results= Role::display();
?>
<div class="container p-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">UserName</th>
                <th scope="col">Created Time</th>
                <th scope="col">Action</th>
               
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $row):?>
            <tr>
                <th scope="row"><?=$row['id']?></th>
                <th scope="row"><?=$row['role_name']?></th>
                <th scope="row"><?=$row['created_at']?></th>
                <th scope="row">
                <a href="<?=$base_url?>/role/edit/<?=$row['id']?>" class="btn btn-secondary">Edit</a>
                    <a href="<?=$base_url?>/role/delete/<?=$row['id']?>" class="btn btn-danger">Delete</a>
                </th>
            </tr>   
            <?php endforeach ; ?> 
        <tbody>
    </table>
    <a href="<?= $base_url?>/role/create" class="btn btn-info">Add Role</a>
</div>
