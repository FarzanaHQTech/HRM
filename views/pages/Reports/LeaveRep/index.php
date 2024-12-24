<?php $leaves = Leave::display();
// print_r($leaves);

$leave_type = Leave_type::display();
// print_r($leave_type);
?>
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Leave Report</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Leave Report</li>
                </ul>
            </div>
            <div class="col-auto">
                <a href="#" class="btn btn-primary btn_print" onclick="print()">PDF</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Search Filter -->
    <!-- <div class="row filter-row mb-4">
        <div class="col-sm-6 col-md-3">
            <div class="input-block mb-3 form-focus">
                <input class="form-control floating" type="text">
                <label class="focus-label">Employee</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="input-block mb-3 form-focus select-focus focused">
                <select class="select floating select2-hidden-accessible" data-select2-id="select2-data-1-8lbw" tabindex="-1" aria-hidden="true">
                    <option data-select2-id="select2-data-3-v3t4">Select Department</option>
                    <option>Designing</option>
                    <option>Development</option>
                    <option>Finance</option>
                    <option>Hr &amp; Finance</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-3zyx" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kent-container" aria-controls="select2-kent-container"><span class="select2-selection__rendered" id="select2-kent-container" role="textbox" aria-readonly="true" title="Select Department">Select Department</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                <label class="focus-label">Department</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="input-block mb-3 form-focus">
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
                <label class="focus-label">From</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="input-block mb-3 form-focus">
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
                <label class="focus-label">To</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="#" class="btn btn-success w-100"> Search </a>
        </div>
    </div> -->
    <!-- /Search Filter -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <!-- <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div> -->
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee: activate to sort column descending" style="width: 179.547px;">Employee</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 78.1094px;">Date</th>
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 116.672px;">Department</th> -->
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Leave Type: activate to sort column ascending" style="width: 126.484px;">Leave Type</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="No.of Days: activate to sort column ascending" style="width: 75.2344px;">No.of Days</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Remaining Leave: activate to sort column ascending" style="width: 116.391px;">Remaining Leave</th>
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Total Leaves: activate to sort column ascending" style="width: 84.6875px;">Total Leaves</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Total Leave Taken: activate to sort column ascending" style="width: 122px;">Total Leave Taken</th> -->
                                        <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Leave Carry Forward: activate to sort column ascending" style="width: 143.984px;">Leave Carry Forward</th> -->
                                    </tr>
                                </thead>
                                <tbody>




                                    <?php foreach ($leaves as $leave): ?>
                                        <tr class="odd">
                                            <td class="sorting_1">
                                                <h2 class="table-avatar">
                                                    <a href="<?php echo $base_url ?>/employees/<?php echo $leave['eid'] ?>" class="avatar"><img src="<?php echo $base_url ?>/img/employees/<?php echo $leave['image'] ?> " alt="User Image"></a>
                                                    <a href="profile.html"><?php echo $leave['employee_name'] ?> <span>#000<?php echo $leave['eid'] ?> </span></a>
                                                </h2>
                                            </td>
                                            <td><?php echo $leave['start_date'] ?></td>
                                            <!-- <td>Design</td> -->
                                            <td class="text-center">
                                                <button class="btn btn-outline-info btn-sm"><?php echo $leave['type'] ?></button>
                                            </td>
                                            <td class="text-center"><span class="btn btn-danger btn-sm"><?php echo $leave['no_of_leave'] ?></span></td>
                                            <td class="text-center"><span class="btn btn-warning btn-sm"><b><?php echo $leave['remaining_leave'] ?></b></span></td>

                                            <!-- <?php //foreach ($leave_type as $type): 
                                                    ?>
                                                <td class="text-center"><span class="btn btn-success btn-sm"><b><?php ?></b></span></td>
                                            <?php //endforeach; 
                                            ?>
                                            <td class="text-center">12</td> -->
                                            <!-- <td class="text-center">08</td> -->
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i> </a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link"> <i class=" fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>