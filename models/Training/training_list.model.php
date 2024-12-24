<?php


class Training_list
{
    public $id;
    public $training_type_id;
    public $trainer_id;
    public $employee_id;
    public $cost;
    public $start_date;

    public $end_date;
    public $status_id;

    public function __construct($id, $training_type_id, $trainer_id, $employee_id, $cost, $start_date, $end_date, $status_id)
    {
        $this->id = $id;
        $this->training_type_id = $training_type_id;
        $this->trainer_id = $trainer_id;
        $this->employee_id = $employee_id;
        $this->cost = $cost;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->status_id = $status_id;
    }

    function create()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO training_lists (training_type_id, trainer_id, employee_id, cost, start_date, end_date,status_id) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("iiidssi", $this->training_type_id, $this->trainer_id, $this->employee_id, $this->cost, $this->start_date, $this->end_date, $this->status_id);
        return $stmt->execute();
    }


    static function search($id)
    {
        global $db;

        // Correct SQL query
        $stmt = $db->prepare(
            "SELECT 
            tl.id, 
            tt.type_name AS tname, 
            tl.start_date, 
            tl.end_date, 
            tl.cost, 
            s.status_name AS status, 
            CONCAT(et.first_name, ' ', et.last_name) AS trainer_name,
            GROUP_CONCAT(CONCAT(e.first_name, ' ', e.last_name)) AS team,
            t.email, 
            t.phone AS mobile, 
            et.image AS image
        FROM 
            training_lists tl
        JOIN 
            training_types tt ON tl.training_type_id = tt.id
        JOIN 
            trainers t ON tl.trainer_id = t.id
        JOIN 
            employees et ON t.employee_id = et.id
        JOIN 
            employees e ON tl.employee_id = e.id
        JOIN 
            status s ON tl.status_id = s.id
        WHERE 
            tl.id = ?
        GROUP BY 
            tl.id, tt.type_name, tl.start_date, tl.end_date, tl.cost, 
            s.status_name, et.first_name, et.last_name, t.email, 
            t.phone, et.image"
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



    static function deleteByTrainingId($training_id)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM training_lists WHERE id = ?");
        $stmt->bind_param("i", $training_id);
        return $stmt->execute();
    }



    static function display()
    {
        global $db;

        // Correct SQL query
        $stmt = $db->prepare("
        SELECT 
            tl.id, 
            tt.type_name AS tname, 
            tl.start_date, 
            tl.end_date, 
            tl.cost, 
            s.status_name AS status, 
            CONCAT(et.first_name, ' ', et.last_name) AS trainer_name, 
            GROUP_CONCAT(CONCAT(e.first_name, ' ', e.last_name) SEPARATOR ', ') AS team, 
            t.email, 
            t.phone AS mobile, 
            et.image AS image
        FROM 
            training_lists tl
        JOIN 
            training_types tt ON tl.training_type_id = tt.id
        JOIN 
            trainers t ON tl.trainer_id = t.id
        JOIN 
            employees et ON t.employee_id = et.id
        JOIN 
            employees e ON tl.employee_id = e.id
        JOIN 
            status s ON tl.status_id = s.id
        GROUP BY 
            tl.id, tt.type_name, tl.start_date, tl.end_date, 
            tl.cost, s.status_name, et.first_name, et.last_name, 
            t.email, t.phone, et.image
    ");

        // Execute and fetch results
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    function edit()
    {
        global $db;
        // Use prepared statements to avoid SQL injection
        $stmt = $db->prepare("UPDATE trainers SET trianing_type_id=?, trainer_id= ? employee_id = ?, cost = ?,start_date = ?,end_date=?,end_date=? WHERE id = ?");
        $stmt->bind_param("iiidssi", $this->trainer_id, $this->training_type_id, $this->employee_id, $this->cost, $this->start_date, $this->end_date, $this->end_date, $this->id);
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
        global $db;

        // Calculate the offset for the current page
        $offset = ($page - 1) * $perpage;

        // Query for paginated data
        $stmt = $db->prepare("
        SELECT 
            tl.id, 
            tt.type_name AS tname, 
            tl.start_date, 
            tl.end_date, 
            tl.cost,
            s.status_name AS status,
            CONCAT(et.first_name, ' ', et.last_name) AS trainer_name,
            GROUP_CONCAT(CONCAT(e.first_name, ' ', e.last_name)) AS team,
            t.email,
            t.phone AS mobile,
            et.image AS image
        FROM 
            training_lists tl
        JOIN 
            training_types tt ON tl.training_type_id = tt.id
        JOIN 
            trainers t ON tl.trainer_id = t.id
        JOIN 
            employees et ON t.employee_id = et.id
        JOIN 
            employees e ON tl.employee_id = e.id
        JOIN 
            status s ON tl.status_id = s.id
        GROUP BY 
            tl.id
        LIMIT ?, ?
    ");
        $stmt->bind_param("ii", $offset, $perpage);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);

        // Query for total number of rows (for pagination links)
        $totalResult = $db->query("SELECT COUNT(*) AS total FROM training_lists");
        $totalRows = $totalResult->fetch_object()->total;

        return ['data' => $data, 'total' => $totalRows];
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
         designation:$this->cost>
         start_date:$this->start_date<br>
         end_date:$this->end_date<br>
         status:$this->end_date<br>
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



//}
