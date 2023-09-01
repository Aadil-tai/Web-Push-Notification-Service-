<?php
session_start();
error_reporting(0);
include('config.php');
if(strlen($_SESSION['user'])==0)
    {   
header('location:index.php');
}
else{
?>
    <body class="bg-theme bg-theme2">
    <!--wrapper-->
    <!--wrapper-->
<br><br>        <div class="ts-main-content">

        <div class="content-wrapper">
            <div class="container-fluid">
   <div class="row">
                    <div class="col-xl-9 mx-auto">
                
        <!-- Header -->
<?php include("side.php");
    include('header.php');

?>

        <!-- // END Header -->


        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">


<div class="form-body">
    <div class="card card-form">
    
    <div class="page__heading">
    <br><br>
        <h1 class="justify-content-center">Send Notification</h1>
    </div>



<div class="card-body">
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
                    <form action="send.php" class="row g-1" method="POST">
                    <hr>
                    <p><strong class="headings-color">SEND NOTIFICATION</strong></p>
                    <hr>
                    
                    <div class="container-fluid page__heading-container">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title .." required>
                    </div>
                    
                    <div class="container-fluid page__heading-container">
                        <label for="message" class="form-label">Message:</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Enter Message .." required></textarea>
                    </div>
                    
                    <div class="container-fluid page__heading-container">
                        <label for="url" class="form-label">URL:</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Enter URL .." required>
                    </div>
                    
                    <!--Image Links Start -->
                    <hr>
                    <p><strong class="headings-color">Notification Images</strong></p>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="icon" class="form-label">Icon:</label>
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="Enter Icon Link .." required>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image" class="form-label">Image:</label>
                                <input type="text" class="form-control" id="image" name="image" placeholder="Enter Image Link .." required>
                            </div>
                        </div>
                    </div>
                    <!--Image Links End-->
                
                    
                    <button type="submit" name="submit" value="Submit" class="btn btn-light">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>



                </div>
                <!-- // END drawer-layout__content -->

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
<?php include("footer.php"); }?>
