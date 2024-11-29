<?php
class Leave_reqController{
    // function index(){
    //     view("AttendenceAdmin");
    // }
    function index() {
        global $db;
        $leave_requests = Leave::status_check(); // Fetch pending leave requests
        view("AttendenceAdmin", ['leave_requests' => $leave_requests]); // Pass data to the view
    }
    
    function create(){
        view("AttendenceAdmin");
    }
    function save(){

        {
            // Check if the leave creation form is submitted
            if (isset($_POST['leaveCreate'])) {
                // Get the form data
                $leave_type_id = $_POST['leave_type_id'];
                $employee_id = $_POST['employee_id'];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                $reason = $_POST['reason'];
    
                // Calculate the number of leave days
                $no_of_leave = (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24) + 1;
    
                // Access the global database connection
                global $db;
    
                // Create a new Leave instance
                $leave = new Leave(
                    $db,               // Pass the database connection
                    null,              // Leave request ID (null for new records)
                    $employee_id,      // Employee ID
                    $leave_type_id,    // Leave type ID
                    $start_date,       // Start date
                    $end_date,         // End date
                    $no_of_leave,      // Number of leave days
                    null,              // Remaining leave (calculated in model)
                    $reason,           // Reason for leave
                    1                  // Leave request status ID (e.g., Pending)
                );
    
                try {
                    // Save the leave request using the create method
                    $result = $leave->create();
    
                    // Redirect or display success message

                    echo $result;
                    redirect("index");
                } catch (Exception $e) {
                    // Handle errors
                    echo "Error: " . $e->getMessage();
                }
            } else {
                echo "Invalid request.";
            }
        }
}





function update_status(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $leave_id = $_POST['leave_id'];  // Get the leave ID
        $status_name = $_POST['status']; // Get the status name

        // Ensure the status name is provided
        if (empty($status_name)) {
            echo "Status name cannot be empty.";
            return;
        }

        try {
           
            $status_update = Leave::update_status($leave_id, $status_name);
            echo $status_update;
            redirect("index");
        } catch (Exception $e) {
            // Handle errors
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Invalid request method.";
    }
}


function edit(){
    $id = $_GET['id'];
    $leave_req = Leave::search($id);
    view("AttendenceAdmin",$leave_req);
}
// function update_all(){

// }
}


?>
