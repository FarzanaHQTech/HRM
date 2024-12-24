<?php

class Project
{
    private $db;
    private $project_name;
    private $description;
    private $start_date;
    private $end_date;
    private $client_id;
    private $rate;
    private $rate_type;
    private $priority;
    private $team_leader_id;

    // Constructor to initialize the database connection
    public function __construct($db, $project_name, $description, $start_date, $end_date, $client_id, $rate, $rate_type, $priority, $team_leader_id)
    {
        $this->db = $db;
        $this->project_name = $project_name;
        $this->description = $description;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->client_id = $client_id;
        $this->rate = $rate;
        $this->rate_type = $rate_type;
        $this->priority = $priority;
        $this->team_leader_id = $team_leader_id;
    }

    // Create a new project
    public function create()
    {

        $query = $this->db->query("INSERT INTO projects (project_name, description, start_date, end_date, client_id, rate, rate_type, priority, team_leader_id, created_at, updated_at)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");

        $stmt = $this->db->prepare($query);
        $stmt->bind_param(
            "ssssidsis",
            $this->project_name,
            $this->description,
            $this->start_date,
            $this->end_date,
            $this->client_id,
            $this->rate,
            $this->rate_type,
            $this->priority,
            $this->team_leader_id
        );

        $stmt->execute();
        $stmt->close();

        // Get the last inserted project ID
        return $this->db->insert_id;
    }

    public static function getProjectDetails($projectId)
    {
        global $db;

        $query = $db->prepare("
            SELECT 
                p.*, 
                CONCAT(e.first_name, ' ', e.last_name) AS team_leader_name 
            FROM 
                projects p
            LEFT JOIN 
                employees e ON p.team_leader_id = e.id
            WHERE 
                p.id = ?
        ");
        $query->bind_param("i", $projectId);
        $query->execute();
        $result = $query->get_result();
        return $result->fetch_assoc();
    }
    // Update a project's details
    public function updateProject($projectId, $data)
    {
        $query = "UPDATE projects 
                  SET project_name = ?, description = ?, start_date = ?, end_date = ?, client_id = ?, rate = ?, rate_type = ?, priority = ?, team_leader_id = ?, updated_at = NOW()
                  WHERE id = ?";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param(
            "ssssidsisi",
            $data['project_name'],
            $data['description'],
            $data['start_date'],
            $data['end_date'],
            $data['client_id'],
            $data['rate'],
            $data['rate_type'],
            $data['priority'],
            $data['team_leader_id'],
            $projectId
        );

        $stmt->execute();
        $stmt->close();
    }

    // Delete a project
    public function deleteProject($projectId)
    {
        $query = "DELETE FROM projects WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $projectId);
        $stmt->execute();
        $stmt->close();
    }

    public static function count($criteria = "")
    {
        global $db, $tx;
        $result = $db->query("select count(*) from {$tx}employees $criteria");
        list($count) = $result->fetch_row();
        return $count;
    }
}
