<?php

class Client
{
    private $id;
    private $client_name;
    private $username;
    private $image;
    private $email;
    private $password;
    private $phone;
    private $company_id;
    private $role_id;
    private $designation;

    public function __construct($id, $client_name, $username, $image, $email, $password, $phone, $company_id, $role_id, $designation)
    {
        $this->id = $id;
        $this->client_name = $client_name;
        $this->username = $username;
        $this->image = $image;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->company_id = $company_id;
        $this->role_id = $role_id;
        $this->designation = $designation;
    }

    // Create a new client record
    public function create()
    {
        global $db;
        $stmt = $db->prepare(
            "INSERT INTO clients (client_name, username, image, email, password, phone, company_id, role_id, designation) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->bind_param(
            "ssssssiis",
            $this->client_name,
            $this->username,
            $this->image,
            $this->email,
            $this->password,
            $this->phone,
            $this->company_id,
            $this->role_id,
            $this->designation
        );
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    // Display all client records
    public static function display()
    {
        global $db;
        $stmt = $db->prepare(
            "SELECT c.id, c.client_name, c.username, c.image, c.email, c.phone, 
                    cc.company_name AS name, r.role_name AS role, c.designation 
             FROM clients c 
             JOIN roles r ON c.role_id = r.id 
             JOIN client_companies cc ON c.company_id = cc.id"
        );
        if (!$stmt) {
            die("SQL Prepare Error: " . $db->error . "\nQuery: " . $stmt);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        $clients = [];
        while ($row = $result->fetch_assoc()) {
            $clients[] = $row;
        }
        return $clients;
    }


    // Count clients based on criteria
    public static function count($criteria = "")
    {
        global $db;
        $query = "SELECT COUNT(*) FROM clients";
        if (!empty($criteria)) {
            $query .= " WHERE " . $criteria;
        }
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        return $count;
    }
}
