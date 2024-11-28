<?php
 class MartialController{
    function create(){
        view("Employee");
    }
    function save(){
        if(isset($_POST['btnCreate'])){
            $name = $_POST['name'];
            $createObj = new Martial("",$name);
            $martial = $createObj->create();
            if($martial){
                redirect("index");
            }
        }
    }
    function index(){
        view("Employee");
    }
 }
?>