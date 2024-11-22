<?php $departments = Department::display();
//print_r($departments);

if (!$departments) {
    echo "somting went wrong" . $db->error;
}
?>

<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Department</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $base_url?>/home">Dashboard</a></li>
                    <li class="breadcrumb-item active">Department</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="<?php echo $base_url ?>/Department/create" class="btn add-btn "><i class="fa-solid fa-plus"></i>Add Department</a>

            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-12">
            <div>
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="width-thirty sorting_asc" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 30px;">#</th>
                                        <th class="sorting" rowspan="1" colspan="1" aria-label="Department Name: activate to sort column ascending" style="width: 639.453px;">Department Name</th>
                                        <th class="text-end sorting" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 255.547px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($departments as $value): ?>
                                        <tr class="odd">
                                            <td class="sorting_1"><?php echo $value['id'] ?></td>
                                            <td><?php echo  $value['department_name'] ?></td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="<?php echo $base_url ?>/department/edit/<?= $value['id'] ?>" data-bs-target="#edit_department"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="<?php echo $base_url ?>/department/delete/<?= $value['id'] ?>" data-bs-target="#delete_department"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_department"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_department"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div> -->
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
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div>
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