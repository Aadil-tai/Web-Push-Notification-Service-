<?php
session_start();

    include('config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <title>User </title>
</head>

<body class="bg-theme bg-theme2">
    <!--wrapper-->
    <div class="wrapper">

<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <h4 class="logo-text"><div class="panel-heading"><?php echo htmlentities($_SESSION['user']); ?></div></h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="indexdash.php"><i class="bx bx-right-arrow-alt"></i>Dashboard</a>
                </li>
                <hr>
                <li> <a href="sendnotifications.php"><i class="bx bx-right-arrow-alt"></i>send notification</a>
                </li>
            </ul>
        </li>
       <hr>
        <hr>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Contact to Admin</div>
            </a>
            <ul>
                <li> <a href="feedback.php"><i class="bx bx-right-arrow-alt"></i>Feedback</a>
                </li>
                <hr>
                <li> <a href="messages.php"><i class="bx bx-right-arrow-alt"></i>Messages</a>
                </li>
                
                </li>
            </ul>
        </li>
      
        
           </ul>
    <!--end navigation-->
</div>
    <header>
            <div class="topbar d-flex align-items-center">
                            </div>
        </header>
        <!--end header -->
    <div class="page-wrapper">
            <div class="page-content">
                <div class="card shadow-none bg-transparent border-bottom border-2">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-9">
                            </div>
                        </div>
                    </div>
                </div>

</html>
