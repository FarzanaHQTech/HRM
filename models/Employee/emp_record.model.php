<?php
class Employee{
    private $id;
    private $first_name;
    private $last_name;
    private $image;
    private $department_id;
    private $designation_id;
    private $role_id;
    private $date_of_birth;
    private $address;
    private $gender;
    private $marital_status_id;
    private $joining_date;
    private $experience;
    private $status_id;

    public function __construct($id,$first_name,$last_name,$image,$department_id,$designation_id,$role_id,$date_of_birth,$address,$gender,$marital_status_id,$joining_date,$experience,$status_id)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->image = $image;
        $this->department_id = $department_id;
        $this->designation_id =$designation_id;
        $this->role_id = $role_id;
        $this->date_of_birth = $date_of_birth;
        $this->address = $address;
        $this->gender = $gender;
        $this->marital_status_id = $marital_status_id;
        $this->joining_date = $joining_date;
        $this->experience = $experience;
        $this->status_id = $status_id;
    }

    
}

?>