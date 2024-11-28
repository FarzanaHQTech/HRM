
<?php ?>
<h2 class="text-center">Add leave Type</h2>
<div class="container  w-50 p-3">
    <form action="<?php echo $base_url?>/leave_type/save" method="post">
        
        <div class="mb-3">
            <label for="" class="form-label">Leave Type</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Total Leaves</label>
            <input type="text" class="form-control" id="" aria-describedby="" name="total_leaves">
        </div>
       
        <button type="submit" class="btn btn-primary" name="btnCreate">Create type</button>
    </form>
</div>