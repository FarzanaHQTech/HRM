<?php

class ClientController{
    function create(){
        view("Projects");
    }

    function save(){
        if(isset($_POST['btnCreate'])){
            $client_name = $_POST['client_name'];
            $username = $_POST['username'];
            $image = $_FILES['image'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $company_name = $_POST['company_name'];
            $role_id = $_POST['role_id'];
            $designation = $_POST['designation'];
            $clients_photo = upload($image,"img/client",$client_name);
            $creatObj = new Client("",$client_name,$username,$clients_photo,$email,$password,$phone,$company_name,$role_id,$designation );
            // echo "<pre>";
            // print_r($creatObj);
            // die();
            $clients = $creatObj->create();
            if (isset($_POST['password'])) {

                $createuser = new User("", $username, $email, $password, $phone, $role_id, $company_name);
                echo $createuser->add();
            }
            if($clients){
                redirect("index");
            }
        }
    }
    function index(){
        view("Projects");
    }
}