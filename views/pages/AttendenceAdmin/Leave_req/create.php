<?php
$leave_types = Leave_type::display();
$request_status = Request::display();
$employees = Allemployee::display();
$payslip_item = PayslipItem::all();
// print_r($payslip_item);

?>

<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add Leave</h5>
    </div>
    <hr>
    <div class="modal-body">
        <form action="<?php echo $base_url ?>/leave_req/save" method="post">

            <div class="form-group row mb-3">
                <label for="employee_id" class="col-sm-3 col-form-label">Employee Id <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-select form-control" name="employee_id">
                        <option data-select2-id="select2-data-9-qbz4">Select Leave Type</option>
                        <?php foreach ($employees as $value): ?>
                            <option value="<?= $value['id'] ?>"><?= ($value['first_name'] . ' ' . $value['last_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-sm-3 col-form-label">Leave Type <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-select form-control" name="leave_type_id">
                        <option data-select2-id="select2-data-9-qbz4">Select Leave Type</option>
                        <?php foreach ($leave_types as $value): ?>
                            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="start_date" class="col-sm-3 col-form-label">From <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input id="start_date" class="form-control" type="date" name="start_date">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="end_date" class="col-sm-3 col-form-label">To <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input id="end_date" class="form-control" type="date" name="end_date">
                </div>
            </div>
            <input type="hidden" name="payslip_item_id">
            <!-- <div class="form-group row mb-3">
                <label class="col-sm-3 col-form-label">Payslip Item <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-select form-control" name="payslip_item_id">
                        <option value="">Select Payslip Item</option>
                        <?php //foreach ($payslip_item as $item): 
                        ?>
                            <option value="<? //= $item->id 
                                            ?>"><? //= htmlspecialchars($item->name) 
                                                ?></option>
                        <?php //endforeach; 
                        ?>
                    </select>
                </div>
            </div> -->


            <div class="form-group row mb-3">
                <label class="col-sm-3 col-form-label">Leave Status</label>
                <div class="col-sm-9">
                    <select class="form-select form-control" name="leave_status_id">
                        <option data-select2-id="select2-data-9-qbz4">Leave status</option>
                        <?php foreach ($request_status as $value): ?>
                            <option value="<?= $value['id'] ?>"><?= $value['status_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-sm-3 col-form-label">Leave Reason <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <textarea rows="4" class="form-control" name="reason"></textarea>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-9 offset-sm-3">
                    <button class="btn btn-primary submit-btn" name="leaveCreate">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>