<?php
class CardEmployeeController
{
    function index()
    {
        // view("AddEmployee");
        $employees = Allemployee::display(); // Fetch all employees
        view("AddEmployee", ['employees' => $employees]); // Pass dat
    }
    

    function create()
    {
        view("AddEmployee");
    }
    function save()
    {
        if (isset($_POST['btnCreate'])) {
            // $id = $_POST['id'];
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
            $payroll_id = $_POST['payroll_id'];
            $experience = $_POST['experience'];
            $status_id = $_POST['status_id'];
            $company_id = $_POST['company_id'];

            $image_name=upload($image,"img/employees",$first_name);

            $saveObj = new Allemployee($first_name,$last_name,$username,$image_name,$email,$password,$mobile,$department_id,$designation_id,$role_id,$dob,$address,$gender,$martial_status_id,$joining_date,$payroll_id,$experience,$status_id,$company_id);
            // print_r($saveObj);
            // die();
       

            $result = $saveObj->create();
            // print_r($employees);
            if (isset($_POST['password'])) {

                $createuser = new User("", $username, $email, $password, $mobile, $role_id, $company_id);
                echo $createuser->add();
            }
            if($result){
                redirect("index");
            }
        }
    }

    function details($id){

        if(isset($_POST['btnSearch'])){
            $id = $_POST['id'];
            // $first_name = $_POST['first_name'];
            $employees = Allemployee::search($id);
            if($employees){
                redirect("index");
                echo "Employee Name:".$employees->first_name."".$employees->first_name;
            }
           

            // $id = $_POST['id'];
        }
       

    //    return $employ
    }
}
