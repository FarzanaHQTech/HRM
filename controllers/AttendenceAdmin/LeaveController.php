<?php
class LeaveController{
    function index(){
        view("AttendenceAdmin");
    }
    function create(){
        view("AttendenceAdmin");
    }
    function save(){
        if(isset($_POST['btnCreate'])){
            $req_name = $_POST['req_name'];
            $createObj = new Request("",$req_name);
            // print_r($createObj);
            // die();
            $results = $createObj->create();

           if($results){
            redirect("index");
           }
        
        }
       
    }
}