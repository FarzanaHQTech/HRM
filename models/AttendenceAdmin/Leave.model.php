<?php

class Leave
{

  public $id;
  public $employee_id;
  public $leave_type_id;
  public $start_date;
  public $end_date;
  public $number_of_leave;
  public $remaining_leave;
  public $reason;
  public $req_status_id;
 
  public function __construct($id, $employee_id,$leave_type_id,$start_date,$end_date,$number_of_leave,$remaining_leave,$reason,$req_status_id)
  {
    $this->id = $id;
    $this->employee_id = $employee_id;
    $this->leave_type_id = $leave_type_id;
    $this->start_date = $start_date;
    
    $this->end_date = $end_date;
    $this->remaining_leave = $remaining_leave;
    $this->number_of_leave = $number_of_leave;
    $this->reason = $reason;
    $this->req_status_id =$req_status_id;
    
  }
  public function create()
  {
    global $db;
    $result = $db->query("insert into Leave_Request(employee_id,leave_type_id,start_date,end_date,number_of_leave,reason,req_status_id) values($this->employee_id,$this->leave_type_id,'$this->start_date','$this->end_date',$this->remaining_leave,$this->number_of_leave,'$this->reason',$this->req_status_id ) ");
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
