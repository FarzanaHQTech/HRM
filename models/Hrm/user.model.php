<?php

class User
{

  public $id;
  public $username;
  public $email;
  public $mobile;
  // public $image;
  public $role_id;
  public $company_id;
  public function __construct($id, $username, $email, $mobile, $role_id, $company_id)
  {
    $this->id = $id;
    $this->username = $username;
    $this->email = $email;
    $this->mobile = $mobile;
    // $this->image = $image;  
    $this->role_id = $role_id;
    $this->company_id = $company_id;
  }
  public function add()
  {
    global $db;
    $result = $db->query("insert into users (username,email,mobile,role_id,company_id) values('$this->username','$this->email','$this->mobile',$this->role_id,$this->company_id)");
    return $result;
  }
 

  public static function display()
  {
    global $db;
    $result = $db->query("SELECT u.id, u.username, u.email, u.mobile, r.role_name AS role, c.company_name AS company 
                          FROM users u 
                          JOIN roles r ON u.role_id = r.id 
                          JOIN company c ON u.company_id = c.id

    ");
    
   // return $result;
    if($result){
      $user=$result->fetch_all(MYSQLI_ASSOC);
      return $user;
    }
    
    
    // $users = $result->fetch_all(MYSQLI_ASSOC);
    // return $users;
  }
  // Warning: Undefined array key "person_id" in C:\Users\USER\Desktop\XAM
  public static function search($id)
  {
    global $db;
    $result = $db->query("select * from users where id = $id");
    $user = $result->fetch_object();
    return $user;
  }
  public function edit()
  {

    global $db;
    $result = $db->query("update users set username = '$this->username', email='$this->email', mobile='$this->mobile',role_id = '$this->role_id',role_id = '$this->company_id' where id = $this->id");
    return $result;
  }
  public static function delete($id)
  {
    global $db;
    $result = $db->query("delete from users where id = $id");

    return $result;
  }
}
