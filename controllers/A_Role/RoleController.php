<?php
class RoleController{
    function create(){
        view("A_Role");
    }
    function save_role(){
        if(isset($_POST['addRole'])){
            // $id = $_POST['id'];
            $role_name = $_POST['role_name'];
            $roleObj = new Role("",$role_name,"","");
              echo  $roleObj->create();
            //   print_r($_POST);
            //   die();
        }
        redirect("index");
        
    }

    function index(){
        view("A_Role"); 
    }
    function edit(){
        $id = $_GET['id'];
        $role = Role::search($id);
        // print_r($role);
        view("A_Role",$role);
    
        }
    
  

    function update_all(){

        if(isset($_POST['updateRole'])){
            $id = $_POST['id'];
            $role_name = $_POST['role_name'];
    
            $updateObj = new Role($id, $role_name,"","");
            $updateObj->update();
            redirect("index");
           print_r ($updateObj->update());
           die();

   }
}

   function delete($id){
    // $id = $_GET['id'];
    // ;
    view("A_Role",$id);
   }

   function delete_confirm($id){
    global $db;

   $result = Role::delete($id);
    // print_r($result);
    // die();
//    die();
if($result){
    redirect("index");
  }else{
    echo "somthing wrong".$db->error;
  }
//   if($result) {
//     ;
  //}
   
}

  

}
   

?>
