<?php


class UserController
{
  public function __construct() {}
  public function create()
  {
    view('user');
  }

  public function save_user()
  {
    if (isset($_POST['createUser'])) {
      $user_name = $_POST['user_name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $phone = $_POST['phone'];
      $role = $_POST['role'];
      $company = $_POST['company'];
      // $person_id = $_POST['person_id'];

      $createuser = new User(null, $user_name, $email,$password, $phone, $role, $company);
      // print_r($company);
      // die();
      echo $createuser->add();
    }
    redirect('index');
  }


  public function index()
  {
    view("user");
  }
  public function search()
  {
    view("user");
  }
  function search_all()
  {
    if (isset($_POST['btnSearch'])) {
      $id = $_POST['id'];
      $results = User::search($id);


      if ($results) {
        echo "User Name = " . $results->username . "<br>";
        echo "User Email = " . $results->email . "<br>";
        echo "User Phone = " . $results->mobile . "<br>";
        echo "User Role = " . $results->role_id . "<br>";
        echo "User company = " . $results->company_id . "<br>";
      }
     
    }
   
  }

  public function edit($id){

    // $id=$_GET["id"];
    $user= User::search($id);
    // print_r($value);
   view("user",$user);
  }

  public function Update_all($id) {
    
   
    if(isset($_POST['updateUser'])){
      $id = htmlspecialchars($_POST['id']);
      $user_name =htmlspecialchars($_POST['user_name']);
      $email = htmlspecialchars($_POST['email']);
      $phone = htmlspecialchars($_POST['phone']);
      $role = htmlspecialchars($_POST['role']);
      $company= htmlspecialchars($_POST['company']);
      // $person_id = htmlspecialchars($_POST['person_id']);

      $editObj = new User($id,$user_name,$email,"",$phone,$role,$company);
      
     $result=  $editObj->edit($id);
     //print_r($result);
   
    }
     redirect("index");
    }
    public function delete($id){
      // $id=$_GET['id'];
      // $user = User::search($id);
      view("user",$id);
    }
    public function delete_confirm($id){
      // if(isset($_POST['delete'])){
      //   $id = $_POST['id'];
        $result = User::delete($id);
        print_r($result);
      // return $result;
      // }
      if($result){
      redirect("index");
    }

    }
 function cancel(){
  redirect("index");
 }
  }
