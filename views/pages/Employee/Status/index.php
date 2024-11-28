
<?php
   $results= Status::display();
?>
<div class="container p-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Status Name</th>
               
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $row):?>
            <tr>
                <th scope="row"><?=$row['id']?></th>
                <th scope="row"><?=$row['status_name']?></th>
            </tr>   
            <?php endforeach ; ?> 
        <tbody>
    </table>
    <a href="<?= $base_url?>/status/create" class="btn btn-info">Add Status</a>
</div>