<?php

class Holiday
{
    public $id;
    public $holiday_name;
    public $holiday_date;

    public function __construct($id, $holiday_name, $holiday_date)
    {
        $this->id = $id;
        $this->holiday_name = $holiday_name;
        $this->holiday_date = $holiday_date;
    }
    public function create()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO holiday (holiday_name, holiday_date) VALUES (?, ?)");
        $stmt->bind_param("ss", $this->holiday_name, $this->holiday_date);
        if ($stmt->execute()) {
            return true;
        } else {
            die("Error: " . $db->error);
        }
    }
    public static function display()
    {
        global $db;
        $stmt  = $db->prepare("SELECT * FROM holiday");

        $stmt->execute();
        $result = $stmt->get_result();
        $holidays = [];

        while ($row = $result->fetch_assoc()) {
            $holidays[] = $row;
        }
        return $holidays;
    }
    public static function search($id)
    {
        global $db;
        $stmt = $db->prepare("select * from holiday where id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $holiday = $stmt->get_result()->fetch_object();
        // print_r ($roles);
        return $holiday;
    }
    public function edit()
    {
        global $db;

        // Use prepared statements to avoid SQL injection
        $stmt = $db->prepare("UPDATE holiday SET holiday_name = ?, holiday_date = ? WHERE id = ?");
        $stmt->bind_param("ssi", $this->holiday_name, $this->holiday_date, $this->id);
        if ($stmt->execute()) {
            return "Holiday updated successfully!";
        } else {
            return "Error updating Holiday: " . $db->error;
        }
    }
    public  static function delete($id)
    {
        global $db;
        $stmt = $db->prepare("delete from holiday where id = ?");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        return $result;
    }
}
