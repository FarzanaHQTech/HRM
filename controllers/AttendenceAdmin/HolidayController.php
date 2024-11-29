<?php

class HolidayController{
    function index(){
        view("AttendenceAdmin");
    }
    function create(){
        view("AttendenceAdmin");
    }
    function save(){
        if(isset($_POST['btnCreate'])){
            $holiday_name = $_POST['holiday_name'];
            $holiday_date = $_POST['holiday_date'];

            $objCreate = new Holiday("",$holiday_name, $holiday_date);
            echo $objCreate->create();

            
        }
        redirect("index");
    }
    function edit(){
        view("AttendenceAdmin");
    }
    function delete(){
        view("AttendenceAdmin");
    }

}