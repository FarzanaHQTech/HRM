<?php
// Database connection


// Fetch pending leave requests
$query = "SELECT leave_requests.*, CONCAT(employees.first_name,'',employees.last_name) as employee_name, leave_type.name as leave_name
          FROM leave_requests 
          JOIN employees ON leave_requests.employee_id = employees.id 
          JOIN leave_type ON leave_requests.leave_type_id = leave_type.id 
          WHERE leave_requests.status = 'new'";
$result = mysqli_query($conn, $query);

// Handle status update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $leave_id = $_POST['leave_id'];
    $status = $_POST['status'];

    $update_query = "UPDATE leave_requests SET status='$status' WHERE id='$leave_id'";
    mysqli_query($conn, $update_query) or die("Error: " . mysqli_error($conn));

    echo "Leave request updated successfully.";
}
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>User</th>
        <th>Leave Type</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>No. of Days</th>
        <th>Remaining Leave</th>
        <th>Action</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['leave_type']; ?></td>
            <td><?php echo $row['start_date']; ?></td>
            <td><?php echo $row['end_date']; ?></td>
            <td><?php echo $row['no_of_leave']; ?></td>
            <td><?php echo $row['remaining_leave']; ?></td>
            <td>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="leave_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="status" value="Approved">Approve</button>
                    <button type="submit" name="status" value="Declined">Decline</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
