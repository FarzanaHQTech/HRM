<?php 
class DesignationController{
    function create(){
        view("Employee");
    }
    function save(){

        if(isset($_POST['createDesig'])){
            $designation_name = htmlspecialchars($_POST['designation_name']);
            $department_id = htmlspecialchars($_POST['department_id']);
            $desigObj= new Designation("",$designation_name,$department_id);
            $designation = $desigObj->create();
            // echo $designation;
            if($designation ){
                redirect("index");
            }
        }
    }
    function index(){
        view("Employee");
    }
    function edit($id){
        $designation = Designation::search($id);
        view("Employee",$designation);
    }
    function update(){
        if(isset($_POST['updateDesig'])){
            $id = $_POST['id'];
            $designation_name = $_POST['designation_name'];
            $department = $_POST['department'];
            $updateObj = new Designation($id,$designation_name,$department);
            $designation = $updateObj->update();
            if($designation){
                redirect("index");
            }
        }
    }
    function delete($id){

        view("Employee",$id);
    }
    function confirm_delete($id){
        $delete = Designation::delete($id);
        if($delete){
            redirect("index");
        }
    }
    function cancel(){
        view("Employee");
    }
}

?>