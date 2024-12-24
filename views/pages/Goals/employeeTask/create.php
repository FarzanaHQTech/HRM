<?php
$goal_type = GoalType::all();
$goal_status = GoalStatu::all();
$employees = Allemployee::display();
// print_r($goal_status)
?>
<div class="container mt-5">
    <h2 class="text-center mb-4">Create Employee Task</h2>

    <form action="<?php echo $base_url ?>/employeeTask/save" method="post">

        <div class="row">
            <!-- Task Name (First Column) -->
            <div class="form-group col-md-6">
                <label for="taskName">Employee </label>
                <select class="form-control" id="goalType" required name="employee">

                    <option value="">Select Goal Status</option>
                    <?php foreach ($employees as $employee): ?>
                        <option value="<?php echo $employee['id'] ?>"><?php echo ($employee['first_name'] . ' ' . $employee['last_name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div><br>

            <!-- Goal Type (First Column) -->
            <div class="form-group col-md-6">
                <label for="goalType">Goal Type</label>
                <select class="form-control" id="goalType" required name="goal_type">

                    <option value="">Select Goal Status</option>
                    <?php foreach ($goal_type as $type): ?>
                        <option value="<?php echo $type->id ?>"><?php echo $type->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <!-- Task Name (First Column) -->
            <div class="form-group col-md-6">
                <label for="taskName">Task Name</label>
                <input type="text" class="form-control" id="taskName" name="task">
            </div><br>

            <!-- Goal Type (First Column) -->
            <div class="form-group col-md-6">
                <label for="goalType">Goal Type</label>
                <select class="form-control" id="goalType" required name="goal_type">
                    <option value="">Select Goal Type</option>
                    <option value="">Select Goal Status</option>
                    <?php foreach ($goal_type as $type): ?>
                        <option value="<?php echo $type->id ?>"><?php echo $type->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <!-- Assigned Date (Second Column) -->
            <div class="form-group col-md-6">
                <label for="assignedDate">Assigned Date</label>
                <input type="date" class="form-control" id="assignedDate" required name="assignedDate">
            </div>

            <!-- Due Date (Second Column) -->
            <div class="form-group col-md-6">
                <label for="dueDate">Due Date</label>
                <input type="date" class="form-control" id="dueDate" required name="dueDate">
            </div>
        </div>

        <div class="row">
            <!-- Completion Date (Third Row) -->
            <div class="form-group col-md-6">
                <label for="completionDate">Completion Date</label>
                <input type="date" class="form-control" id="completionDate" name="completionDate">
            </div>

            <!-- Goal Status (Third Row) -->
            <div class="form-group col-md-6">
                <label for="goalStatus">Goal Status</label>
                <select class="form-control" id="goalStatus" required name="goalStatus">
                    <option value="">Select Goal Status</option>
                    <?php foreach ($goal_status as $status): ?>
                        <option value="<?php echo $status->id ?>"><?php echo $status->name ?></option>
                    <?php endforeach; ?>
                    <!-- <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option> -->
                </select>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary btn-block" name="btnCreate">Create Task</button>
    </form>
</div>