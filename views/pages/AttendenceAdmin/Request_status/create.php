
<?php ?>
<h2 class="text-center">Add Status</h2>
<div class="container  w-50 p-3">
    <form action="<?php echo $base_url?>/request/save" method="post">
        
        <div class="mb-3">
            <label for="" class="form-label">Request Status</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="req_name">
        </div>
       
        <button type="submit" class="btn btn-primary" name="btnCreate">Create Status</button>
    </form>
</div>