<?php
class Company{
    public $id;
    public $company_name;
    public $address;
    public $country;
    public $mobile;
    public $email;
    public $postal_code;
    public $url;

    public function __construct($id,$company_name,$address, $country,$mobile,$email,$postal_code,$url)
    {
        $this->id = $id;
        $this->company_name = $company_name;
        $this->address = $address;
        $this->country = $country;
        $this->mobile = $mobile;
        $this->email = $email;
        $this->postal_code = $postal_code;
        $this->url = $url;
    }

    public static function display(){
        global $db;
        $stmt = $db->query("select * from company");
        // return $stmt;
        $company = [];
        while($row=$stmt->fetch_assoc()){
            $company[]=$row;
        }
        return $company;
    }
}