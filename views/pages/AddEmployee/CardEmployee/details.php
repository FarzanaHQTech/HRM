<?php  $employees = Allemployee::search($id)?>

<div class="row staff-grid-row">
    <?php foreach ($employees as $employee): ?>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="profile.html" class="avatar">
                        <img src="<?= $base_url ?>/img/employees/<?= $employee['image'] ?>" alt="User Image">
                    </a>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis">
                    <a href="profile.html"><?= $employee->first_name. " " . $employees->lastname?></a>
                </h4>
                <div class="small text-muted"><?= $employees['designation'] ?></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
