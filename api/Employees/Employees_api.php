<?php

class EmployeesApi
{
    function index()
    {
        echo json_encode(["employees" => Allemployee::display()]);
    }

    function find()
    {
        $fname = $_GET["first_name"];
        $lname = $_GET["last_name"];
        $id = $_GET["id"];

        echo json_encode(["employee" => Allemployee::searchByName($fname, $lname, $id)]);
    }

    function get_salary()
    {
        // $basic_salary = $_GET['basic_salary'];
        $id = $_GET['id'];
        if ($id) {
            $salary = Allemployee::get_salary($id);
            if ($id) {
                echo json_encode([
                    "success" => true,
                    "message" => "find salary successfully",
                    "status" => 200,
                    "basic_salary" => $salary
                ]);
            } else {
                echo   json_encode([
                    "success" => false,
                    "message" => "not found salary",
                    "status" => 404,
                    "basic_salary" => []
                ]);
            }
        } else {
            echo json_encode([
                "success" => false,
                "message" => "not found any id",
                "status" => 500,
                "basic_salary" => []
            ]);
        }

        // echo json_encode(["salary" => Allemployee::get_salary($id)]);
    }
}
