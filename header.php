<?php session_start();
  require_once("configs/config.php");
  require_once("helpers/helper.php");
  require_once("libraries/library.php");
  require_once("models/model.php");
  require_once("controllers/controller.php");
  
  if(!isset($_SESSION["uid"])) header("location:$base_url");
  $uid=$_SESSION["uid"];
  

?>
<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark"  data-sidebar-size="lg" data-sidebar-image="none">
    
<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2024 15:12:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
        <title>Dashboard - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url?>/assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo $base_url?>/assets/css/bootstrap.min.css">
        
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo $base_url?>/assets/plugins/fontawesome/css/fontawesome.min.css">
    	<link rel="stylesheet" href="<?php echo $base_url?>/assets/plugins/fontawesome/css/all.min.css">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="<?php echo $base_url?>/assets/css/line-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $base_url?>/assets/css/material.css">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="<?php echo $base_url?>/assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo $base_url?>/assets/css/style.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	
    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper">

      

        	<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid pb-0">
				
					<!-- Page Header -->

<?php include("views/layout/top_navbar.php");?>
<?php //include("views/layout/menus/user_menu.php");?>
<?php include("views/layout/main_sidebar.php");?>
<div class="content-wrapper">  