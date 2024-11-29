<?php $leave_requests = Leave::display();

$leave_status = Leave::status_check();
$employees = Employee::display();
// function getStatusClass($status) {
//     switch (strtolower($status)) {
//         case 'new':
//             return 'text-purple';
//         case 'pending':
//             return 'text-info';
//         case 'approved':
//             return 'text-success';
//         case 'declined':
//             return 'text-danger';
//         default:
//             return 'text-muted';
//     }
// }

?>
<div class="content container-fluid">

    <!-- /Page Header -->

    <!-- Page Header -->

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Leaves</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $base_url ?>/home">Dashboard</a></li>
                    <li class="breadcrumb-item active">Leaves</li>
                </ul>
            </div>

            <div class="col-auto float-end ms-auto">


                <a href="<?php echo $base_url?>/leave_req/create" class="btn add-btn"  data-bs-target="#add_leave"><i class="fa fa-plus"></i> Add Leave</a>

            </div>

        </div>
    </div>
    <!-- /Page Header -->

    <!-- Leave Statistics -->
    <div class="row">
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Today Presents</h6>
                <h4>12 / 60</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Planned Leaves</h6>
                <h4>8 <span>Today</span></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Unplanned Leaves</h6>
                <h4>0 <span>Today</span></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Pending Requests</h6>
                <h4>12</h4>
            </div>
        </div>
    </div>
    <!-- /Leave Statistics -->

    <!-- Search Filter -->
    <div class="row filter-row">
        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Employee Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="input-block mb-3 ">
                <select class="form-select form-control" data-select2-id="select2-data-1-p1og" tabindex="-1" aria-hidden="true">
                    <option data-select2-id="select2-data-3-xuy5"> -- Select -- </option>
                    <option>Casual Leave</option>
                    <option>Medical Leave</option>
                    <option>Loss of Pay</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="input-block mb-3 ">
                <select class="form-select form-control">
                    <option data-select2-id="select2-data-6-hunw"> -- Select -- </option>
                    <option> Pending </option>
                    <option> Approved </option>
                    <option> Rejected </option>
                </select>

            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="input-block mb-3 form-focus">
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
                <label class="focus-label">From</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <div class="input-block mb-3 form-focus">
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
                <label class="focus-label">To</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
            <a href="#" class="btn btn-success w-100"> Search </a>
        </div>
    </div>
    <!-- /Search Filter -->








    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee: activate to sort column descending" style="width: 271.328px;">Employee</th>
                                        <th  rowspan="1" colspan="1" aria-label="Leave Type: activate to sort column ascending" style="width: 100.312px;">Leave Type</th>
                                        >From</th>
                                        <th  rowspan="1" colspan="1" aria-label="To: activate to sort column ascending" style="width: 72.2031px;">To</th>
                                        <th  rowspan="1" colspan="1" aria-label="No of Days: activate to sort column ascending" style="width: 75.0156px;">No of Days</th>
                                        <th  rowspan="1" colspan="1" aria-label="Reason: activate to sort column ascending" style="width: 108.5px;">Reason</th>
                                        <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 109.797px;">Status</th>
                                        <th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 52.2656px;">Actions</th>
                                    </tr>
                                </thead>

<?php foreach($leave_requests as $value):?>
                                 <tbody>
                                    <tr class="odd">
                                        <td class="sorting_1">
                                            <h2 class="table-avatar">
                                                <a href="" class="avatar"><img src="<?= $base_url ?>/img/employees/<?php echo $value['image']?>" alt="User Image"></a>
                                                <a> <?= $value['employee_name']?> <span>Web Designer</span></a>
                                            </h2>
                                        </td>
                                        <td><?=$value['type']?></td>
                                        <td><?= $value['start_date']?></td>
                                        <td><?= $value['end_date']?></td>
                                        <td><?= $value['no_of_leave']?></td>
                                        <td><?= $value['reason']?></td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> <?= $value['status']?>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="<?php echo $base_url?>/leave_req/update_status"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="<?php echo $base_url?>/leave_req/edit/<?=$value['id']?>" ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="<?php echo $base_url?>/leave_req/delete/<?= $value['id']?>" ><i class="fa-regular fa-trash-can m-r-5"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- <tr class="even">
                                        <td class="sorting_1">
                                            <h2 class="table-avatar">
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile" class="avatar"><img src="https://smarthr.dreamstechnologies.com/laravel/template/public/assets/img/profiles/avatar-15.jpg" alt="User Image"></a>
                                                <a>Buster Wigton <span>Web Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>Hospitalisation</td>
                                        <td>15 Jan 2019</td>
                                        <td>25 Jan 2019</td>
                                        <td>10 days</td>
                                        <td>Going to Hospital</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Approved
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-purple"></i> New</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> Pending</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#approve_leave"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                                    <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Declined</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leave"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa-regular fa-trash-can m-r-5"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                   <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i> </a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"> <i class=" fa fa-angle-double-right"></i></a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
       
    })
</script>