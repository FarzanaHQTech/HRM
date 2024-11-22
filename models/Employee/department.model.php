<?php
class Department{
    Private $id;
    Private $department_name;
    Private $description;
    
    public function __construct($id,$department_name,$description)
    {
        $this->id = $id;
        $this->department_name = $department_name;
        $this->description = $description;
    }

    public function create(){
        global $db;
        $stmt = $db->prepare("INSERT INTO departments(department_name) values(?)");

        $stmt->bind_param("s",$this->department_name);
        $results= $stmt->execute();
        return $results;

    }
    public static function display(){
        global $db;
        $stmt = $db->prepare("Select * from departments");
        $stmt->execute();
        $results=$stmt->get_result();
        $departments = [];

        while($row = $results->fetch_assoc()){
            $departments[]=$row;
        }
        return $departments;


    }
    public static function search($id){
        global $db;
        $stmt = $db->prepare("SELECT * from departments where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_object();
        return $result;
    }
    public function update(){
        global $db;
        $stmt = $db->prepare("UPDATE departments set department_name = ? where id = ?");
        $stmt->bind_param("si",$this->department_name,$this->id);
        $result =$stmt->execute();
        return $result;
    }
    public static function delete($id){
        global $db;
        $stmt = $db->prepare("DELETE from departments where id = ?");
        $stmt->bind_param("i",$id);
        $result = $stmt->execute();
        return $result;
    }
}

?>