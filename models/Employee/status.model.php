<?php
class Status{
    

    private $id;
    private $status_name;

    public function __construct($id,$status_name)
    {
       $this->id = $id; 
       $this->status_name = $status_name; 
    }

    public function create(){
        global $db;
        $stmt = $db->query("INSERT INTO status(status_name) values('$this->status_name')");
        return $stmt;
    }
    public static function display(){
        global $db;
        $stmt = $db->query("SELECT * from status");
        if (!$stmt) {
            die("Database query failed: " . $db->error);
        }
        $result = [];
        while($row=$stmt->fetch_assoc()){
            $result[]=$row;
        }
        return $result;
    }
}