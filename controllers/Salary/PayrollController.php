<?php
 class PayrollController{
    function create(){
        view("Salary");
    }
    function save(){
        if(isset($_POST['btnCreate'])){
            $employee_id = $_POST['employee_id'];
            $basic_salary = $_POST['basic_salary'];
            $createObj = new Payroll("",$employee_id,$basic_salary);
            $Payroll = $createObj->create();
            if($Payroll){
                redirect("index");
            }
        }
    }
    function index(){
        view("Salary");
    }
 }
?>