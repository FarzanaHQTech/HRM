<?php

class Task
{
    public $id;
    public $employee_id;
    public $name;
    public $goal_type_id;
    public $assigned_date;
    public $due_date;
    public $completion_date;
    public $goal_status_id;

    public function __construct($id, $employee_id, $name, $goal_type_id, $assigned_date, $due_date, $completion_date, $goal_status_id)
    {
        $this->id = $id;
        $this->employee_id = $employee_id;
        $this->name = $name;
        $this->goal_type_id  = $goal_type_id;
        $this->assigned_date  = $assigned_date;
        $this->due_date  = $due_date;
        $this->completion_date = $completion_date;
        $this->goal_status_id = $goal_status_id;
    }

    // public function create()
    // {
    //     global $db;

    //     $stmt = $db->prepare("INSERT INTO employee_tasks (name, goal_type_id ,assigned_date, due_date , completion_date, goal_status_id) VALUES (?, ?, ?, ?, ?)");
    //     $stmt->bind_param("sisssi", $this->name, $this->goal_type_id, $this->due_date, $this->completion_date, $this->goal_status_id);

    //     // Execute and return the result
    //     return $stmt->execute();
    // }

    public function create()
    {
        global $db;

        $stmt = $db->prepare("INSERT INTO employee_tasks (employee_id,name, goal_type_id, assigned_date, due_date, completion_date, goal_status_id) VALUES (?,?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isisssi", $this->employee_id, $this->name, $this->goal_type_id, $this->assigned_date, $this->due_date, $this->completion_date, $this->goal_status_id);

        // Execute and return the result
        return $stmt->execute();
    }


    public static function display()
    {
        global $db;
        $query = $db->prepare("SELECT 
    t.id, 
    e.id eid,
    Concat(e.first_name, ' ' ,e.last_name) as full_name,
    t.name AS task,
    gt.name AS goal_type_name,
    t.assigned_date,
    gs.name AS status,
    t.due_date, 
    t.completion_date
FROM employee_tasks t
JOIN employees e ON t.employee_id = e.id
JOIN goal_types gt ON t.goal_type_id = gt.id
JOIN goal_status gs ON t.goal_status_id = gs.id
");

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
    t.id, 
    t.name AS task,
    gt.name AS goal_type_name,
    t.assigned_date,
    gs.name AS status,
    t.due_date, 
    t.completion_date
FROM employee_tasks t
JOIN goal_types gt ON t.goal_type_id = gt.id
JOIN goal_status gs ON t.goal_status_id = gs.id
");
        $query->bind_param("i", $id);
        $query->execute();
        return $query->get_result()->fetch_object();
    }

    public function update()
    {
        global $db;
        $stmt = $db->prepare("UPDATE employee_tasks SET name = ?, goal_type_id  = ?,assigned_date=?, due_date  = ?, completion_date = ?, goal_status_id = ? WHERE id = ?");
        $stmt->bind_param("sisssi", $this->name, $this->goal_type_id, $this->due_date, $this->completion_date, $this->goal_status_id, $this->id);

        return $stmt->execute();
    }

    public static function delete($id)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM employee_tasks WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
    public static function count($criteria = "")
    {
        global $db, $tx;
        $result = $db->query("select count(*) from {$tx}employee_tasks $criteria");
        list($count) = $result->fetch_row();
        return $count;
    }
}
