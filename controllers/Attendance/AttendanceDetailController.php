<?php
class AttendanceDetailController
{
	public function __construct() {}
	public function index()
	{
		view("Attendance");
	}
	public function create()
	{
		view("Attendance");
	}

	public function save()
	{
		if (isset($_POST['btnCreate'])) {
			$id = $_POST['id'];
			$employee_id = $_POST['employee_id'];
			$date = $_POST['date'];
			$check_in_time = $_POST['check_in_time'];
			$check_out_time = $_POST['check_out_time'];
			$attendance_status_id = $_POST['attendance_status_id'];

			$attendanceObj = new Attendance("", $employee_id, $date, $check_in_time, $check_out_time, $attendance_status_id);

			if ($attendanceObj->createAttendance($employee_id, $date, $check_in_time, $check_out_time, $attendance_status_id)) {
				redirect("index");
			}
		}
	}

	public function update()
	{
		if (isset($_POST['btnUpdate'])) {
			$id = $_POST['id'];
			$employee_id = $_POST['employee_id'];
			$date = $_POST['date'];
			$check_in_time = $_POST['check_in_time'];
			$check_out_time = $_POST['check_out_time'];
			$attendance_status_id = $_POST['attendance_status_id'];

			$attendance = new Attendance($id, $employee_id, $date, $check_in_time, $check_out_time, $attendance_status_id);
			// $attendance->employee_id = 2; // Updated employee_id
			// $attendance->date = "2024-12-11";
			// $attendance->check_in_time = "09:00:00";
			// $attendance->check_out_time = "17:00:00";
			// $attendance->attendance_status_id = 1; // Updated status_id

			$updatedRecord = $attendance->Update($id);

			if ($updatedRecord) {
				echo "Attendance updated successfully!";
				echo "Employee: " . $updatedRecord['first_name'] . " " . $updatedRecord['last_name'];
				echo "Status: " . $updatedRecord['status_name'];
			} else {
				echo "Failed to update attendance.";
			}
		}
	}

	public function delete($id)
	{
		// $id=$_GET['id'];
		// $Attendance = Attendance::search($id);
		view("Attendance", $id);
	}
	public function delete_confirm($id)
	{
		// if(isset($_POST['delete'])){
		//   $id = $_POST['id'];
		$result = Attendance::delete($id);

		if ($result) {
			redirect("index");
		}
	}
	function cancel()
	{
		redirect("index");
	}
}
