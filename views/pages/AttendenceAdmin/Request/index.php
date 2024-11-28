
<?php
   $results= Request::display();
?>
<div class="container p-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">UserName</th>
               
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
    <a href="<?= $base_url?>/request/create" class="btn btn-info">Add Status</a>
</div>
