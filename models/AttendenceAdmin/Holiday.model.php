<?php

class Holiday{
    public $id;
    public $holiday_name;
    public $holiday_date;

    public function __construct($id,$holiday_name,$holiday_date)
    {
        $this->id = $id;
        $this->holiday_name = $holiday_name;
        $this->holiday_date= $holiday_date;
    }
    public function create(){
        global $db;
        $stmt  = $db->prepare("INSERT INTO holiday (holiday_name,holiday_date) values(?,?)");
        $stmt->bind_param("ss",$this->holiday_name,$this->holiday_date);
        $result= $stmt->execute();
         return $result;
    }
    public static function display(){
        global $db;
        $stmt  = $db->prepare("SELECT * FROM holiday");
        
         $stmt->execute();
        $result = $stmt->get_result();
        //$results=$stmt->execute();
        // $result = $results->get_result();
        $holidays = [];

        while($row = $result->fetch_assoc()){
            $holidays[]= $row;
        }
        return $holidays;

    }
    public function search(){

    }
    public function edit(){

    }
    public function delete(){

    }
}