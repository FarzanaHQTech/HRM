<?php
class EmployeeApi
{
    public function __construct()
    {
    }

    // Get all employees
    function index()
    {
        echo json_encode(["employees" => Allemployee::display()]);
    }

    // Find an employee by ID
    function find($data)
    {
        $id = intval($data["id"]); // Sanitize input
        $employee = Allemployee::search($id);

        if (!$employee) {
            echo json_encode(["status" => "error", "message" => "Employee not found."]);
        } else {
            echo json_encode(["status" => "success", "employee" => $employee]);
        }
    }

    // Create a new employee
    function save($data, $file = [])
    {
        $employee = new Allemployee(
            $data["first_name"],
            $data["last_name"],
            $data["username"],
            $data["image"] ?? null,
            $data["email"],
            password_hash($data["password"], PASSWORD_BCRYPT), // Securely hash passwords
            $data["mobile"],
            $data["department_id"],
            $data["designation_id"],
            $data["role_id"],
            $data["dob"],
            $data["address"],
            $data["gender"],
            $data["martial_status_id"],
            $data["joining_date"],
            $data["basic_salary"],
            $data["experience"],
            $data["status_id"],
            $data["company_id"]
        );

        if ($employee->create()) {
            echo json_encode(["status" => "success", "message" => "Employee created successfully."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to create employee."]);
        }
    }

    // Update employee details
    function update($data, $file = [])
    {
        // Not implemented in the Allemployee model
        echo json_encode(["status" => "error", "message" => "Update functionality not implemented."]);
    }

    // Delete an employee (currently missing in the Allemployee model)
    function delete($data)
    {
        // Assuming you implement a delete method in Allemployee model
        echo json_encode(["status" => "error", "message" => "Delete functionality not implemented."]);
    }

    // Dropdown HTML for employee selection
    function htmlSelect()
    {
        echo Allemployee::html_select();
    }
}
?>
