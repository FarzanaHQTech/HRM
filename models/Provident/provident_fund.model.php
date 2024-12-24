<?php

class Provident
{

    public $id;
    public $employee_id;
    public $provident_type_id;
    public $emp_amount;
    public $org_amount;
    public $organization_share;

    public $employee_share;

    public function __construct($id, $employee_id, $provident_type_id, $emp_amount, $org_amount, $organization_share, $employee_share)
    {
        $this->id = $id;
        $this->employee_id = $employee_id;
        $this->provident_type_id  = $provident_type_id;
        $this->emp_amount  = $emp_amount;
        $this->org_amount  = $org_amount;
        $this->organization_share  = $organization_share;
        $this->employee_share  = $employee_share;
    }

    function create()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO provident_fund (employee_id, provident_type_id ,emp_amount,org_amount ,organization_share ,employee_share ) VALUES (?, ?,?,?,?,?)");
        $stmt->bind_param("iidddd", $this->employee_id, $this->provident_type_id, $this->emp_amount, $this->org_amount, $this->organization_share, $this->employee_share);
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
            "SELECT e.id, CONCAT(e.first_name , '  ' , e.last_name) AS full_name,pt.provident_type as type,pf.emp_amount, pf.org_amount ,pf.organization_share,pf.employee_share
            Form provident_fund pf
        JOIN employees e ON pf.employee_id = e.id 
        JOIN provident_type pt ON pt.provident_type_id  = pf.id where id = ?"
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
            "SELECT 
                e.id, 
            
                e.image AS image, 
                CONCAT(e.first_name, ' ', e.last_name) AS full_name, 
                pt.type_name AS type, 
                pf.emp_amount, 
                pf.org_amount, 
                pf.organization_share, 
                pf.employee_share 
            FROM provident_fund pf
            JOIN employees e ON pf.employee_id = e.id 
            JOIN provident_type pt ON pf.provident_type_id = pt.id"
        );

        // Check if prepare failed
        if (!$stmt) {
            die("Error preparing query: " . $db->error);
        }

        // Execute the query
        $stmt->execute();
        $result = $stmt->get_result();
        $provident_fund = [];

        // Fetch results
        while ($row = $result->fetch_assoc()) {
            $provident_fund[] = $row;
        }

        return $provident_fund;
    }

    function edit()
    {
        global $db;
        // Use prepared statements to avoid SQL injection
        $stmt = $db->prepare("UPDATE provident_fund SET employee_id = ?, provident_type_id  = ?,emp_amount=?,org_amount  = ?,organization_share =?,employee_share =? WHERE id = ?");
        $stmt->bind_param("iiddddi", $this->employee_id, $this->provident_type_id, $this->emp_amount, $this->org_amount, $this->organization_share, $this->employee_share, $this->id);
        if ($stmt->execute()) {
            return "provident_fund updated successfully!";
        } else {
            return "Error updating trainers: " . $db->error;
        }
    }
    static  function delete($id)
    {
        global $db;
        $stmt = $db->prepare("delete from provident_fund where id = ?");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        return $result;
    }

    public static function pagination($page = 1, $perpage = 10, $criteria = "")
    {
        global $db, $tx;
        $top = ($page - 1) * $perpage;
        $result = $db->query("select id,employee_id,provident_type_id ,org_amount ,organization_share ,employee_share  from {$tx}provident_fund $criteria limit $top,$perpage");
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
		designation:$this->provident_type_id >
		org_amount :$this->org_amount <br>
		organization_share :$this->organization_share <br>
		status:$this->employee_share <br>
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
