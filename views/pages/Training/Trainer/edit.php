<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add New Trainer</h5>
    </div>
    <div class="modal-body">
        <form>
            <table>
                <div class="row" id="selected">
                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Trainer Name <span class="text-danger">*</span></label>
                            <!-- <input class="form-control" type="text"> -->
                            <select class="form-select form-controll" name="employee_id" id="employee_id">
                                <option value=""><?= $trainer->full_name ?></option>
                                <?php foreach ($employees as $employee): ?>
                                    <option value="<?php echo $employee['id'] ?>"><?= ($employee['first_name'] . ' ' . $employee['last_name']) ?></option>
                                <?php endforeach; ?>
                                <!-- <option>Inactive</option> -->
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Desgination<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="designation" id="designation" value=" <?= $trainer->designation ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Email <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="email" id="email" value=" <?= $trainer->email ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Phone </label>
                            <input class="form-control" type="text" name="phone" id="phone" value="<?= $trainer->mobile ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Status</label>
                            <select class="form-select form-controll" name="status" id="status_id">
                                <option value=""> <?= $trainer->status ?></option>
                                <?php foreach ($Status as $value): ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['status_name'] ?></option>
                                <?php endforeach; ?>
                                <!-- <option>Inactive</option> -->
                            </select>

                        </div>
                    </div>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn" name="btnUpdate" id="trainer_submit">Submit</button>
                </div>
            </table>
        </form>
    </div>
</div>