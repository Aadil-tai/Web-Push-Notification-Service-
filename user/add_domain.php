<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("location: login.php");
}
else {
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <style type="text/css">
        body{
    font-family: 'Open Sans', sans-serif;
}
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Send Notifications </title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="http://pushit.in/assets/vendor/simplebar.min.css" rel="stylesheet">
    <!-- App CSS -->
    <link type="text/css" href="http://pushit.in/assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="http://pushit.in/assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="http://pushit.in/assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="http://pushit.in/assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link type="text/css" href="http://pushit.in/assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="http://pushit.in/assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">
    
</head>

<body class="layout-default">


    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
                    <div class="container-fluid p-0">

                        <!-- Navbar toggler -->

                        <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <!-- Navbar Brand -->
                        <a href="dashboard.php" class="navbar-brand ">
                            <img class="navbar-brand-icon" src="http://pushit.in/assets/images/stack-logo-white.svg" width="22" alt="Stack">
                            <span>Ads</span>
                        </a>


                        <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <img src="http://pushit.in/assets/images/avatar/demi.png" class="rounded-circle" width="32" alt="Frontted">
                                    <span class="ml-1 d-flex-inline">
                                        <span class="text-light">Demo</span>
                                    </span>
                                </a>
                               
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->


        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">


<div class="container-fluid page__heading-container">
	<div class="page__heading">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb mb-0">
				<li class="breadcrumb-item"><a href="#">Home</a>
				</li>
				<li class="breadcrumb-item">Tools</li>
				<li class="breadcrumb-item active" aria-current="page">Send Notification</li>
			</ol>
		</nav>
		<h1 class="m-0">Send Notification</h1>
	</div>
</div>


<div class="container-fluid page__container">
	<div class="card card-form">
		<div class="row no-gutters">
			<div class="col-lg-12 card-form__body card-body">
			    <div class="alert alert-info"><strong>Total Tokens Available </strong> : <?php
			    $getToken = $conn->query("SELECT * FROM `token`");
			    echo $getTotal = $getToken->num_rows;
			    ?><br></div>
			    
			    <?php 
                if(isset($_SESSION['done']))
                {
                ?><div class="alert alert-success"><strong>Success! </strong>Success: <?=$_SESSION['success']?> Failure: <?=$_SESSION['failure']?><br></div>
                <?php 
                unset($_SESSION['done'],$_SESSION['success'],$_SESSION['failure']);
                } ?>
			    	<form action="send.php" method="POST">
				    <hr>
					<p><strong class="headings-color">SEND NOTIFICATION</strong></p>
					<hr>
					
					<div class="form-group">
						<label for="title">Title:</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title .." required>
					</div>
					
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" id="message" name="message" placeholder="Enter Message .." required></textarea>
					</div>
					
					<div class="form-group">
						<label for="url">URL:</label>
						<input type="text" class="form-control" id="url" name="url" placeholder="Enter URL .." required>
					</div>
					
					<!--Image Links Start -->
					<hr>
					<p><strong class="headings-color">Notification Images</strong></p>
					<hr>
					<div class="row">
            			<div class="col-lg-6">
        					<div class="form-group">
        						<label for="icon">Icon:</label>
        						<input type="text" class="form-control" id="icon" name="icon" placeholder="Enter Icon Link .." required>
        					</div>
        				</div>
        				
        			    <div class="col-lg-6">
        					<div class="form-group">
        						<label for="image">Image:</label>
        						<input type="text" class="form-control" id="image" name="image" placeholder="Enter Image Link .." required>
        					</div>
        				</div>
        			</div>
					<!--Image Links End-->
				
					
					<button type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>




                </div>
                <!-- // END drawer-layout__content -->

                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content">
                        <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
                            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                                <a href="profile.php" class="flex d-flex align-items-center text-underline-0 text-body">
                                    <span class="avatar mr-3">
                                        <img src="http://pushit.in/assets/images/avatar/demi.png" alt="avatar" class="avatar-img rounded-circle">
                                    </span>
                                    <span class="flex d-flex flex-column">
                                        <strong>Demo</strong>
                                        <small class="text-muted text-uppercase">Account Owner</small>
                                    </span>
                                </a>
                               
                            </div>
                            
                            
                            <div class="sidebar-heading sidebar-m-t">Main Menu</div>
                            <ul class="sidebar-menu">
                                
                                <li class="sidebar-menu-item ">
                                        <a class="sidebar-menu-button" href="index.php">
                                            <span class="sidebar-menu-text">Dashboard</span>
                                        </a>
                                </li>
                                
                                
                            </ul>                           


                        </div>
                    </div>
                </div>
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    <!-- jQuery -->
    <script src="http://pushit.in/assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="http://pushit.in/assets/vendor/popper.min.js"></script>
    <script src="http://pushit.in/assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <script src="http://pushit.in/assets/vendor/simplebar.min.js"></script>

    <!-- DOM Factory -->
    <script src="http://pushit.in/assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="http://pushit.in/assets/vendor/material-design-kit.js"></script>

    <!-- App -->
    <script src="http://pushit.in/assets/js/toggle-check-all.js"></script>
    <script src="http://pushit.in/assets/js/check-selected-row.js"></script>
    <script src="http://pushit.in/assets/js/dropdown.js"></script>
    <script src="http://pushit.in/assets/js/sidebar-mini.js"></script>
    <script src="http://pushit.in/assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="http://pushit.in/assets/js/app-settings.js"></script>



    <!-- Flatpickr -->
    <script src="http://pushit.in/assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="http://pushit.in/assets/js/flatpickr.js"></script>

    <!-- Global Settings -->
    <script src="http://pushit.in/assets/js/settings.js"></script>

    <!-- Chart.js -->
    <script src="http://pushit.in/assets/vendor/Chart.min.js"></script>

    <!-- App Charts JS -->
    <script src="http://pushit.in/assets/js/charts.js"></script>

    <!-- Chart Samples -->
    <script src="http://pushit.in/assets/js/page.dashboard.js"></script>

    <!-- Vector Maps -->
    <script src="http://pushit.in/assets/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="http://pushit.in/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="http://pushit.in/assets/js/vector-maps.js"></script>
</body>

</html>
<?php } ?>