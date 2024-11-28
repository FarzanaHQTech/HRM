<?php
    class Payroll{
        private $id;
        private $employee_id;
        private $basic_salary;

    public function __construct($id,$employee_id,$basic_salary)
    {
       $this->id = $id; 
       $this->employee_id = $employee_id; 
       $this->basic_salary = $basic_salary; 
    }

    public function create(){
        global $db;
        $stmt = $db->query("INSERT INTO payroll(employee_id,basic_salary) values($this->employee_id,'$this->basic_salary')");
        return $stmt;
    }
    public static function display(){
        global $db;
        $stmt = $db->query("SELECT * from payroll");
        if (!$stmt) {
            die("Database query failed: " . $db->error);
        }
        $result = [];
        while($row=$stmt->fetch_assoc()){
            $result[]=$row;
        }
        return $result;
    }
    }
?>