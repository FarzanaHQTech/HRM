<?php $employees = Allemployee::display();
$provident_types = ProvidentType::all();
?>
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add Provident Fund</h5>

    </div>
    <div class="modal-body">
        <form action="<?php echo $base_url ?>/provident_fund/save " method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-block mb-3" data-select2-id="select2-data-14-hx2s">
                        <label class="col-form-label">Employee Name</label>
                        <select class="form-select form-control " name="employee">
                            <?php foreach ($employees as $employee): ?>
                                <option value="<?= $employee['id'] ?>" data-select2-id="select2-data-3-uq02"><?= ($employee['first_name'] . ' ' . $employee['last_name']) ?> (#00<?= $employee['id'] ?>)</option>
                                <!-- <option value="23" data-select2-id="select2-data-17-mgvf">Richard Miles (FT-0002)</option> -->
                            <?php endforeach; ?>

                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Provident Fund Type</label>

                        <select class="form-select form-control " name="provident_type">
                            <?php foreach ($provident_types as $provident_type): ?>
                                <option value="<?= $provident_type->id ?>" data-select2-id="select2-data-3-uq02"><?= $provident_type->type_name ?></option>
                                <!-- <option value="23" data-select2-id="select2-data-17-mgvf">Richard Miles (FT-0002)</option> -->
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="show-fixed-amount">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Employee Share (Amount)</label>
                                    <input class="form-control" type="text" name="emp_amount">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Organization Share (Amount)</label>
                                    <input class="form-control" type="text" name="org_amount">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="show-basic-salary">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Employee Share (%)</label>
                                    <input class="form-control" type="text" name="employee_share">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Organization Share (%)</label>
                                    <input class="form-control" type="text" name="organization_share">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Description</label>
												<textarea class="form-control" rows="4"></textarea>
											</div>
										</div> -->
            </div>
            <div class="submit-section">
                <button class="btn btn-primary submit-btn" name="btnCreate">Submit</button>
            </div>
        </form>
    </div>
</div>