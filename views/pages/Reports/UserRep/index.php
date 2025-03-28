<?php $users = User::display(); ?>
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">User Report</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $base_url ?>/home">Dashboard</a></li>
                    <li class="breadcrumb-item active">User Reports</li>
                </ul>
            </div>
        </div>
    </div>

</div>
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
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 11.1094px;">#</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 248.875px;">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 125.781px;">Company</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 171.391px;">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 43.2969px;">Role</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Designation: activate to sort column ascending" style="width: 99.2656px;">Designation</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 74.9688px;">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($users as $user): ?>
                                    <tr class="odd">
                                        <td class="sorting_1"><?= $user['id'] ?><span></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <!-- <a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a> -->
                                                <a href="profile.html"><?= $user['username'] ?><span></span></a>
                                            </h2>

                                        </td>
                                        <td><?= $user['company'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td>
                                            <span class="badge bg-inverse-info"><?= $user['role'] ?></span>
                                        </td>
                                        <td>CEO</td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a href="#" class="btn btn-white btn-sm btn-rounded"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>

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
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div>
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

<!-- /Content End -->

</div>