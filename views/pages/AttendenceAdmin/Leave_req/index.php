<?php $leave_requests = Leave::display();

// echo "<pre>";
// print_r($leave_requests);
// echo "</pre>";
$leave_status = Request::display();
$employees = Employee::display();


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


                <a href="<?php echo $base_url ?>/leave_req/create" class="btn add-btn" data-bs-target="#add_leave"><i class="fa fa-plus"></i> Add Leave</a>

            </div>

        </div>
    </div>
    <!-- /Page Header -->


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
                <select id="status_name" class="form-select form-control">
                    <option data-select2-id="select2-data-6-hunw"> -- Select -- </option>
                    <?php foreach ($leave_status as $status): ?>
                        <option> <?= $status['status_name'] ?> </option>
                    <?php endforeach; ?>
                    <!-- <option> Approved </option>
                    <option> Rejected </option> -->
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
                                        <th style="width: 271.328px;">#</th>
                                        <th style="width: 271.328px;">Employee</th>
                                        <th style="width: 100.312px;">Leave Type</th>
                                        <th>From</th>
                                        <th style="width: 72.2031px;">To</th>
                                        <th style="width: 75.0156px;">No of Days</th>
                                        <th style="width: 108.5px;">Reason</th>
                                        <th style="width: 109.797px;">Status</th>
                                        <th style="width: 52.2656px;">Actions</th>
                                    </tr>
                                </thead>

                                <?php foreach ($leave_requests as $key => $value): ?>
                                    <tbody>
                                        <tr class="odd">
                                            <td><?= $key + 1 ?></td>
                                            <td class="sorting_1">
                                                <span>E-0<?= $value['eid'] ?></span>
                                                <h2 class="table-avatar">
                                                    <a href="" class="avatar"><img src="<?= $base_url ?>/img/employees/<?php echo $value['image'] ?>" alt="User Image"></a>

                                                    <a> <?= $value['employee_name'] ?> <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td><?= $value['type'] ?></td>
                                            <td><?= date("j M Y", strtotime($value['start_date']))
                                                ?></td>
                                            <td><?= date("j M Y", strtotime($value['end_date'])) ?></td>
                                            <td><?= $value['no_of_leave'] ?></td>
                                            <td><?= $value['reason'] ?></td>
                                            <td class="text-center">
                                                <span class="badge rounded-pill bg-primary"><?php echo $value['status'] ?></span>

                                            </td>
                                            <td class="text-end">
                                                <button class="btn btn-success" data-id="<?= $value['id'] ?>" id="btnApprove">Approve</button>
                                                <button class="btn btn-primary" data-id="<?= $value['id'] ?>" id="btnDecline">Decline</button>
                                                <button class="btn btn-danger" data-id="<?= $value['id'] ?>" id="btnDecline"><a href="<?php echo $base_url ?>/leave_req/delete/<?php echo $value['id'] ?>">Delete</a></button>

                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
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
    $(function() {

        $("tbody").on("click", "#btnApprove", function() {
            let approve_id = $(this).data("id");
            let status_name = $(this).text();
            // console.log(status_name);

            $.ajax({
                url: "<?php echo $base_url ?>/api/leave/get_leave",
                type: "get",
                data: {
                    id: approve_id

                },
                success: function(res) {
                    // console.log(res);
                    // console.log(res.leave.leave_request_status_id);

                    $.ajax({
                        url: "<?php echo $base_url ?>/Api/leaveStatus/search",
                        type: "GET",
                        data: {
                            status: status_name
                        },
                        success: function(res) {
                            //    console.log(res);
                            let data = JSON.parse(res);
                            //    console.log(data.id.id);
                            let data_id = data.id.id;

                            $.ajax({
                                url: "<?php echo $base_url ?>/api/leave/update",
                                type: "Get",
                                data: {
                                    id: approve_id,
                                    status_id: data_id
                                },
                                success: function(res) {
                                    console.log(res);
                                    let reload = JSON.parse(res)
                                    if (reload.updated_data) {
                                        window.location.reload(true);
                                    }
                                },
                                error: function(error) {
                                    console.log(error);
                                }
                            })
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })

                },
                error: function(error) {
                    console.log(error);
                }
            })


        })

        // copy from approve

        $("tbody").on("click", "#btnDecline", function() {
            let decline_id = $(this).data("id");
            let status_name = $(this).text();
            // console.log(status_name);

            $.ajax({
                url: "<?php echo $base_url ?>/api/leave/get_leave",
                type: "get",
                data: {
                    id: decline_id

                },
                success: function(res) {
                    // console.log(res);
                    // console.log(res.leave.leave_request_status_id);

                    $.ajax({
                        url: "<?php echo $base_url ?>/Api/leaveStatus/search",
                        type: "GET",
                        data: {
                            status: status_name
                        },
                        success: function(res) {
                            //    console.log(res);
                            let data = JSON.parse(res);
                            //    console.log(data.id.id);
                            let data_id = data.id.id;

                            $.ajax({
                                url: "<?php echo $base_url ?>/api/leave/update",
                                type: "Get",
                                data: {
                                    id: decline_id,
                                    status_id: data_id
                                },
                                success: function(res) {
                                    console.log(res);
                                    let reload = JSON.parse(res)
                                    if (reload.updated_data) {
                                        window.location.reload(true);
                                    }
                                },
                                error: function(error) {
                                    console.log(error);
                                }
                            })
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })

                },
                error: function(error) {
                    console.log(error);
                }
            })


        })

    })
</script>