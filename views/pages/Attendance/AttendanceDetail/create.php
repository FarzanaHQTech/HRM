<?php $employees = Allemployee::display();
$statuses = AttendanceStatu::all();
?>

<div class="container my-5">
    <h2 class="text-center mb-4">Create Attendance Record</h2>
    <div class="card shadow">
        <div class="card-body">
            <form action="<?php echo $base_url ?>/AttendanceDetail/save" method="POST">
                <!-- Employee Selection -->
                <div class="mb-3">
                    <label for="employee_id" class="form-label">Employee</label>
                    <select name="employee_id" id="employee_id" class="form-select" required>
                        <option value="">Select Employee</option>
                        <!-- Populate dynamically using PHP -->
                        <?php foreach ($employees as $employee): ?>
                            <option value="<?= $employee['id']; ?>">
                                <?= $employee['first_name'] . ' ' . $employee['last_name']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- Date -->
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
                <!-- Check-In Time -->
                <div class="mb-3">
                    <label for="check_in_time" class="form-label">Check-In Time</label>
                    <input type="time" name="check_in_time" id="check_in_time" class="form-control">
                </div>
                <!-- Check-Out Time -->
                <div class="mb-3">
                    <label for="check_out_time" class="form-label">Check-Out Time</label>
                    <input type="time" name="check_out_time" id="check_out_time" class="form-control">
                </div>
                <!-- Attendance Status -->
                <div class="mb-3">
                    <label for="attendance_status_id" class="form-label">Attendance Status</label>
                    <select name="attendance_status_id" id="attendance_status_id" class="form-select" required>
                        <option value="">Select Status</option>
                        <!-- Populate dynamically using PHP -->
                        <?php foreach ($statuses as $status): ?>
                            <option value="<?= $status->id; ?>"><?= $status->status_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="btnCreate">Create Attendance</button>
                    <a href="attendance_list.php" class="btn btn-secondary" name="btnCancel">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>