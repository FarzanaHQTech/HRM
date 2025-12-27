<?php

class CardEmployeeController
{
    // Index method to display all employees
    public function index()
    {
        // Fetch all employees
        $employees = Allemployee::display();
        // Pass employees to the view
        view("AddEmployee", ['employees' => $employees]);
    }

    // Create method (possibly for adding new employees)
    public function create()
    {
        view("AddEmployee");
    }

    // Save method to save new employee data
    public function save()
    {
        if (isset($_POST['btnCreate'])) {
            // Get POST data from form submission
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $username = $_POST['username'];
            $image = $_FILES['image'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            $department_id = $_POST['department_id'];
            $designation_id = $_POST['designation_id'];
            $role_id = $_POST['role_id'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $martial_status_id = $_POST['martial_status_id'];
            $joining_date = $_POST['joining_date'];
            $basic_salary = $_POST['basic_salary'];
            $experience = $_POST['experience'];
            $status_id = $_POST['status_id'];
            $company_id = $_POST['company_id'];

            // Handle image upload
            $image_name = upload($image, "img/employees", $first_name);

            // Create new employee object
            $saveObj = new Allemployee('', $first_name, $last_name, $username, $image_name, $email, $password, $mobile, $department_id, $designation_id, $role_id, $dob, $address, $gender, $martial_status_id, $joining_date, $basic_salary, $experience, $status_id, $company_id);

            // Save employee data to the database
            $result = $saveObj->create();

            // Create user account if a password is set
            if (isset($_POST['password'])) {
                $createuser = new User("", $username, $email, $password, $mobile, $role_id, $company_id);
                echo $createuser->add();
            }

            // If employee data is saved, redirect to index page
            if ($result) {
                redirect("index");
            }
            
        }
    }

    // function edit($id)
    // {
    //     $employee = Allemployee::search($id);
    //     view("CardEmployee", $employee);
    // }
    function edit($id)
    {

        $cardemployee = Allemployee::search($id);
        // view("AddEmployee", ['employee' => $employee]);
        view("AddEmployee", $cardemployee);
    }

    function update_all()
    {

        if (isset($_POST['btnUpdate'])) {


            $id = $_POST['id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $username = $_POST['username'];

            $image = $_FILES['image'];
            $imageUpdate = upload($image, "img/employees", $first_name);

            // print_r($imageUpdate);
            // die;

            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            $department_id = $_POST['department_id'];
            $designation_id = $_POST['designation_id'];
            $role_id = $_POST['role_id'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $martial_status_id = $_POST['martial_status_id'];
            $joining_date = $_POST['joining_date'];
            $basic_salary = $_POST['basic_salary'];
            $experience = $_POST['experience'];
            $status_id = $_POST['status_id'];
            // $company_id = $_POST['company_id'];


            $updateEmployee = new Allemployee($id, $first_name, $last_name, $username,  $imageUpdate, $email, $password, $mobile, $department_id, $designation_id, $role_id, $dob, $address, $gender, $martial_status_id, $joining_date, $basic_salary, $experience, $status_id, "");
            if ($updateEmployee->edit()) {
                redirect("index");
            }
        }
    }


    public function profile()
    {
        // Ensure the 'id' is passed via the query string
        $id = $_GET['id'] ?? null;
        if (!$id) {
            echo "No employee ID provided!";
            return;
        }

        // Fetch employee details using the ID
        $employee = Allemployee::search($id);

        // If no employee is found, display a message
        if (!$employee) {
            echo "Employee not found!";
            return;
        }

        // Pass the employee data to the profile view
        view("AddEmployee", $employee);
    }

    function delete($id)
    {
        // $id=$_GET['id'];
        // $user = User::search($id);
        view("AddEmployee", $id);
    }
    function delete_confirm($id)
    {
        // if(isset($_POST['delete'])){
        //   $id = $_POST['id'];
        $result = Allemployee::delete($id);
        // print_r($result);
        // // return $result;
        // // }
        if ($result) {
            redirect("index");
        }
    }
    function cancel()
    {
        redirect("index");
    }
}
