<?php
   $results= User::display();
   if (empty($results)) {
    echo "No users found.";
    
}
   //print_r($results['username']);
   //die();
?>
<div class="container p-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Role</th>
                <th scope="col">Company</th>
                
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $row):?>
            <tr>
                <th scope="row"><?=$row['id']?></th>
                <th scope="row"><?=$row['username']?></th>
                <th scope="row"><?=$row['email']?></th>
                <th scope="row"><?=$row['mobile']?></th>
                <th scope="row"><?=$row['role']?></th>
                <th scope="row"><?=$row['company']?></th>
                
                <th scope="row">
                <a href="<?=$base_url?>/user/search/" class="btn btn-success">Details</a>
                <a href="<?=$base_url?>/user/edit/<?=$row['id']?>" class="btn btn-secondary">Edit</a>
                    <a href="<?=$base_url?>/user/delete/<?=$row['id']?>" class="btn btn-danger">Delete</a>
                  
                </th>
            </tr>   
            <?php endforeach ; ?> 
        <tbody>
    </table>
    <a href="<?php echo $base_url?>/user/create" class="btn btn-primary">Add User</a>
</div>
