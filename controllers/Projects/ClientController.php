<?php

class ClientController{
    function create(){
        view("Projects");
    }

    function save(){
        if(isset($_POST['btnCreate'])){
            $client_name = $_POST['client_name'];
            $image = $_FILES['image'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $designation = $_POST['designation'];
            $company_name = $_POST['company_name'];
            $clients = upload($image,"img/client",$client_name);
            $creatObj = new Client("",$client_name,$clients,$email,$password,$phone,$designation,$company_name );
            // print_r($creatObj);
            // die();
            $clients = $creatObj->create();


            if($clients){
                redirect("index");
            }
        }
    }
    function index(){
        view("Projects");
    }
}