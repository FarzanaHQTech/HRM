<?php

$holidays = Holiday::display();
$currentYear = date("Y");
?>

<div class="content container-fluid">

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Holidays <?= $currentYear ?></h3> <!-- Dynamic Year -->

                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Holidays</li>
                </ul>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title </th>
                            <th>Holiday Date</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($holidays as $value): ?>
                            <tr class="holiday-completed">
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['holiday_name'] ?></td>
                                <td><?= $value['holiday_date'] ?></td>
                                <td><a href="<?php echo $base_url ?>/holiday/edit/<?= $value['id'] ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo $base_url ?>/holiday/delete/<?= $value['id'] ?>" class="btn btn-danger text-white">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Holiday Modal -->

<div id="addHolidayModal" class="modal fade" tabindex="-1" aria-labelledby="addHolidayModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addHolidayModalLabel">Add Holiday</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="holidayForm" action="<?php echo $base_url ?>/holiday/save" method="post">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Holiday Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="holiday_name" id="holiday_name" required>
                    </div>
                    <div class="input-block mb-3">
                        <label class="col-form-label">Holiday Date <span class="text-danger">*</span></label>
                        <input class="form-control" type="date" name="holiday_date" id="holiday_date" required>
                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn" name="btnCreate" id="btnSave">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>