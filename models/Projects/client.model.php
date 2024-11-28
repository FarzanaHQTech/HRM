<?php

class Client
{
    private $id;
    private $client_name;
    private $image;
    private $email;
    private $password;
    private $phone;
    private $company_name;
    private $designation;
    

    public function __construct($id, $client_name, $image, $email, $password, $phone, $company_name, $designation )
    {
        $this->id = $id;
        $this->client_name = $client_name;
        $this->image = $image;
        $this->email = $email;
        $this->password = $password;
        
        $this->phone = $phone;
        $this->company_name = $company_name;
        $this->designation = $designation;
       
    }

    public function create()
    {
        global $db;
        $stmt = $db->query("INSERT INTO clients (client_name, image, email, password,phone,company_name,  designation) 
                                VALUES ('$this->client_name', '$this->image', '$this->email', '$this->password', '$this->phone', '$this->company_name', '$this->designation')");
        return $stmt;
    }
    public static function display()
    {
        global $db;
        $stmt = $db->query("select * from clients");
        $result = [];
        while ($row = $stmt->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
    }
}
//}