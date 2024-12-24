<?php
$employees = Allemployee::display();
//  print_r($employees);
// die();
$goal_types = GoalType::all();

$goal_status = GoalStatu::all();

?>

<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add Goal Tracking</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button> -->
    </div>
    <div class="modal-body">
        <form action="<?php echo $base_url ?>/Goal/save" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Goal Type</label>
                        <select class="form-select form-control" name="goal_type_id">
                            <?php foreach ($goal_types as $types):
                            ?>
                                <option value="<?php echo $types->id;
                                                ?>"><?php echo $types->name; ?></option>
                            <?php endforeach;
                            ?>
                        </select>


                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Employee Name</label>
                        <select class="form-select form-control" name="employee_id" id="">
                            <?php foreach ($employees as $employee): ?>
                                <option value="<?php echo $employee['id']; ?>"><?php echo $employee['first_name'] . ' ' . $employee['last_name']; ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Description</label>
                        <input class="form-control" type="text">
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Start Date <span class="text-danger">*</span></label>
                        <input class="form-control " type="date" name="start_date">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">End Date <span class="text-danger">*</span></label>

                        <input class="form-control " type="date" name="end_date">

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="input-block mb-3">
                        <label class="col-form-label">Goal Status</label>
                        <select class="form-select form-control" name="goal_status_id">
                            <?php foreach ($goal_status as $status): ?>
                                <option value="<?php echo $status->id; ?>"><?php echo $status->name; ?></option>
                            <?php endforeach; ?>
                        </select>


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