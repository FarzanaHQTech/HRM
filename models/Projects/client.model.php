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
    private $company_name;
    private $role_id;
    private $designation;
    

    public function __construct($id, $client_name,$username, $image, $email, $password, $phone, $company_name,$role_id, $designation )
    {
        $this->id = $id;
        $this->client_name = $client_name;
        $this->username = $username;
        $this->image = $image;
        $this->email = $email;
        $this->password = $password;
        
        $this->phone = $phone;
        $this->company_name = $company_name;
        $this->role_id = $role_id;
        $this->designation = $designation;
       
    }

    public function create()
    {
        global $db;
        $stmt = $db->query("INSERT INTO clients (client_name,username, image, email, password,phone,company_name,role_id,  designation) 
                                VALUES ('$this->client_name','$this->username', '$this->image', '$this->email', '$this->password', '$this->phone', '$this->company_name', $this->role_id,'$this->designation')");
        return $stmt;
    }
    public static function display()
    {
        global $db;
        $stmt = $db->query("select c.client_name,c.username,c.image,c.email,c.phone,c.company_name,r.role_name as role,c.designation from clients c Join roles r on c.role_id = r.id");
        $result = [];
        while ($row = $stmt->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
    }
}
//}