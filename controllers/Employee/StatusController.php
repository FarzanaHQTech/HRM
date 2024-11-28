<?php
 class StatusController{
    function create(){
        view("Employee");
    }
    function save(){
        if(isset($_POST['btnCreate'])){
            $status_name = $_POST['status_name'];
            $createObj = new Status("",$status_name);
            $status = $createObj->create();
            if($status){
                redirect("index");
            }
        }
    }
    function index(){
        view("Employee");
    }
 }
?>