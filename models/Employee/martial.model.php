<?php
class Martial{
    private $id;
    private $name;

    public function __construct($id,$name)
    {
       $this->id = $id; 
       $this->name = $name; 
    }

    public function create(){
        global $db;
        $stmt = $db->query("INSERT INTO martial_status(name) values('$this->name')");
        return $stmt;
    }
    public static function display(){
        global $db;
        $stmt = $db->query("SELECT * from martial_status");
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