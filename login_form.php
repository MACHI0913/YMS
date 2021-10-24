<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
// Include config file
require_once "config.php";
require_once "autho_login.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="YMS - Admin Template">
    <meta name="keywords" content="admin, YMS, bootstrap, yard, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="MACE - YMS Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard - YMS admin template</title>

    <!--CSS-->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body class="account-page">
    <div class="main-wrapper">
      <div class="account-content">
        <div class="container">
          <div class="account-logo">
            <a href="index.html"><img src="assets/img/logo.png" alt="YMS Dashboard"></a>
          </div>
          <div class="account-box">
            <div class="account-wrapper">
              <h3 class="account-title">Login</h3>
              <p class="account-subtitle">Access to our dashboard</p>
              <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group" <?= (!empty($username_err)) ? 'has-error' : ''; ?>>
                  <label for="floatingUsername">Username</label>
                  <input type="text" name="username" class="form-control" id="floatingUsername" placeholder="Username" value="<?= $username; ?>">
                </div>
                <span class="help-block"><?= $username_err; ?></span>
                <div class="form-group" <?= (!empty($password_err)) ? 'has-error' : ''; ?>>
                  <div class="row">
                    <div class="col">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <div class="col-auto">
                      <a class="text-muted" href="forgot-password.html">
                      Forgot password?
                      </a>
                    </div>
                  </div>
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <span class="help-block"><?= $password_err; ?></span>
                </div>
                <div class="form-group text-center">
                  <button class="btn btn-primary account-btn" type="submit">Login</button>
                </div>
                <div class="account-footer">
                  <p class="mt-2 mb-2 text-muted">&copy; 2021</p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script> 
  </body>
</html>
