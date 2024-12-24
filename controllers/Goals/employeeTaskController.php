<?php

class EmployeeTaskController
{
    public function index()
    {

        view("Goals");
    }

    public function create()
    {
        view("Goals");
    }

    public function save()
    {
        if (isset($_POST['btnCreate'])) {
            $employee = $_POST['employee'];
            $task = $_POST['task'];
            $goal_type = $_POST['goal_type'];
            $assignedDate = $_POST['assignedDate'];
            $dueDate = $_POST['dueDate'];
            $completionDate = $_POST['completionDate'];
            $goalStatus = $_POST['goalStatus'];
            $task = new Task("", $employee, $task, $goal_type, $assignedDate, $dueDate, $completionDate, $goalStatus);


            try {
                if ($task->create()) {
                    redirect("index");
                } else {
                    throw new Exception("Failed to create goal.");
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    public function edit()
    {
        $id = $_GET['id'];
        $goal = Goal::find($id);
        view("GoalsEdit", compact('goal'));
    }

    public function update()
    {
        if (isset($_POST['btnUpdate'])) {
            $goal = new Goal(
                $_POST['id'],
                $_POST['employee,'],
                $_POST['task'],
                $_POST['goal_type'],
                $_POST['assignedDate'],
                $_POST['dueDate'],
                $_POST['goalStatus']
            );

            if ($goal->update()) {
                redirect("index");
            } else {
                echo "Failed to update goal.";
            }
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        if (Goal::delete($id)) {
            redirect("index");
        } else {
            echo "Failed to delete goal.";
        }
    }
}
