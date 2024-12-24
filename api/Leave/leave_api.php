<?php
class LeaveApi
{
    function index()
    {
        // echo "API tested";
    }
    // Get Single Vehicle Api
    function get_leave()
    {
        // Send JSON response
        header('Content-Type: application/json');

        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if ($id) {
            $leave = Leave::search($id);

            if ($leave) {
                echo json_encode([
                    "success" => true,
                    "message" => "leave successfully found.",
                    "Status" => 200,
                    "leave" => $leave,
                ]);
            } else {
                echo json_encode([
                    "success" => false,
                    "message" => "leave not found.",
                    "Status" => 404,
                    "leave" => [],
                ]);
            }
        } else {
            echo json_encode([
                "success" => false,
                "message" => "ID not found.",
                "Status" => 404,
                "leave" => [],
            ]);
        }
    }
    function update()
    {
        $id = $_GET['id'];
        $status_id = $_GET['status_id'];
        echo json_encode(["updated_data" => Leave::update($status_id, $id)]);
    }

    function test()
    {
        echo "Test";
    }

    function leave_deduction()
    {
        $employee_id = isset($_GET['employee_id']) ? $_GET['employee_id'] : null;
        if ($employee_id) {
            $leave_deduction = Leave::leave_deduction($employee_id);

            if ($employee_id) {
                echo json_encode([
                    "success" => true,
                    "message" => "leave deduction successfully found",
                    "Status" => 200,
                    "leave_deduction" => $leave_deduction
                ]);
            } else {
                echo json_encode([
                    "success" => false,
                    "message" => "leave deduction unpaid not found",
                    "Status" => 404,
                    "leave_deduction" => [],
                ]);
            }
        } else {
            echo json_encode([
                "success" => false,
                "message" => "employee id not found",
                "status" => 404,
                "leave_deduction" => [],
            ]);
        }
        // echo json_encode(["leave_deduction" => Leave::leave_deduction($id)]);
    }
}
