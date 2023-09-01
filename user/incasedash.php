<?php
session_start();
error_reporting(0);
include('connect.php');
if(strlen($_SESSION['user'])==0)
    {   
header('location:index.php');
}
else{
    include('side.php');
    include('header.php');

    ?>
<div class="card shadow-none bg-transparent">
    <div class="card-body">
        <div id="chart1"></div>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 ">
        <div class="col">
            <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Total Users</p>
                        <h5 class="mb-0">85,028</h5>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">  <i class='bx bx-dots-horizontal-rounded font-22 text-white'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="" id="chart2"></div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Page Views</p>
                        <h5 class="mb-0">42,892</h5>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">  <i class='bx bx-dots-horizontal-rounded font-22 text-white'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col" id="chart3"></div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Avg. Session Duration</p>
                        <h5 class="mb-0">00:03:20</h5>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">  <i class='bx bx-dots-horizontal-rounded font-22 text-white'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="" id="chart4"></div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Bounce Rate</p>
                        <h5 class="mb-0">51.46%</h5>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">  <i class='bx bx-dots-horizontal-rounded font-22 text-white'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="" id="chart5"></div>
            </div>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-1">
    <div class="col col-lg-8">
        <div class="card radius-10 shadow-none bg-transparent">
            <div class="card-body">
                <div id="geographic-map"></div>
            </div>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
    <div class="col d-flex">
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div id="chart8"></div>
            </div>
        </div>
    </div>
   <?php include('footer.php');?>

   </div> 
    <?php } ?>