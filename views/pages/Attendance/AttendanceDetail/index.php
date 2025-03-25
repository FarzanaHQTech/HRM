<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$attendances = Attendance::display(); // FIXED
?>

<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Attendance</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $base_url ?>/home">Dashboard</a></li>
                <li class="breadcrumb-item active">Attendance</li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-12 m-5 text-align-center">
    <!-- <button class="btn btn-primary"> -->
    <a href="<?php echo $base_url ?>/AttendanceDetail/create" class="btn btn-primary">Create Employee Attendance</a>
    <!-- </button> -->

</div>


<form action="">
    <table class="table table-striped custom-table mb-0 align-middle" id="attendanceTable">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Attendance id</th>
                <th>Employee Name</th>
                <th>Date</th>
                <th>Check-In Time</th>
                <th>Check-Out Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Rows -->
            <?php foreach ($attendances as $key => $attendance): ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $attendance['id'] ?></td>
                    <td><?php echo $attendance['employee_name'] ?></td>
                    <td><?php echo $attendance['date'] ?></td>
                    <td><?php echo $attendance['check_in_time'] ?></td>
                    <td><?php echo $attendance['check_out_time'] ?></td>
                    <td><?php echo $attendance['status'] ?></td>
                    <td>
                        <button class="btn btn-primary btn-sm"><a href="<?= $base_url ?>/AttendanceDetail/delete/<?php echo $attendance['id'] ?>">Delete</a></button>
                        <!-- <button class="btn btn-danger btn-sm"></button> -->
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
</form>
</table>
</div>
</div>