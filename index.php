<?php session_start();
require_once("configs/db_config.php");
$base_url = "cpanel";
//require_once("library/classes/system_log.class.php");

// if (isset($_POST["btnSignIn"])) {

//   $username = trim($_POST["txtUsername"]);
//   $password = trim($_POST["txtPassword"]);
//   //echo $username," ",$password;
//   //$result=$db->query("select u.id,u.username,r.name from {$tx}users u,{$tx}roles r where r.id=u.role_id and u.username='$username' and u.password='$password'");
//   //  $result=$db->query("select u.id,u.full_name,u.password,u.email,u.photo,u.mobile,u.role_id,r.name role from users u,roles r where r.id=u.role_id and u.name='$username' and u.inactive=0");


?>
<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2024 15:14:39 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Smarthr - Bootstrap Admin Template">
  <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
  <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
  <title>Login - HRMS admin template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <!-- Lineawesome CSS -->
  <link rel="stylesheet" href="assets/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/css/material.css">

  <!-- Lineawesome CSS -->
  <link rel="stylesheet" href="assets/css/line-awesome.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="account-page">

  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <div class="account-content">
      <a href="applyjob.php" class="btn btn-primary apply-btn">Apply Job</a>
      <div class="container">

        <!-- Account Logo -->
        <div class="account-logo">
          <a href="admin-dashboard.html"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
        </div>
        <!-- /Account Logo -->

        <div class="account-box">
          <div class="account-wrapper">
            <?php
            if (isset($_POST["btnSignIn"])) {

              $username = trim($_POST["txtUsername"]);
              $password = trim($_POST["txtPassword"]);

              $result = $db->query("SELECT u.id, u.username, u.photo, u.email, u.mobile, u.password, u.role_id, r.role_name as role FROM users u JOIN roles r ON r.id = u.role_id");
              while ($row = $result->fetch_object()) {

                if (isset($_POST["btnSignIn"])) {
                  $username = trim($_POST["txtUsername"]);
                  $password = trim($_POST["txtPassword"]);


                  $isLoginSuccessful = false; // Flag to track if login is successful

                  while ($row = $result->fetch_object()) {
                    if ($username == $row->username && $password == $row->password) {
                      $_SESSION["uid"] = $row->id;
                      $_SESSION["uname"] = $row->username;
                      $_SESSION["uphoto"] = $row->photo;
                      $_SESSION["email"] = $row->email;
                      $_SESSION["mobile"] = $row->mobile;
                      $_SESSION["role_id"] = $row->role_id;
                      $_SESSION["urole"] = $row->role;
                      $isLoginSuccessful = true;

                      if ($_SESSION['urole'] == "Admin") {
                        header("Location: home");
                        exit();
                      } elseif ($_SESSION['urole'] == "Employee") {
                        header("Location: employee");
                        exit();
                      }
                    }
                  }
                }
              }
              if (!$isLoginSuccessful) {
                echo "<div class='alert alert-danger text-center text-size-20'>Invalid username or password</div>";
              }
            }
            ?>


            <h3 class="account-title">Login</h3>
            <p class="account-subtitle">Access to our dashboard</p>

            <!-- Account Form -->
            <!-- <form action="<//echo $_SERVER['PHP_SELF'] ?>" method="post"> -->
            <form action="" method="post">
              <div class="input-block mb-4">
                <label class="col-form-label">Email Address</label>
                <input class="form-control" type="text" value="" name="txtUsername" id="txtUsername">
              </div>
              <div class="input-block mb-4">
                <div class="row align-items-center">
                  <div class="col">
                    <label class="col-form-label">Password</label>
                  </div>
                  <div class="col-auto">
                    <a class="text-muted" href="forgot-password.html">
                      Forgot password?
                    </a>
                  </div>
                </div>
                <div class="position-relative">
                  <input class="form-control" type="password" value="" name="txtPassword" id="txtPassword">
                  <span class="fa-solid fa-eye-slash" id="toggle-password"></span>
                </div>
              </div>
              <div class="input-block mb-4 text-center">
                <button class="btn btn-primary account-btn" type="submit" name="btnSignIn">Login</button>
              </div>
              <div class="account-footer">
                <p>Don't have an account yet? <a href="register.php">Register</a></p>
              </div>
            </form>
            <!-- /Account Form -->

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <!-- <script src="assets/js/jquery-3.7.1.min.js" type="e27156786aaae10834b3c01b-text/javascript"></script> -->

  <!-- Bootstrap Core JS -->
  <script src="assets/js/bootstrap.bundle.min.js" type="e27156786aaae10834b3c01b-text/javascript"></script>

  <!-- Custom JS -->
  <script src="assets/js/app.js" type="e27156786aaae10834b3c01b-text/javascript"></script>

  <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="e27156786aaae10834b3c01b-|49" defer></script>
  <script>
    $(function() {

      rememberStatus();

      $('#txtUsername').on("input", function() {
        remember();
      });

      $('#txtPassword').on("input", function() {
        remember();
      });

      $('#chkRemember').click(function() {
        remember();
      });

      function remember() {
        if ($('#chkRemember').is(':checked')) {
          // save username and password
          localStorage.username = $('#txtUsername').val().trim();
          localStorage.pass = $('#txtPassword').val().trim();
          localStorage.chkbox = $('#chkRemember').val();
        } else {
          localStorage.username = '';
          localStorage.pass = '';
          localStorage.chkbox = '';
        }
      }

      function rememberStatus() {
        if (localStorage.chkbox && localStorage.chkbox != '') {
          $('#chkRemember').attr('checked', 'checked');
          $('#txtUsername').val(localStorage.username);
          $('#txtPassword').val(localStorage.pass);
        } else {
          $('#chkRemember').removeAttr('checked');
          $('#txtUsername').val('');
          $('#txtPassword').val('');
        }
      }

    });
  </script>

</body>

</html>