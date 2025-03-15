<?php

class AllCompanyController
{
   function index()
   {
      view('Projects');
   }
   function create()
   {
      view('Projects');
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
      }
   }
   function edit()
   {
      view('Projects');
   }
   function update()
   {
      view('Projects');
   }
   function delete()
   {
      view('Projects');
   }
}
