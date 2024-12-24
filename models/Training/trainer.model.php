<?php

class Trainer
{
    private $db;
    public $id;
    public $employee_id;
    public $designation_id;
    public $email;
    public $phone;

    public $status_id;

    public function __construct($db, $id, $employee_id, $designation_id, $email, $phone, $status_id)
    {
        $this->id = $id;
        $this->employee_id = $employee_id;
        $this->designation_id = $designation_id;
        $this->email = $email;
        $this->phone = $phone;
        $this->status_id = $status_id;
    }

    function create()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO trainers (employee_id, designation_id,email,phone,status_id) VALUES (?, ?,?,?,?)");
        $stmt->bind_param("iissi", $this->employee_id, $this->designation_id, $this->email, $this->phone, $this->status_id);
        if ($stmt->execute()) {
            return true;
        } else {
            die("Error: " . $db->error);
        }
    }

    static function search($id)
    {
        global $db;

        // Correct SQL query
        $stmt = $db->prepare(
            "SELECT t.id, CONCAT(e.first_name , ' ', e.last_name) AS full_name, e.email, e.mobile, e.image AS image,
        d.designation_name AS designation, s.status_name AS status  
        FROM trainers t
        JOIN employees e ON t.employee_id = e.id 
        JOIN designation d ON t.designation_id = d.id
        JOIN status s ON t.status_id = s.id
        WHERE t.id = ?"
        );


        if (!$stmt) {
            die("Error preparing query: " . $db->error);
        }
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $trainer = $stmt->get_result()->fetch_object();
        $stmt->close();
        return $trainer;
    }


    static function display()
    {
        global $db;

        // Correct SQL query
        $stmt = $db->prepare(
            "SELECT t.id, CONCAT(e.first_name , '  ' , e.last_name) AS full_name, e.email, e.mobile, e.image as image,
        d.designation_name AS designation, s.status_name AS status  
        FROM trainers t
        JOIN employees e ON t.employee_id = e.id 
        JOIN designation d ON t.designation_id = d.id
        JOIN status s ON t.status_id = s.id"
        );

        // Check if prepare failed
        if (!$stmt) {
            die("Error preparing query: " . $db->error);
        }

        // Execute the query
        $stmt->execute();
        $result = $stmt->get_result();
        $trainers = [];

        // Fetch results
        while ($row = $result->fetch_assoc()) {
            $trainers[] = $row;
        }

        return $trainers;
    }

    function edit()
    {
        global $db;
        // Use prepared statements to avoid SQL injection
        $stmt = $db->prepare("UPDATE trainers SET employee_id = ?, designation_id = ?,email = ?,phone=?,status_id=? WHERE id = ?");
        $stmt->bind_param("sissi", $this->employee_id, $this->designation_id, $this->email, $this->phone, $this->status_id, $this->id);
        if ($stmt->execute()) {
            return "trainers updated successfully!";
        } else {
            return "Error updating trainers: " . $db->error;
        }
    }
    static  function delete($id)
    {
        global $db;
        $stmt = $db->prepare("delete from trainers where id = ?");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        return $result;
    }

    public static function pagination($page = 1, $perpage = 10, $criteria = "")
    {
        global $db, $tx;
        $top = ($page - 1) * $perpage;
        $result = $db->query("select id,employee_id,designation_id,email,phone,status_id from {$tx}trainers $criteria limit $top,$perpage");
        $data = [];
        while ($trainer = $result->fetch_object()) {
            $data[] = $trainer;
        }
        return $data;
    }

    static function get_last_id()
    {
        global $db, $tx;
        $result = $db->query("select max(id) last_id from {$tx}traibers");
        $payslip = $result->fetch_object();
        return $payslip->last_id;
    }
    public function json()
    {
        return json_encode($this);
    }
    public function __toString()
    {
        return "		Id:$this->id<br>
		Employee Id:$this->employee_id<br>
		designation:$this->designation_id>
		email:$this->email<br>
		phone:$this->phone<br>
		status:$this->status_id<br>
";
    }


    // HTML //
    function html_select($name = "cmbTrainers")
    {
        global $db;
        $html = "<select id = '$name', name = '$name'>";
        $result = $db->query("SELECT id,nmae from trainers");
        while ($trainer = $result->fetch_object()) {
            $html .= "<option value ='$trainer->id'>$trainer->name</option>";
        }
        $html .= "</select>";
        return $html;
    }
}
