<!-- dispaly  -->
<?php
// Database connection
$host = 'localhost';
$db = 'your_database';
$user = 'your_username';
$pass = 'your_password';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch Leave Request Data
$sql = "SELECT lr.id, e.name AS employee_name, lt.name AS leave_type, lr.start_date, lr.end_date, lr.number_of_leave, lr.leave_remain, lrs.status_name
        FROM Leave_Request lr
        JOIN Employee e ON e.id = lr.employee_id
        JOIN Leave_Type lt ON lt.id = lr.leave_type_id
        JOIN Leave_Request_Status lrs ON lrs.id = lr.req_status_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Leave Request Management</h1>

        <!-- Add New Leave Request Form -->
        <form action="leave_create.php" method="POST">
            <div class="form-group">
                <label for="employee_id">Employee ID</label>
                <input type="text" class="form-control" id="employee_id" name="employee_id">
            </div>
            <div class="form-group">
                <label for="leave_type">Leave Type</label>
                <input type="text" class="form-control" id="leave_type" name="leave_type">
            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date">
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date">
            </div>
            <div class="form-group">
                <label for="reason">Reason</label>
                <textarea class="form-control" id="reason" name="reason"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Display Table for Leave Requests -->
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Leave Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Number of Leaves</th>
                    <th>Remaining Leave</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['employee_name']; ?></td>
                            <td><?php echo $row['leave_type']; ?></td>
                            <td><?php echo $row['start_date']; ?></td>
                            <td><?php echo $row['end_date']; ?></td>
                            <td><?php echo $row['number_of_leave']; ?></td>
                            <td><?php echo $row['leave_remain']; ?></td>
                            <td><?php echo $row['status_name']; ?></td>
                            <td>
                                <!-- Edit and Delete Buttons -->
                                <a href="leave_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="leave_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8">No records found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php $conn->close(); ?>
<!-- create  -->

<?php
// Database connection
$host = 'localhost';
$db = 'your_database';
$user = 'your_username';
$pass = 'your_password';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employee_id = $_POST['employee_id'];
    $leave_type = $_POST['leave_type'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $reason = $_POST['reason'];

    // Assuming leave_type is an integer, you'll need to get the ID from the Leave_Type table
    $sql = "SELECT id FROM Leave_Type WHERE name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $leave_type);
    $stmt->execute();
    $stmt->bind_result($leave_type_id);
    $stmt->fetch();
    $stmt->close();

    // Insert new leave request
    $sql = "INSERT INTO Leave_Request (employee_id, leave_type_id, start_date, end_date, reason, req_status_id)
            VALUES (?, ?, ?, ?, ?, 1)"; // Assuming status_id 1 is 'Pending'
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iisss", $employee_id, $leave_type_id, $start_date, $end_date, $reason);
    $stmt->execute();
    $stmt->close();

    header("Location: leave_management.php"); // Redirect to leave management page
}

$conn->close();
?>

<!-- update  -->

<?php
// Database connection
$host = 'localhost';
$db = 'your_database';
$user = 'your_username';
$pass = 'your_password';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $leave_id = $_GET['id'];

    // Fetch current leave request data
    $sql = "SELECT * FROM Leave_Request WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $leave_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $reason = $_POST['reason'];

    $sql = "UPDATE Leave_Request SET start_date = ?, end_date = ?, reason = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $start_date, $end_date, $reason, $leave_id);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Leave Request</title>
</head>

<body>
    <form action="leave_edit.php?id=<?php echo $leave_id; ?>" method="POST">
         <label for="start_date">Start Date</label>
          <input type="date" name="start_date" value="<?php echo $row['start_date']; ?>" required><br> 
          <label for="end_date">End Date</label> 
          <input type="date" name="end_date" value="<?php echo $row['end_date']; ?>" required><br> 
          <label for="reason">Reason</label>
           <textarea name="reason" required><?php echo $row['reason']; ?>
        </textarea><br> <button type="submit">Update</button> 
    </form>

</body>

</html>
// delete

<?php
// Database connection
$host = 'localhost';
$db = 'your_database';
$user = 'your_username';
$pass = 'your_password';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $leave_id = $_GET['id'];

    // Delete leave request
    $sql = "DELETE FROM Leave_Request WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $leave_id);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
}

$conn->close();
?>


<!-- leave report  -->

<?php
// Database connection
$host = 'localhost';
$db = 'your_database';
$user = 'your_username';
$pass = 'your_password';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch leave remain report data
$sql = "SELECT * FROM Leave_Remain";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Remain Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Leave Remain Report</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Leave Type</th>
                    <th>No of Days</th>
                    <th>Remaining Leave</th>
                    <th>Total Leaves</th>
                    <th>Total Leave Taken</th>
                    <th>Leave Carry Forward</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['employee_id']; ?></td>
                            <td><?php echo $row['leave_type_id']; ?></td>
                            <td><?php echo $row['no_of_days']; ?></td>
                            <td><?php echo $row['remaining_leave']; ?></td>
                            <td><?php echo $row['total_leaves']; ?></td>
                            <td><?php echo $row['total_leave_taken']; ?></td>
                            <td><?php echo $row['leave_carry_forward']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="7">No records found</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php $conn->close(); ?>
