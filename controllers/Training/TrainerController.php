<?php

class TrainerController
{
    function index()
    {
        view("Training");
    }
    function create()
    {
        view("Training");
    }
    function save()
    {
        if (isset($_POST['btnCreate'])) {
            $employee_id = $_POST['employee_id'];
            $designation = $_POST['designation'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $status = $_POST['status'];

            $creatObj = new Trainer("", "", $employee_id, $designation, $email, $phone, $status);
            if ($creatObj->create()) {
                redirect("index");
            }
        }
    }
    function edit($id)
    {
        $trainer = Trainer::search($id);
        view("Training", $trainer);
    }
    function update($id)
    {
        if (isset($_POST['btnUpdate'])) {
            $employee_name = $_POST['employee_name'];
            $designation = $_POST['designation'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $status = $_POST['status'];

            $creatObj = new Trainer("", "", $employee_name, $designation, $email, $phone, $status);
            if ($creatObj->edit()) {
                redirect("index");
            }
        }
    }
    function delete($id)
    {
        $trainer = Trainer::search($id);
        view("Training", $trainer);
    }

    function confirm($id)
    {
        $trainer = Trainer::delete($id);
        if ($trainer) {
            redirect("index");
        }
    }
    function cancel($id)
    {
        redirect("index");
    }
}
