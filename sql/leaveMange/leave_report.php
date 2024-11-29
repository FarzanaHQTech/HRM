<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "hrm");

// Fetch leave data
$query = "SELECT users.name, leave_types.leave_type, leave_requests.start_date, leave_requests.end_date, 
          leave_requests.no_of_leave, leave_requests.remaining_leave, leave_requests.status 
          FROM leave_requests 
          JOIN users ON leave_requests.user_id = users.id 
          JOIN leave_types ON leave_requests.leave_type_id = leave_types.id";
$result = mysqli_query($conn, $query);
?>

<h2>Final Leave Report</h2>
<table border="1">
    <tr>
        <th>Employee</th>
        <th>Leave Type</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>No. of Days</th>
        <th>Total Previous Leave</th>
        <th>Remaining Leave</th>
        <th>Status</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['leave_type']; ?></td>
            <td><?php echo $row['start_date']; ?></td>
            <td><?php echo $row['end_date']; ?></td>
            <td><?php echo $row['no_of_leave']; ?></td>
            <td>
                <?php
                $total_previous_leave_query = "SELECT SUM(no_of_leave) AS total_previous_leave 
                                               FROM leave_requests 
                                               WHERE user_id = {$row['user_id']} 
                                               AND leave_type_id = {$row['leave_type_id']} 
                                               AND status = 'Approved'";
                $total_previous_leave_result = mysqli_query($conn, $total_previous_leave_query);
                $previous_leave = mysqli_fetch_assoc($total_previous_leave_result)['total_previous_leave'] ?? 0;
                echo $previous_leave;
                ?>
            </td>
            <td><?php echo $row['remaining_leave']; ?></td>
            <td><?php echo $row['status']; ?></td>
        </tr>
    <?php } ?>
</table>
