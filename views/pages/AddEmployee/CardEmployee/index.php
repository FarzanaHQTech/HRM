<?php $employees = Allemployee::display();?>


<div class="content container-fluid pb-0">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Employee</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Employee</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="<?php echo $base_url ?>/cardemployee/create" class="btn add-btn"><i class="fa-solid fa-plus"></i> Add Employee</a>
                <div class="view-icons">
                    <a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                    <a href="employees-list.html" class="list-view btn btn-link"><i class="fa-solid fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Search Filter -->
     <form action="<?php echo $base_url?>/details" method="post">
    <div class="row filter-row">
        <div class="col-sm-6 col-md-3">
            <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating" name="id">
                <label class="focus-label" >Employee ID</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating" name="first_name">
                <label class="focus-label" >Employee Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="input-block mb-3 ">
                <select class="form-select form-control">
                    <option data-select2-id="select2-data-3-1eur">Select Designation</option>
                    <?php //foreach($employees as $value):?>
                    <option value=></option>
                    <!-- <option>Web Designer</option>
                    <option>Android Developer</option>
                    <option>Ios Developer</option> -->
                    <?php //endforeach;?>
                </select>

            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="d-grid">
            <!-- <button type="submit" class="btn btn-success text-white" name="btnSearch">Search</button> -->
               <button class="btn btn-success  text-white" name="btnUpdate"> <a href="<?php echo $base_url?>/cardemployee/details" class="text-decoration-none text-reset"> Search </a></button>
            </div>
        </div>
    </div>
    </form>
    <!-- Search Filter -->

    <div class="row staff-grid-row">
        <?php foreach($employees as $values):?>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="profile.html" class="avatar"><img src="<?= $base_url ?>/img/employees/<?php echo $values['image']?>" alt="User Image"></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right" style="">
                        <a class="dropdown-item" href="#"  data-bs-target="#edit_employee"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html"><?php echo $values['first_name']."".$values['last_name']?></a></h4>
                <div class="small text-muted"><?= $values['designation'] ?></div>
            </div>
        </div>
        <?php endforeach;?>

    </div>
</div>
