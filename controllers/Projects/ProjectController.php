<?php
class projectController{
    function index(){
        view("Projects");
    }
    function create(){
        view("Projects");
    }
    function save(){
        if(isset($_POST['btnSave'])){
            $project_name = $_POST['project_name'];
            $description = $_POST['description'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $client_id = $_POST['client_id'];
            $rate = $_POST['rate'];
            $rate_type = $_POST['rate_type'];
            $priority = $_POST['priority'];
            $team_leader_id = $_POST['team_leader_id'];

            $projectObj = new Project("",$project_name,$description,$start_date,$end_date,$client_id,$rate,$rate_type,$priority,$team_leader_id);
            if($projectObj->create()){
                redirect("index");
            }
        }
    }

    
    

    
}

// Initialize the Project class




// // Assign team members
// $project->assignTeamMembers($projectId, [
//     ['employee_id' => 2, 'role' => 'Developer'],
//     ['employee_id' => 3, 'role' => 'Designer']
// ]);

// // Get project details
// $details = $project->getProjectDetails($projectId);
// print_r($details);

// // Update a project
// $project->updateProject($projectId, [
//     'project_name' => 'Updated Project Name',
//     'description' => 'Updated description.',
//     'start_date' => '2024-02-01',
//     'end_date' => '2024-12-31',
//     'client_id' => 2,
//     'rate' => 5500.00,
//     'rate_type' => 'daily',
//     'priority' => 'Medium',
//     'team_leader_id' => 4
// ]);

// // Delete a project
// $project->deleteProject($projectId);

