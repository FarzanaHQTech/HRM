<?php
class AllCompany
{
  public $id;
  public $company_name;
  public $image;
  public $address;
  public $mobile;
  public $email;
  public $url;
  public $owner;
  public $review;
  public $client_id;

  public function __construct($id, $company_name, $image, $address, $mobile, $email, $url, $owner, $review, $client_id)
  {
    $this->id = $id;
    $this->company_name = $company_name;
    $this->image = $image;
    $this->address = $address;
    $this->mobile = $mobile;
    $this->email = $email;
    $this->url = $url;
    $this->owner = $owner;
    $this->review = $review;
    $this->client_id = $client_id;
  }

  // Create a new company record
  public function create()
  {
    global $db;
    $stmt = $db->prepare(
      "INSERT INTO client_companies (company_name, image, address, mobile, email, url, owner, review, client_id) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );
    $stmt->bind_param(
      "ssssssssi",
      $this->company_name,
      $this->image,
      $this->address,
      $this->mobile,
      $this->email,
      $this->url,
      $this->owner,
      $this->review,
      $this->client_id
    );
    $stmt->execute();
    return $stmt->affected_rows > 0;
  }

  // Update an existing company record
  public static function alter($id, $company_name, $image, $address, $mobile, $email, $url, $owner, $review, $client_id)
  {
    global $db;
    $stmt = $db->prepare(
      "UPDATE client_companies 
             SET company_name = ?, image = ?, address = ?, mobile = ?, email = ?, url = ?, owner = ?, review = ?, client_id = ? 
             WHERE id = ?"
    );
    $stmt->bind_param(
      "ssssssssii",
      $company_name,
      $image,
      $address,
      $mobile,
      $email,
      $url,
      $owner,
      $review,
      $client_id,
      $id
    );
    $stmt->execute();
    return $stmt->affected_rows > 0;
  }

  // Display all company records
  public static function display()
  {
    global $db;
    $stmt = $db->prepare(
      "SELECT c_comp.id, c_comp.company_name, c_comp.image, c_comp.address, c_comp.mobile, 
                    c_comp.email, c_comp.url, c_comp.owner, c_comp.review, clients.client_name AS client
             FROM client_companies c_comp
             JOIN clients ON c_comp.client_id = clients.id"
    );
    $stmt->execute();
    $result = $stmt->get_result();
    $companies = [];
    while ($row = $result->fetch_assoc()) {
      $companies[] = $row;
    }
    return $companies;
  }
}
