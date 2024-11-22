<?php
class DepartmentController
{

    function create()
    {

        view("Employee");
    }

    function save()
    {
        if (isset($_POST['createDept'])) {
            $department_name = $_POST['department_name'];
            $deptObj = new Department("", $department_name, "");
            $result = $deptObj->create();
            print_r($result);

            if ($deptObj) {
                redirect("index");
            }
        }
    }

    function index()
    {
        view("Employee");
    }

    function edit($id)
    {
        $department = Department::search($id);
        view("Employee", $department);
    }
    function update()
    {
        if (isset($_POST['updateDept'])) {
            $id = $_POST['id'];
            $department_name = $_POST['department_name'];
            $updateObj = new Department($id, $department_name, "");
            $result = $updateObj->update();
            if ($result) {
                redirect("index");
            }
        }
    }
    function delete($id)
    {

        view("Employee", $id);
    }
    function confirm_delete($id)
    {
        $result = Department::delete($id);
        if ($result) {
            redirect("index");
        }
    }
    function cancel()
    {

        redirect("index");
    }
}
