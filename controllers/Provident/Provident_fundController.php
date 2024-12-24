<?php
class Provident_fundController
{

    function index()
    {
        view("Provident");
    }
    function create()
    {
        view("Provident");
    }
    public function save()
    {
        if (isset($_POST['btnCreate'])) {
            $employee = $_POST['employee'];
            $provident_type = $_POST['provident_type'];
            $emp_amount = $_POST['emp_amount'];
            $org_amount = $_POST['org_amount'];
            $organization_share = $_POST['organization_share'];
            $employee_share = $_POST['employee_share'];

            $provident = new Provident("", $employee, $provident_type, $emp_amount, $org_amount, $organization_share, $employee_share);

            if ($provident->create()) {
                redirect("index");
            }
        }
    }

    function edit($id) {}


    function confirm($id)
    {
        view("Provident");
    }
    function delete($id)
    {
        ProvidentType::delete($id);
        redirect();
    }
    function show($id)
    {
        view("Provident", ProvidentType::find($id));
    }
}
