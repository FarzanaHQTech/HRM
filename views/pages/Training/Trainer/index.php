<?php $trainers = Trainer::display();
// print_r($trainers);

?>

<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Trainers</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Trainers</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="<?php echo $base_url ?>/trainer/create" class="btn add-btn" data-bs-target="#add_trainer"><i class="fa-solid fa-plus"></i> Add New</a>
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
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>

                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="width-thirty sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 30px;">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name : activate to sort column ascending" style="width: 149.969px;">Name </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Contact Number : activate to sort column ascending" style="width: 123.188px;">Contact Number </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email : activate to sort column ascending" style="width: 189.625px;">Email </th>

                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status : activate to sort column ascending" style="width: 104.359px;">Status </th>
                                        <th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 49.7812px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>




                                    <?php foreach ($trainers as $trainer): ?>
                                        <tr class="odd">
                                            <td class="sorting_1"><?php echo $trainer['id'] ?></td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar"><img src="<?= $base_url ?>/img/employees/<?php echo $trainer['image'] ?>" alt="User Image"></a>
                                                    <a href="profile.html"><?php echo $trainer['full_name'] ?></a>
                                                </h2>
                                            </td>
                                            <td><?php echo $trainer['mobile'] ?></td>
                                            <td><?php echo $trainer['email'] ?></td>
                                            <!-- <td>Lorem ipsum dollar</td> -->
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded " href="#">
                                                        <i class="fa-regular fa-circle-dot text-danger"></i> <?php echo $trainer['status'] ?>
                                                    </a>
                                                </div>
                        </div>
                        </td>
                        <!-- <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-target="#edit_type"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-target="#delete_type"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                </div>
                            </div>
                        </td> -->
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php echo $base_url ?>/trainer/edit/<?php echo $trainer['id'] ?>"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="<?php echo $base_url ?>/trainer/delete/<?php echo $trainer['id'] ?>"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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