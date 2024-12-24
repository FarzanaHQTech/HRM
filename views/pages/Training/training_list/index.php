<?php $trainings = Training_list::display();
// echo "<pre>";
// print_r($trainings);
// echo "</pre>";
// die();

// Fetch current page and set items per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = 5;

// Fetch paginated results
$pagination = Training_list::pagination($page, $perpage);
$trainings = $pagination['data'];
$totalRows = $pagination['total'];

// Calculate total pages
$totalPages = ceil($totalRows / $perpage);
?>
<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Training</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Training</li>
                </ul>
            </div>
            <div class="col-auto float-end ms-auto">
                <a href="<?php echo $base_url ?>/training_list/create" class="btn add-btn"><i class="fa-solid fa-plus"></i> Add New </a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped custom-table mb-0 ">
                            <thead>
                                <tr role="row">
                                    <th style="width: 11.1094px;">#</th>
                                    <th style="width: 101.844px;">Training Type</th>
                                    <th style="width: 140.922px;">Trainer</th>
                                    <th style="width: 67.3438px;">Employee</th>
                                    <th style="width: 156.406px;">Time Duration</th>
                                    <th style="width: 119.109px;">Description </th>
                                    <th style="width: 32.125px;">Cost </th>
                                    <th style="width: 97.4531px;">Status </th>
                                    <th class="text-end sorting" tabindex="0" style="width: 45.4062px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>




                                <?php foreach ($trainings as $training): ?>
                                    <tr class="odd">
                                        <td class="sorting_1"><?php echo $training['id'] ?></td>
                                        <td><?php echo $training['tname'] ?></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img src="<?php echo $base_url ?>/img/employees/<?php echo $training['image'] ?>" alt="User Image"></a>
                                                <a href="profile.html"><?php echo $training['trainer_name'] ?></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <ul class="team-members">
                                                <li>
                                                    <?php echo $training['team'] ?>

                                                </li>
                                                <li>
                                                    <?php echo $training['team'] ?>

                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                                    <div class="dropdown-menu dropdown-menu-right" style="">
                                                        <div class="avatar-group">
                                                            <a class="avatar avatar-xs" href="#">
                                                                <!-- <img src="assets/img/profiles/avatar-02.jpg" alt="User Image"> -->
                                                                <?php echo $training['team'] ?>
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <!-- <img src="assets/img/profiles/avatar-09.jpg" alt="User Image"> -->
                                                                <?php echo $training['team'] ?>
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-11.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-12.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image">
                                                            </a>
                                                            <a class="avatar avatar-xs" href="#">
                                                                <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-pagination">
                                                            <ul class="pagination">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="#" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                        <td> <?php echo $training['start_date'] ?> - <?php echo $training['end_date'] ?></td>
                                        <td>Lorem ipsum dollar</td>
                                        <td><?php echo $training['cost'] ?></td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i>
                                                    <?php echo $training['status'] ?>
                                        </td>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                            <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                        </div>
                    </div>
                    </td>
                    <td class="text-end">
                        <div class="dropdown dropdown-action">
                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-bs-target="#edit_training"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                <a class="dropdown-item" href="<?php echo $base_url ?>/training_list/delete/<?= $training['id'] ?>" data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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

            </div>
            <!-- Pagination Links -->
            <nav class="mt-4">
                <ul class="pagination justify-content-center">
                    <?php if ($page > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- end  -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>