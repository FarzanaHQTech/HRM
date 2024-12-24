<?php
$tasks = Task::display();
// echo "<pre>";
// print_r($tasks);
// die()
?>
<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Task Tracking</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Task Tracking</li>
            </ul>
        </div>
        <div class="col-auto float-end ms-auto">
            <a href="<?php echo $base_url ?>/employeeTask/create" class="btn add-btn"><i class="fa-solid fa-plus"></i> Add New</a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Employee Tasks</h2>
    <table class="table table-bordered table-hover table-striped text-center">
        <thead class="thead-primary"> <!-- Changed class here -->
            <tr>
                <th>ID</th>
                <th>Employee</th>
                <th>Task Name</th>
                <th>Goal Type</th>
                <th>Assigned Date</th>
                <th>Due Date</th>
                <th>Completion Date</th>
                <th>Goal Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?php echo $task['id'] ?></td>
                    <td><span>#00<?php echo $task['eid'] ?></span>
                        <span><?php echo $task['full_name'] ?></span>
                    </td>
                    <td><?php echo $task['task'] ?></td>
                    <td>
                        <?php echo $task['goal_type_name'] ?>
                        <!-- <select class="form-control">
                        <option>Performance</option>
                        -->
                        </select>
                    </td>
                    <td><?php echo $task['assigned_date'] ?></td>
                    <td><?php echo $task['due_date'] ?></td>
                    <td><?php echo $task['completion_date'] ?></td>
                    <td>
                        <?php echo $task['status'] ?>
                        <!-- <select class="form-control">
                        <option>Pending</option>
                        <option>In Progress</option>
                        <option>Completed</option>
                    </select> -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>