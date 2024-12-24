<?php
class Project_team {
    private $db;
    private $project_id;
    private $employee_id;
    
    private $role;

    // Constructor to initialize the database connection
    public function __construct($db,$employee_id,$project_id,$role) {
        $this->db = $db;
        $this->project_id = $project_id;
        $this->employee_id = $employee_id;
        $this->role = $role;
      
    }

   

    // Assign team members to a project
    public function assignTeamMembers($projectId, $teamMembers) {
        $query = $this->db->prepare("INSERT INTO project_teams (project_id, employee_id, role) VALUES (?, ?, ?");
        

        foreach ($teamMembers as $member) {
            $query->bind_param("iis", $projectId, $member['employee_id'], $member['role']);
            $query->execute();
        }

        $query->close();
    }
    public static function display() {
        global $db;
        $query = $db->prepare("Select project_teams.* concate(e.'first_name.''.e.'last_name ') as team_leader from project_taems join employees on project_teams.employee_id = employee,id");
        

        $query->execute();
   
        $result = $query->get_result();
        $teams = [];

        while($row = $result->fetch_assoc()){
            $teams[]=$row;
        }
        return $teams;
        $query->close();
    }


   

    // Delete a project
    public function deleteProject($projectId) {
        $query = "DELETE FROM projects WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $projectId);
        $stmt->execute();
        $stmt->close();
    }
}

