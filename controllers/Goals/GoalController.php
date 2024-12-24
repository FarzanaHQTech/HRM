<?php

class GoalController
{
    public function index()
    {
        $goals = Goal::display();
        view("Goals", compact('goals'));
    }

    public function create()
    {
        view("Goals");
    }

    public function save()
    {
        if (isset($_POST['btnCreate'])) {
            $employee_id = $_POST['employee_id'];
            $goal_type_id = $_POST['goal_type_id'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $goal_status_id = $_POST['goal_status_id'];
            $goal = new Goal("", $employee_id, $goal_type_id, $start_date, $end_date, $goal_status_id);


            try {
                if ($goal->create()) {
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
                $_POST['employee_id'],
                $_POST['goal_type_id'],
                $_POST['start_date'],
                $_POST['end_date'],
                $_POST['goal_status_id']
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
