<?php

class User
{

  public $id;
  public $username;
  public $email;
  public $password;
  public $mobile;
  // public $image;
  public $role_id;
  public $company_id;
  public function __construct($id, $username, $email, $password, $mobile, $role_id, $company_id)
  {
    $this->id = $id;
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->mobile = $mobile;
    // $this->image = $image;  
    $this->role_id = $role_id;
    $this->company_id = $company_id;
  }
  public function add()
  {
    global $db;
    $result = $db->query("insert into users (username,email,password,mobile,role_id,company_id) values('$this->username','$this->email','$this->password','$this->mobile',$this->role_id,$this->company_id)");
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
    if ($result) {
      $user = $result->fetch_all(MYSQLI_ASSOC);
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
    $result = $db->query("update users set username = '$this->username', email='$this->email', mobile='$this->mobile',role_id = $this->role_id,role_id = $this->company_id where id = $this->id");
    return $result;
  }
  public static function delete($id)
  {
    global $db;
    $result = $db->query("delete from users where id = $id");

    return $result;
  }


  public static function pagination($page = 1, $perpage = 10, $criteria = "")
  {
    global $db, $tx;
    $top = ($page - 1) * $perpage;
    $result = $db->query("select id,name from users $criteria limit $top,$perpage");
    $data = [];
    while ($row = $result->fetch_object()) {
      $data[] = $row;
    }
    return $data;
  }
  public static function count($criteria = "")
  {
    global $db, $tx;
    $result = $db->query("select count(*) from users $criteria");
    list($count) = $result->fetch_row();
    return $count;
  }
}
