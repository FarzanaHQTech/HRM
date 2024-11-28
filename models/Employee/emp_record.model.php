<?php
class Employee{
    private $id;
    private $first_name;
    private $last_name;
    private $image;
    private $email;
    private $mobile;
    private $department_id;
    private $designation_id;
    private $role_id;
    private $dob;
    private $address;
    private $gender;
    private $martial_status_id;
    private $joining_date;
    private $terminated_date;
    private $salary_id;
    private $experience;
    private $status_id;

    public function __construct($id,$first_name,$last_name,$image,$email,$mobile,$department_id,$designation_id,$role_id,$dob,$address,$gender,$martial_status_id,$joining_date,$terminated_date,$salary_id,$experience,$status_id)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->image = $image;
        $this->$email = $email;
        $this->$mobile = $mobile;
        $this->department_id = $department_id;
        $this->designation_id =$designation_id;
        $this->role_id = $role_id;
        $this->dob = $dob;
        $this->address = $address;
        $this->gender = $gender;
        $this->martial_status_id = $martial_status_id;
        $this->joining_date = $joining_date;
        $this->terminated_date = $terminated_date;
        $this->salary_id = $salary_id;
        $this->experience = $experience;
        $this->status_id = $status_id;
    }

    public function create(){
        global $db;
        $stmt = $db->prepare("INSERT INTO employees(id,first_name,last_name,image,email,mobile,department_id,designation_id,role_id,dob,address,gender,martial_status_id,joining_date,terminated_date,salary_id,experience,status_id) Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
        $stmt->bind_param("sssssiiidssiddisi",$this->first_name,$this->last_name,$this->image,$this->email,$this->mobile,$this->department_id,$this->designation_id,$this->role_id,$this->dob,$this->address,$this->gender,$this->martial_status_id,$this->joining_date,$this->terminated_date,$this->salary_id,$this->experience,$this->status_id);

        $employees = $stmt->execute();
        return $employees;
    }

    public static function display(){
        global $db;
        $stmt = $db->prepare(" Select
* from AllEmployeeView
           
        ");
        
if(!$stmt){
    die("Database query failed: " . $db->error);
}
        $stmt->execute();
        $results = $stmt->get_result();
        $employees=[];

        while($row = $results->fetch_assoc()){
            $employees[]=$row;
        }
        return $employees;
    }

    
}

?>