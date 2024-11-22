<?php

class Role{
    public $id;
    public $role_name;
    public $created_at;
    public $updated_at;
    

    public function __construct($id,$role_name,$created_at,$updated_at)
    {
       $this->id = $id; 
       $this->role_name = $role_name; 
       $this->created_at =$created_at; 
       $this->updated_at = $updated_at; 
    //    $this->db = $db; 
    }
    public function create(){
        global $db;
        $stmt = $db->prepare("INSERT INTO roles(role_name) values(?)");
        $stmt->bind_param("s",$this->role_name);
        return $stmt->execute();
    }
    public static function display(){
        global $db;
        $stmt = $db->query("SELECT * From roles");
        $roles = [];
        while($row = $stmt->fetch_assoc()){
            $roles[] = $row;
        }
        // $role= $stmt->fetch_all(MYSQLI_ASSOC);
        return $roles;
    }
    public static function search($id){
        global $db;
        $stmt = $db->prepare("select * from roles where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $roles= $stmt->get_result()->fetch_object();
        // print_r ($roles);
        return $roles;
    }


    public function update(){
        global $db;
    
        // Use prepared statements to avoid SQL injection
        $stmt = $db->prepare("UPDATE roles SET role_name = ? WHERE id = ?");
        $stmt->bind_param("si", $this->role_name, $this->id);
    
        if ($stmt->execute()) {
            return "Role updated successfully!";
        } else {
            return "Error updating role: " . $db->error;
        }
    }
    
    public static  function delete($id){
        global $db;
        $stmt = $db->prepare("delete from roles where id = ?");
        $stmt->bind_param("i",$id);
        $result= $stmt->execute();
        return $result;

        // if ($stmt->execute()) {
        //     echo "Role deleted successfully.";
        // } else {
        //     echo "Error deleting role: " . $db->error;
        // }
    }

}