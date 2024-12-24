<?php
$training_types = TrainingType::all();
$employees = Allemployee::display();
$trainers = Trainer::display();
$status = Status::display();
?>
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add New Training</h5>

    </div>
    <div class="modal-body">
        <form action="<?php echo $base_url ?>/Training_list/save" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-block mb-3" data-select2-id="select2-data-36-uggt">
                        <label class="col-form-label">Training Type</label>
                        <select class="form-select form-controll" name="training_type_id">
                            <?php foreach ($training_types as $type): ?>
                                <option value="<?php echo $type->id ?>"><?php echo $type->type_name ?></option>

                            <?php endforeach; ?>

                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3" data-select2-id="select2-data-26-g509">
                        <label class="col-form-label">Trainer</label>
                        <select class="form-select form-controll" name="trainer_id">
                            <?php foreach ($trainers as $trainer): ?>
                                <option value="<?php echo $trainer['id'] ?>"><?php echo $trainer['full_name'] ?></option>

                            <?php endforeach; ?>

                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3" data-select2-id="select2-data-33-id8g">
                        <label class="col-form-label">Employees</label>
                        <!-- <select class="form-select form-controll" multiple name="employee_id">
                            <?php //foreach ($employees as $employee): 
                            ?>
                                <option value="<?php //echo $employee['id'] 
                                                ?>"><?php //echo ($employee['first_name'] . ' ' . $employee['last_name']) 
                                                    ?></option>

                            <?php //endforeach; 
                            ?>

                        </select> -->

                        <select class="form-select form-control" multiple name="employee_id[]">
                            <?php foreach ($employees as $employee): ?>
                                <option value="<?php echo $employee['id']; ?>">
                                    <?php echo $employee['first_name'] . ' ' . $employee['last_name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>


                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Training Cost <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="cost">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Start Date <span class="text-danger">*</span></label>
                        <div class="cal-icon"><input class="date" type="date" name="start_date"></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">End Date <span class="text-danger">*</span></label>
                        <div class="cal-icon"><input class="date" type="date" name="end_date">
                        </div>
                    </div>
                </div>

                <!-- <div class="col-sm-12">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                </div> -->
                <div class="col-sm-12">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Status</label>
                        <div>
                            <?php foreach ($status as $statusItem): ?>
                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="status"
                                        value="<?php echo $statusItem['id']; ?>"
                                        id="status_<?php echo $statusItem['id']; ?>">
                                    <label class="form-check-label" for="status_<?php echo $statusItem['id']; ?>">
                                        <?php echo $statusItem['status_name']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="submit-section">
                <button class="btn btn-primary submit-btn" name="btnCreate">Submit</button>
            </div>
        </form>
    </div>
</div>