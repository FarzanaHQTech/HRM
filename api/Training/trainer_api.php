<?php
class TrainerApi
{
    function get_trainer()
    {
        $id = $_GET['id'];

        echo json_encode(['trainer' => Allemployee::search($id)]);
    }

    // Create a New Trainer
    function create()
    {
        $id = $_POST['employee_id'];
        $designation = $_POST['designation'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $status_id = $_POST['status_id'];

        $trainer = new Trainer(null, null, $id, $designation, $email, $mobile, $status_id);

        echo json_encode(['result' => $trainer->create()]);
    }

    // get designation ID
    function designation_id()
    {
        $name = $_GET['designation'];

        echo json_encode(['id' => Designation::get_ID($name)]);
    }
}
