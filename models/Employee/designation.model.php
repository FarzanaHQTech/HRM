<?php
class Designation
{
    private $id;
    private $designation_name;
    private $department_id;

    public function __construct($id, $designation_name, $department_id)
    {
        $this->id = $id;
        $this->designation_name = $designation_name;
        $this->department_id = $department_id;
    }

    public function create()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO designation(designation_name,department_id) values(?,?)");
        $stmt->bind_param("si", $this->designation_name, $this->department_id);
        $result = $stmt->execute();
        return $result;
    }
    public static function display()
    {
        global $db;
        $stmt = $db->prepare("SELECT d.id, d.designation_name, dep.department_name as department 
        FROM designation d 
        JOIN departments dep ON d.department_id = dep.id");
        // $stmt = $db->prepare("SELECT * from designation");

        $stmt->execute();
        $result = $stmt->get_result();
        // print_r($result);
        // die();
        $designation = [];

        while ($row = $result->fetch_assoc()) {
            $designation[] = $row;
        }
        return $designation;
    }
    public static function search($id)
    {
        global $db;
        $stmt = $db->prepare("SELECT * from designation where id =?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_object();
        return $result;
    }

    // get designation ID
    public static function get_ID($designation_name)
    {
        global $db;
        $stmt = $db->prepare("SELECT d.id from designation d where designation_name =?");
        $stmt->bind_param("s", $designation_name);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_object();
        return $result;
    }

    public function update()
    {
        global $db;
        $stmt = $db->prepare("UPDATE  designation set designation_name=?,department_id=? where id = ?");
        $stmt->bind_param("sii", $this->designation_name, $this->department_id, $this->id);
        $result = $stmt->execute();
        return $result;
    }
    public static function delete($id)
    {
        global $db;
        $stmt = $db->prepare("DELETE from designation where id = ?");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        return $result;
    }
}
