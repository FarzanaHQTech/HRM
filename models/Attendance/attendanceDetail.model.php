<?php

class Attendance
{
    public $id;
    public $employee_id;
    public $date;
    public $check_in_time;
    public $check_out_time;
    public $attendance_status_id;

    public function __construct($id, $employee_id, $date, $check_in_time, $check_out_time, $attendance_status_id)
    {
        $this->id = $id;
        $this->employee_id = $employee_id;
        $this->date = $date;
        $this->check_in_time = $check_in_time;
        $this->check_out_time = $check_out_time;
        $this->attendance_status_id = $attendance_status_id;
    }


    function createAttendance($employee_id, $date, $check_in_time, $check_out_time, $attendance_status_id)
    {
        global $db;
        $check_in_datetime = "$date $check_in_time";
        $check_out_datetime = "$date $check_out_time";

        $stmt = $db->prepare("INSERT INTO attendance (employee_id, date, check_in_time, check_out_time, attendance_status_id)VALUES (?, ?, ?, ?, ?)");

        $stmt->bind_param("isssi", $employee_id, $date,  $check_in_datetime,  $check_out_datetime, $attendance_status_id);
        $stmt->execute();
        error_log("Check-in: $check_in_datetime, Check-out: $check_out_datetime");

        return $stmt->affected_rows > 0;
    }



    static function display()
    {
        global $db;
        $query = $db->prepare("
        SELECT a.id, e.id, CONCAT(e.first_name, ' ', e.last_name) AS employee_name, e.image, a.date, a.check_in_time, a.check_out_time, s.status_name AS status
        FROM attendance a
        JOIN Employees e ON a.employee_id = e.id
        JOIN attendance_status s ON a.attendance_status_id = s.id
    ");

        if ($query === false) {
            // If the prepare fails, output the error
            die('MySQL prepare error: ' . $db->error);
        }

        $query->execute();
        $result = $query->get_result();

        if ($result === false) {
            // If the query execution fails, output the error
            die('MySQL execute error: ' . $query->error);
        }

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }


    static function find($id)
    {
        global $db;
        $query = $db->prepare("select * from attendance where id = ?");
        $query->bind_param("i", $id);
        $query->execute();
        $result = $query->get_result()->fetch_object();

        return $result;
    }
    function Update($id)
    {
        global $db;
        $updateQuery = $db->prepare("UPDATE attendance set( employee_id = ?, date =?, check_in_time=?,check_out_time=?,attendance_status_id=? where id = $id");

        $updateQuery->bind_param("isssi", $this->employee_id, $this->date, $this->check_in_time, $this->check_out_time, $this->attendance_status_id, $this->id);
        // $result = $query->execute();
        // return $result;
        $updateResult = $updateQuery->execute();

        if (!$updateResult) {
            return false; // Return early if the update fails
        }
        $joinQuery = $db->prepare("
            SELECT 
                a.id, 
                e.first_name, 
                e.last_name, 
                s.status_name 
            FROM attendance a
            JOIN Employees e ON a.employee_id = e.id
            JOIN attendance_status s ON a.attendance_status_id = s.id
            WHERE a.id = ?
        ");
        $joinQuery->bind_param("i", $id);
        $joinQuery->execute();
        $result = $joinQuery->get_result()->fetch_assoc();

        return $result; // Return the updated record with names
    }

    static function Delete($id)
    {
        global $db;
        $query = $db->prepare("DELETE  from attendance where id = ?");
        $query->bind_param("i", $id);
        $result = $query->execute();
        // $result = $query->get_result()->fetch_object();

        return $result;
    }

    public static function count($criteria = "")
    {
        global $db, $tx;
        $result = $db->query("select count(*) from {$tx}employees $criteria");
        list($count) = $result->fetch_row();
        return $count;
    }
}
