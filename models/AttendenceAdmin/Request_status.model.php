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
    $result = $db->query("insert into leave_request_status(status_name) values('$this->Leave_Request_Status') ");
    return $result;
  }

  public static function search($status)
  {
    global $db;

    // Use a prepared statement
    $stmt = $db->prepare("SELECT * 
                           FROM leave_request_status 
                           WHERE status_name = ?");
    if (!$stmt) {
      die('Prepare failed: ' . $db->error); // Debugging prepare error
    }

    // Bind the parameter
    $stmt->bind_param('s', $status); // 's' indicates a string parameter

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $get_result = $result->fetch_object();

    // Close the statement
    $stmt->close();

    return $get_result;
  }



  public static function display()
  {
    global $db;
    $result = $db->query("SELECT * from leave_request_status");
    // return $result;
    if ($result) {
      $request = $result->fetch_all(MYSQLI_ASSOC);
      return $request;
    }
    // $users = $result->fetch_all(MYSQLI_ASSOC);
    // return $users;
  }
}
