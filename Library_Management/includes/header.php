<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Initialize the session variable if it is not set
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = '';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <!-- MENU SECTION START-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" />
                </a>
            </div>
            <?php if ($_SESSION['login']) { ?>
                <div class="right-div">
                    <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <?php if ($_SESSION['login']) { ?>
        <section class="menu-section">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="navbar-collapse collapse ">
                            <ul id="menu-top" class="nav navbar-nav navbar-right">
                                <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>
                                <li>
                                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My
                                                Profile</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                href="change-password.php">Change Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="issued-books.php">Issued Books</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } else { ?>
        <section class="menu-section">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="navbar-collapse collapse ">
                            <ul id="menu-top" class="nav navbar-nav navbar-right">
                                <li><a href="adminlogin.php">Admin Login</a></li>
                                <li><a href="signup.php">User Signup</a></li>
                                <li><a href="index.php">User Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
</body>

</html>