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
}
