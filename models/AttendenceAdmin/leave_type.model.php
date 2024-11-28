<?php

class Leave_type
{

  public $id;
  public $name;
  public $total_leaves;
 
  public function __construct($id, $name,$total_leaves)
  {
    $this->id = $id;
    $this->name = $name;
    $this->total_leaves = $total_leaves;
   
    
  }
  public function create()
  {
    global $db;
    $result = $db->query("insert into Leave_type(name,total_leaves) values('$this->name',$this->total_leaves) ");
    return $result;
  }
 

  public static function display()
  {
    global $db;
    $result = $db->query("SELECT * from Leave_type");
   // return $result;
    if($result){
      $request=$result->fetch_all(MYSQLI_ASSOC);
      return $request;
    } 
    // $users = $result->fetch_all(MYSQLI_ASSOC);
    // return $users;
  }
 
}
