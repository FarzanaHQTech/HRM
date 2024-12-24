<?php $provident = Provident::display() ?>

<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Provident Fund</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Provident Fund</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="<?php echo $base_url ?>/provident_fund/create" class="btn add-btn" data-bs-target="#add_pf"><i class="fa-solid fa-plus"></i> Add Provident Fund</a>
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
                            <!-- <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
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
                                <table class="table table-striped custom-table datatable mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee Name: activate to sort column descending" style="width: 213.266px;">Employee Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Provident Fund Type: activate to sort column ascending" style="width: 176.484px;">Provident Fund Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Employee Share: activate to sort column ascending" style="width: 119.25px;">Employee Share</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Organization Share: activate to sort column ascending" style="width: 142.094px;">Organization Share</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 107.156px;">Status</th>
                                            <th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 57.75px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($provident as $provident): ?>
                                            <tr class="odd">
                                                <td class="sorting_1">
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar"><img src="<?php echo $base_url ?>/img/employees/<?php echo $provident['image'] ?>" alt="User Image"></a>
                                                        <a href="profile.html"><?php echo $provident['full_name'] ?><span>(#00<?php echo $provident['id'] ?>)</span></a>
                                                    </h2>
                                                </td>
                                                <td><?php echo $provident['type'] ?></td>
                                                <td><?php echo $provident['employee_share'] ?>%</td>
                                                <td><?php echo $provident['organization_share'] ?>%</td>
                                                <td>
                                                    <div class="dropdown action-label">
                                                        <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" aria-expanded="false">
                                                            <i class="fa-regular fa-circle-dot text-danger"></i> Pending
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Pending</a>
                                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Approved</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="<?= $base_url ?>/provident_fund/edit<?php echo $provident['id'] ?>" data-bs-target="#edit_pf"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="<?= $base_url ?>/provident_fund/edit<?php echo $provident['id'] ?>" data-bs-target="#delete_pf"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>