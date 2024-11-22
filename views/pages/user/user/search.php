<?php
// echo User::search($id);

?>
<form action="<?= $base_url?>/user/search_all" class=" w-50   mx-5"   method="post">
    <label for="">Search User</label>
        <input class="form-control me-2" type="search" placeholder="Give id" aria-label="Search" name="id"><br>
        <button type="submit" class="btn btn-success"  name="btnSearch">Search</button>
        <!-- <button class="btn btn-success" type="submit" name="btnSearch">Search</button> -->
</form>