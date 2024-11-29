<?php
$leave_types = Leave_type::display();
$request_status = Request::display();

?>

<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add Leave</h5>
    </div>
    <div class="modal-body">
        <form action="<?php echo $base_url ?>/leave_req/save" method="post">
            <div class="input-block mb-3">
                <label class="col-form-label mt-5">Leave Type <span class="text-danger">*</span></label>
                <select class="form-select form-control w-50 " name="leave_type_id">
                    <option data-select2-id="select2-data-9-qbz4">Select Leave Type</option>
                    <?php foreach ($leave_types as $value): ?>
                        <option value="<?= $value['id'] ?>">
                            <?= $value['name']?></option>
                    <?php endforeach; ?>


                </select>


            </div>
            <div class="input-block mb-3">
                <label class="col-form-label">Employee Id <span class="text-danger">*</span></label>
                <input id="employee_id" class="form-control " type="text" name="employee_id">
            </div>
            <div class="input-block mb-3">
                <label class="col-form-label">From <span class="text-danger">*</span></label>
                <input id="start_date" class="form-control datetimepicker" type="date" name="start_date">
            </div>
            <div class="input-block mb-3">
                <label class="col-form-label">To <span class="text-danger">*</span></label>

                <input id="end_date" class="form-control datetimepicker" type="date" name="end_date">

            </div>
            <div class="input-block mb-3">
                <label class="col-form-label">Number of days <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="no_of_leave">
            </div>
            <!-- <div class="input-block mb-3">
                <label class="col-form-label">Remaining Leaves <span class="text-danger">*</span></label>
                <input class="form-control" value="" type="text" name="remaining_date">
            </div> -->
            <div class="input-block mb-3">
                <select class="form-select form-control" name="leave_status_id">
                    <option data-select2-id="select2-data-9-qbz4">Leave status </option>
                    <?php foreach ($request_status as $value): ?>
                        <option><?= $value['status_name'] ?></option>
                        <!-- <option>Medical Leave</option>
                                <option>Loss of Pay</option> -->
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="input-block mb-3">
                <label class="col-form-label">Leave Reason <span class="text-danger">*</span></label>
                <textarea rows="4" class="form-control" name="reason"></textarea>
            </div>
            <div class="submit-section">
                <button class="btn btn-primary submit-btn" name="leaveCreate">Submit</button>
            </div>
        </form>
    </div>
</div>