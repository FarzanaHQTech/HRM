
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
    private $basic_salary;
    private $experience;
    private $status_id;
    private $company_id;

    public function __construct($id, $first_name, $last_name, $username, $image, $email, $password, $mobile, $department_id, $designation_id, $role_id, $dob, $address, $gender, $martial_status_id, $joining_date, $basic_salary, $experience, $status_id, $company_id)
    {
        $this->id = $id;
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
        $this->basic_salary = $basic_salary;
        $this->experience = $experience;
        $this->status_id = $status_id;
        $this->company_id = $company_id;
    }

    public function create()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO employees(first_name,last_name,username,image,email,password,mobile,department_id,designation_id,role_id,dob,address,gender,martial_status_id,joining_date,basic_salary,experience,status_id,company_id) Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");

        $stmt->bind_param("sssssssiiisssisisii", $this->first_name, $this->last_name, $this->username, $this->image, $this->email, $this->password, $this->mobile, $this->department_id, $this->designation_id, $this->role_id, $this->dob, $this->address, $this->gender, $this->martial_status_id, $this->joining_date, $this->basic_salary, $this->experience, $this->status_id, $this->company_id);

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


    // public static function search($id){
    //     global $db;

    //     $stmt = $db->prepare("Select * from allEmployeeView where id = ?");
    //     $stmt->bind_param("i",$id);
    //     $stmt->execute();
    //     $results = $stmt->get_result();

    //     $employees = $results->fetch_object();
    //     return $employees;
    // }

    public static function search($id)
    {
        global $db;

        // Prepare the SQL statement
        $stmt = $db->prepare("SELECT * FROM allEmployeeView WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $results = $stmt->get_result(); // Get the results

        // Fetch the result as an object
        $employee = $results->fetch_object();

        // Return the employee object
        return $employee;
    }

    public static function searchByName($fname, $lname, $id)
    {
        global $db;

        $fnameType = is_string($fname) ? "s" : "";
        $lnameType = is_string($lname) ? "s" : "";
        $idType = is_numeric($id) ? "i" : "";

        // Prepare the SQL statement
        $stmt = $db->prepare("SELECT * FROM allEmployeeView WHERE first_name = ? OR last_name = ? OR id = ?");
        $stmt->bind_param($fnameType . $lnameType . $idType, $fname, $lname, $id);
        $stmt->execute();
        $results = $stmt->get_result(); // Get the results

        // Fetch the result as an object
        $employee = $results->fetch_object();

        // Return the employee object
        return $employee;
    }


    static function html_select($name = "cmbHrmEmployee")
    {
        global $db;
        $html = "<select class ='form-select form-controll w-50'  id='$name' name='$name'> 
        <option value =''>Select Employee</option>
        ";
        $result = $db->query("SELECT id,CONCAT(first_name, ' ', last_name) AS name, designation from allEmployeeView");
        while ($hrmemployee = $result->fetch_object()) {
            $html .= "<option value ='$hrmemployee->id'>$hrmemployee->name</option>";
        }
        $html .= "</select>";
        return $html;
    }

    public function edit()
    {
        global $db;
        $stmt = $db->prepare("Update employees set first_name=? ,last_name=?,username =?,image = ?,email =? ,password =? ,mobile=?,department_id = ?,designation_id =?,role_id =?,dob =?,address =?,gender=?,martial_status_id =?,joining_date =?,basic_salary =?,experience =?,status_id =? where id = ? ");

        $stmt->bind_param("sssssssiiisssisisii", $this->first_name, $this->last_name, $this->username, $this->image, $this->email, $this->password, $this->mobile, $this->department_id, $this->designation_id, $this->role_id, $this->dob, $this->address, $this->gender, $this->martial_status_id, $this->joining_date, $this->basic_salary, $this->experience, $this->status_id, $this->id);

        return $stmt->execute();
        // if (!$employees) {
        //     die("Database query failed: " . $db->error);
        // }

    }
    public static function count($criteria = "")
    {
        global $db, $tx;
        $result = $db->query("select count(*) from {$tx}employees $criteria");
        list($count) = $result->fetch_row();
        return $count;
    }

    public static function Delete($id)
    {
        global $db;

        // Prepare the SQL statement
        $stmt = $db->prepare("DELETE FROM allEmployeeView WHERE id = ?");
        $stmt->bind_param("i", $id);
        $employee = $stmt->execute();

        return $employee;
    }

    public static function get_salary($id)
    {
        global $db;
        // $basic_salary = is_numeric($basic_salary) ? "i" : "";
        // $id = is_numeric($id) ? "i" : "";
        $stmt = $db->prepare("SELECT id, basic_salary  from employees  where id =?");
        $stmt->bind_param("i",  $id);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_object();
        return $result;
    }
}
