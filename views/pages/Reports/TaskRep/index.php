<?php $tasks = Task::display();
// print_r($tasks);
?>
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Task Reports</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Task Reports</li>
                </ul>
            </div>
            <div class="col-auto">
                <a href="#" class="btn btn-primary btn_print" onclick="print()">PDF</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <!-- <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length">
                                <label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label>
                            </div>
                        </div> -->
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 37.2969px;">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Task Name: activate to sort column ascending" style="width: 239.719px;">Task Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending" style="width: 132.953px;">Start Date</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="End Date: activate to sort column descending" aria-sort="ascending" style="width: 128.453px;">End Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 132.656px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Assigned To: activate to sort column ascending" style="width: 144.922px;">Assigned To</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($tasks as $task) : ?>
                                        <tr class="odd">
                                            <td class=""><?php echo $task['id'] ?></td>
                                            <td><?= $task['task'] ?></td>
                                            <td><?= $task['assigned_date'] ?></td>
                                            <td class="sorting_1"><?= $task['completion_date'] ?></td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="#" class="btn btn-white btn-sm btn-rounded"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>

                                                </div>
                                            </td>
                                            <td>
                                                <?= $task['assigned_date'] ?>
                                                <!-- <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" title="" data-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                                    </li> -->
                                                </ul>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <!-- <tr class="even">
                                        <td class="">2</td>
                                        <td>Hospital Administration</td>
                                        <td>26 Mar 2019</td>
                                        <td class="sorting_1">26 Apr 2021</td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>

                                            </div>
                                        </td>
                                        <td>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" data-bs-toggle="tooltip" title="" data-original-title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="fa fa-angle-double-left"></i> </a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link"> <i class=" fa fa-angle-double-right"></i></a></li></ul></div></div></div></div>
							</div> -->
                </div>
            </div>

            <!-- /Content End -->

        </div>