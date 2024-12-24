<?php

class Goal
{
    public $id;
    public $employee_id;
    public $goal_type_id;
    public $start_date;
    public $end_date;
    public $goal_status_id;

    public function __construct($id, $employee_id, $goal_type_id, $start_date, $end_date, $goal_status_id)
    {
        $this->id = $id;
        $this->employee_id = $employee_id;
        $this->goal_type_id = $goal_type_id;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->goal_status_id = $goal_status_id;
    }

    public function create()
    {
        global $db;

        // Correct SQL query and bind parameters properly
        $stmt = $db->prepare("INSERT INTO employee_goals (employee_id, goal_type_id, start_date, end_date, goal_status_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iissi", $this->employee_id, $this->goal_type_id, $this->start_date, $this->end_date, $this->goal_status_id);

        // Execute and return the result
        return $stmt->execute();
    }

    public static function display()
    {
        global $db;
        $query = $db->prepare("SELECT 
        g.id,
            CONCAT(e.first_name, ' ', e.last_name) AS full_name,
            gt.name AS goal_type_name,
            gs.name AS status,
            g.start_date, 
            g.end_date
        FROM employee_goals g
        JOIN employees e ON g.employee_id = e.id
        JOIN goal_types gt ON g.goal_type_id = gt.id
        JOIN goal_status gs ON g.goal_status_id = gs.id");

        $query->execute();
        $result = $query->get_result();

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public static function find($id)
    {
        global $db;
        $query = $db->prepare("SELECT 
            CONCAT(e.first_name, ' ', e.last_name) AS full_name,
            gt.name AS goal_type_name,
            gs.name AS status,
            g.start_date, 
            g.end_date
        FROM employee_goals g
        JOIN employees e ON g.employee_id = e.id
        JOIN goal_types gt ON g.goal_type_id = gt.id
        JOIN goal_status gs ON g.goal_status_id = gs.id
        WHERE g.id = ?");
        $query->bind_param("i", $id);
        $query->execute();
        return $query->get_result()->fetch_object();
    }

    public function update()
    {
        global $db;
        $stmt = $db->prepare("UPDATE employee_goals SET employee_id = ?, goal_type_id = ?, start_date = ?, end_date = ?, goal_status_id = ? WHERE id = ?");
        $stmt->bind_param("iissii", $this->employee_id, $this->goal_type_id, $this->start_date, $this->end_date, $this->goal_status_id, $this->id);

        return $stmt->execute();
    }

    public static function delete($id)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM employee_goals WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
