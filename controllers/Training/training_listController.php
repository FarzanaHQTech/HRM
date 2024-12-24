<?php




class Training_listController
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
            $trainer_id = $_POST['trainer_id'];
            $training_type_id = $_POST['training_type_id'];
            $employee_ids = $_POST['employee_id']; // Array of selected employees
            $cost = $_POST['cost'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $status = $_POST['status'];

            foreach ($employee_ids as $employee_id) {
                $trainingObj = new Training_list(
                    null,
                    $training_type_id,
                    $trainer_id,
                    $employee_id,
                    $cost,
                    $start_date,
                    $end_date,
                    $status
                );
                $trainingObj->create(); // Save each employee's record
            }

            redirect("index");
        }
    }

    function edit($id)
    {
        $Training_list = Training_list::search($id);
        view("Training", $Training_list);
    }

    function update($id)
    {
        if (isset($_POST['btnUpdate'])) {
            $trainer_id = $_POST['trainer_id'];
            $training_type_id = $_POST['training_type_id'];
            $employee_ids = $_POST['employee_id'];
            $cost = $_POST['cost'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $status = $_POST['status'];

            Training_list::deleteByTrainingId($id); // Delete existing employee records for this training

            foreach ($employee_ids as $employee_id) {
                $trainingObj = new Training_list(
                    $id,
                    $training_type_id,
                    $trainer_id,
                    $employee_id,
                    $cost,
                    $start_date,
                    $end_date,
                    $status
                );
                $trainingObj->create();
            }

            redirect("index");
        }
    }

    function delete($id)
    {
        $training = Training_list::search($id);
        view("Training", $training);
    }
    function confirm($id)
    {
        Training_list::delete($id);
        redirect("index");
    }
    function cancel($id)
    {

        redirect("index");
    }
}
