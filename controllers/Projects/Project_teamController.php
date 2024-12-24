<?php
class project_teamController {
    function index() {
        global $db;

        // Models
        $projectTeamModel = new ProjectTeam("","","");

        // Fetch data
        $projectId = $_GET['project_id'] ?? null; // Replace with your method to get project ID
        $projects = $projectId ? Project::getProjectDetails($projectId) : [];
        $projectTeams = $projectTeamModel->getAll();

        // Pass data to view
        view("Projects", ['projects' => $projects, 'projectTeams' => $projectTeams]);
    }

    function create() {
        view("Projects");
    }

    function save() {
        if (isset($_POST['btnSave'])) {
          
            $project_id = $_POST['project_id'];
            $employee_id = $_POST['employee_id'];
           


            $projectObj=new ProjectTeam("",$employee_id, $project_id);

           
            if ($projectObj->create()) {
                redirect("index");
            }
        }
    }
}
