<?php

class AllCompanyController
{
   function index()
   {
      view('projects');
   }
   function create()
   {
      view('projects');
   }
   function save()
   {
      if (isset($_POST['btnSave'])) {
         $company_name = $_POST['company_name'];
         $image = $_FILES['photo'];
         $address = $_POST['address'];
         $mobile = $_POST['mobile'];
         $email = $_POST['email'];
         $url = $_POST['url'];
         $owner = $_POST['owner'];
         $review = $_POST['review'];
         $client = $_POST['client'];

         $company_photo = upload($image, "img/client_company", $company_name);
         $creatObj = new AllCompany("", $company_name, $company_photo, $address, $mobile, $email, $url, $owner, $review, $client);
         //    return $creatObj->create();
         if ($creatObj->create()) {
            redirect("index");
         }

         //    $clients = $creatObj->create();
         //    if (isset($_POST['password'])) {

         //        $createuser = new User("", $username, $email, $password, $phone, $role_id, $company_name);
         //        echo $createuser->add();
         //    }
         //    if($clients){
         //        redirect("index");
         //    }

      }
   }
   function edit()
   {
      view('projects');
   }
   function update()
   {
      view('projects');
   }
   function delete()
   {
      view('projects');
   }
}
