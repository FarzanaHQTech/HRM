
<?php
class Allemployee
{
    private $id;
    private $first_name;
    private $last_name;
    private $username;
    private $image;
    private $email;
    private $password;
    private $mobile;
    private $department_id;
    private $designation_id;
    private $role_id;
    private $dob;
    private $address;
    private $gender;
    private $martial_status_id;
    private $joining_date;
    private $payroll_id;
    private $experience;
    private $status_id;
    private $company_id;

    public function __construct( $first_name, $last_name,$username, $image, $email,$password, $mobile, $department_id, $designation_id, $role_id, $dob, $address, $gender, $martial_status_id, $joining_date, $payroll_id, $experience, $status_id,$company_id)
    {
        // $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->username = $username;
        $this->image = $image;
        $this->email = $email;
        $this->password = $password;
        $this->mobile = $mobile;
        $this->department_id = $department_id;
        $this->designation_id = $designation_id;
        $this->role_id = $role_id;
        $this->dob = $dob;
        $this->address = $address;
        $this->gender = $gender;
        $this->martial_status_id = $martial_status_id;
        $this->joining_date = $joining_date;
        //$this->terminated_date = $terminated_date;
        $this->payroll_id = $payroll_id;
        $this->experience = $experience;
        $this->status_id = $status_id;
        $this->company_id = $company_id;
    }

    public function create()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO employees(first_name,last_name,username,image,email,password,mobile,department_id,designation_id,role_id,dob,address,gender,martial_status_id,joining_date,payroll_id,experience,status_id,company_id) Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");

        $stmt->bind_param("sssssssiiisssisisii", $this->first_name, $this->last_name,$this->username, $this->image, $this->email, $this->password, $this->mobile, $this->department_id, $this->designation_id, $this->role_id, $this->dob, $this->address, $this->gender, $this->martial_status_id, $this->joining_date, $this->payroll_id, $this->experience, $this->status_id, $this->company_id);
        
        return $stmt->execute();
        // if (!$employees) {
        //     die("Database query failed: " . $db->error);
        // }
       
    }

    public static function display()
    {
        global $db;
        $stmt = $db->prepare(" Select
* from AllEmployeeView
           
        ");

        if (!$stmt) {
            die("Database query failed: " . $db->error);
        }
        $stmt->execute();
        $results = $stmt->get_result();
        $employees = [];

        while ($row = $results->fetch_assoc()) {
            $employees[] = $row;
        }
        return $employees;
    }


    public static function search($id){
        global $db;
        
        $stmt = $db->prepare("Select * from allEmployeeView where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $results = $stmt->get_result();

        $employees = $results->fetch_object();
        return $employees;
    }
}
