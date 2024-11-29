<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "hrm");

// Fetch leave types
$leave_types = mysqli_query($conn, "SELECT * FROM leave_types");

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employee_id = $_POST['employee_id']; // Ideally fetched from session
    $leave_type_id = $_POST['leave_type_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $reason = mysqli_real_escape_string($conn, $_POST['reason']);

    // Fetch total days from leave_types table
    $leave_type_query = "SELECT total_days FROM leave_types WHERE id = '$leave_type_id'";
    $leave_type_result = mysqli_query($conn, $leave_type_query);
    $leave_type = mysqli_fetch_assoc($leave_type_result);

    // Calculate no_of_leave
    $no_of_leave = (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24) + 1;
    // $no_of_leave =(strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24) + 1;
    

    // Fetch total approved leave for this user and leave type
    $previous_leave_query = "SELECT SUM(no_of_leave) AS total_previous_leave 
                             FROM leave_requests 
                             WHERE employee_id = '$employee_id' AND leave_type_id = '$leave_type_id' AND status = 'Approved'";
    $previous_leave_result = mysqli_query($conn, $previous_leave_query);
    $previous_leave_data = mysqli_fetch_assoc($previous_leave_result);
    $total_previous_leave = $previous_leave_data['total_previous_leave'] ?? 0;

    // Calculate remaining leave
    $remaining_leave = $leave_type['total_days'] - ($total_previous_leave + $no_of_leave);

    if ($remaining_leave < 0) {
        echo "Error: Insufficient leave balance.";
    } else {
        $query = "INSERT INTO leave_requests (user_id, leave_type_id, start_date, end_date, remaining_leave, reason) 
                  VALUES ('$user_id', '$leave_type_id', '$start_date', '$end_date', '$remaining_leave', '$reason')";
        mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

        echo "Leave request submitted successfully. Remaining leave: $remaining_leave days.";
    }
}
?>

<form method="POST" action="">
    <label for="user_id">User ID:</label>
    <input type="number" name="user_id" required><br>

    <label for="leave_type_id">Leave Type:</label>
    <select name="leave_type_id" required>
        <?php while ($type = mysqli_fetch_assoc($leave_types)) { ?>
            <option value="<?php echo $type['id']; ?>"><?php echo $type['leave_type']; ?> (<?php echo $type['total_days']; ?> days)</option>
        <?php } ?>
    </select><br>

    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" required><br>

    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" required><br>

    <label for="reason">Reason:</label>
    <textarea name="reason"></textarea><br>

    <button type="submit">Submit Leave</button>
</form>
