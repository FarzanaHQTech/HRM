<?php
class Leave_typeController{
    function index(){
        view("AttendenceAdmin");
    }
    function create(){
        view("AttendenceAdmin");
    }
    function save(){
        if(isset($_POST['btnCreate'])){
            $name = $_POST['name'];
            $total_leaves = $_POST['total_leaves'];
            $createObj = new Leave_type("",$name,$total_leaves);
            // print_r($createObj);
            // die();
            $results = $createObj->create();

           if($results){
            redirect("index");
           }
        
        }
       
    }
}