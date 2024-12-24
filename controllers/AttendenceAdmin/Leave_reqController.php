<?php
class Leave_reqController
{
    // function index(){
    //     view("AttendenceAdmin");
    // }
    function index()
    {
        global $db;
        $leave_requests = Leave::status_check(); // Fetch pending leave requests
        view("AttendenceAdmin", ['leave_requests' => $leave_requests]); // Pass data to the view
    }

    function create()
    {
        view("AttendenceAdmin");
    }
    // function save()
    // { {
    //         // Check if the leave creation form is submitted
    //         if (isset($_POST['leaveCreate'])) {
    //             // Get the form data
    //             $leave_type_id = $_POST['leave_type_id'];
    //             $employee_id = $_POST['employee_id'];
    //             $start_date = $_POST['start_date'];
    //             $end_date = $_POST['end_date'];
    //             $reason = $_POST['reason'];
    //             $payslip_item_id = $_POST['payslip_item_id'];

    //             // Calculate the number of leave days
    //             $no_of_leave = (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24) + 1;

    //             // Access the global database connection
    //             global $db;

    //             // Create a new Leave instance
    //             $leave = new Leave(
    //                 $db,
    //                 null,
    //                 $employee_id,
    //                 $leave_type_id,
    //                 $start_date,
    //                 $end_date,
    //                 $no_of_leave,
    //                 null,
    //                 $reason,
    //                 $payslip_item_id,
    //                 1
    //             );
    //             echo "<pre>";
    //             print_r($leave);
    //             die();

    //             try {
    //                 // Save the leave request using the create method
    //                 $result = $leave->create();

    //                 // Redirect or display success message
    //                 print_r($result);
    //                 die();
    //                 echo $result;
    //                 redirect("index");
    //             } catch (Exception $e) {
    //                 // Handle errors
    //                 echo "Error: " . $e->getMessage();
    //             }
    //         } else {
    //             echo "Invalid request.";
    //         }
    //     }
    // }

    function save()
    {
        if (isset($_POST['leaveCreate'])) {
            $leave_type_id = $_POST['leave_type_id'];
            $employee_id = $_POST['employee_id'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $reason = $_POST['reason'];
            $leave_request_status_id = $_POST['leave_status_id'];
            $payslip_item_id = $_POST['payslip_item_id'];



            if ($leave_type_id = 7) {
                $payslip_item_id = 7;
            } else {
                $payslip_item_id = 0;
            }
            $no_of_leave = (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24) + 1;


            global $db;

            // leave_request_status_id
            $leave = new Leave(
                $db,
                null,
                $employee_id,
                $leave_type_id,
                $start_date,
                $end_date,
                $no_of_leave,
                "",
                $reason,
                $leave_request_status_id,
                $payslip_item_id,
                1

            );
            // echo "<pre>";
            // print_r($leave);
            // die();


            try {
                $result = $leave->create();
                // echo "<pre>";
                // print_r($result);
                // die();
                echo $result;

                redirect("index");
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            echo "Invalid request.";
        }
    }


    function edit()
    {
        $id = $_GET['id'];
        $leave_req = Leave::search($id);
        view("AttendenceAdmin", $leave_req);
    }
    // function update_all(){

    // }

    function delete()
    {
        $id = $_GET['id'];
        $leave_req = Leave::search($id);
        view("AttendenceAdmin", $leave_req);
    }
    function confirm($id)
    {
        $delete = Leave::delete($id);
        if ($delete) {
            redirect("index");
        }
    }
    function cancel()
    {
        redirect("index");
    }
}
