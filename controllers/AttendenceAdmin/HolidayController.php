<?php

class HolidayController
{
    function index()
    {
        view("AttendenceAdmin");
    }
    // function create(){
    //     view("AttendenceAdmin");
    // }



    function save()
    {
        if (isset($_POST['btnCreate'])) {
            $holiday_name = $_POST['holiday_name'];
            $holiday_date = $_POST['holiday_date'];

            $objCreate = new Holiday(null, $holiday_name, $holiday_date);
            if ($objCreate->create()) {
                redirect("index");
            } else {
                echo "Failed to add holiday.";
            }
        }

        exit();
    }

    function edit()
    {
        $id = $_GET['id'];
        $holiday = Holiday::search($id);
        view("AttendenceAdmin", $holiday);
    }
    function update_all()
    {
        if (isset($_POST['updateHoliday'])) {
            $id = $_POST['id'];
            $holiday_name = $_POST['holiday_name'];
            $holiday_date = $_POST['holiday_date'];

            $updateObj = new Holiday($id, $holiday_name, $holiday_date);
            $updateObj->edit();
            redirect("index");
            //    print_r ($updateObj->edit());
            //    die();
        }
    }


    function delete($id)
    {
        // $id=$_GET['id'];
        $holiday = Holiday::search($id);
        view("AttendenceAdmin", $holiday);
    }
    function delete_confirm($id)
    {
        // if(isset($_POST['delete'])){
        //   $id = $_POST['id'];
        $result = Holiday::delete($id);

        if ($result) {
            redirect("index");
        }
    }
    function cancel()
    {
        redirect("index");
    }


    //employee dashboad
    function emp_index()
    {
        view("AttendenceAdmin");
    }
}
