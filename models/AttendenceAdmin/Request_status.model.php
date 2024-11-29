<?php

class Request
{

  public $id;
  public $Leave_Request_Status;
 
  public function __construct($id, $Leave_Request_Status)
  {
    $this->id = $id;
    $this->Leave_Request_Status = $Leave_Request_Status;
   
    
  }
  public function create()
  {
    global $db;
    $result = $db->query("insert into Leave_Request_Status(status_name) values('$this->Leave_Request_Status') ");
    return $result;
  }
 

  public static function display()
  {
    global $db;
    $result = $db->query("SELECT * from Leave_Request_Status");
   // return $result;
    if($result){
      $request=$result->fetch_all(MYSQLI_ASSOC);
      return $request;
    } 
    // $users = $result->fetch_all(MYSQLI_ASSOC);
    // return $users;
  }
 
}
