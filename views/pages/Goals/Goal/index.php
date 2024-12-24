<?php $goals = Goal::display(); ?>
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Goal Tracking</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Goal Tracking</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="<?php echo $base_url ?>/Goal/create" class="btn add-btn"><i class="fa-solid fa-plus"></i> Add New</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">

                        </div>
                        <div class="col-sm-12 col-md-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th style="width: 11.1094px;">#</th>
                                        <th style="width: 92.8281px;">Goal Type</th>
                                        <!-- <th style="width: 56.9531px;">Subject</th> -->
                                        <th style="width: 138.281px;">Target Achievement</th>
                                        <th style="width: 70.125px;">Start Date</th>
                                        <th style="width: 75.2969px;">End Date</th>
                                        <!-- <th style="width: 119.109px;">Description </th style="width: 97.4531px;">Status </th> -->
                                        <th aria-labstyle="width: 105.188px;">Progress </th>
                                        <th umn ascending" style="width: 45.4062px;">Progress %</th>
                                    </tr>
                                </thead>
                                <tbody>



                                    <?php foreach ($goals as $goal): ?>

                                        <tr class="odd">
                                            <td class="sorting_1"><?= $goal['id'] ?></td>
                                            <td><?= $goal['goal_type_name'] ?></td>
                                            <td>Test Goal</td>
                                            <!-- <td>Lorem ipsum dollar</td> -->
                                            <td>
                                                <?= date("m F, Y", strtotime($goal['start_date'])) ?>
                                            </td>
                                            <td> <?= date("m F, Y", strtotime($goal['end_date'])) ?></td>
                                            <!-- <td>Lorem ipsum dollar</td> -->
                                            <td>
                                                <?= $goal['status'] ?>
                                                <!-- <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                                    </div>
                                                </div> -->
                                            </td>
                                            <td>
                                                <p class="mb-1">Completed 73%</p>
                                                <div class="progress height-5">
                                                    <div class="progress-bar bg-primary progress-sm w-73 height-10"></div>
                                                </div>
                                            </td>

                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" data-bs-toggle="dropdown"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-target="#edit_goal"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-target="#delete_goal"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
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