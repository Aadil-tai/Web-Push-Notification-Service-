<body class="bg-theme bg-theme2">

    <div class="wrapper">
    <?php include('side.php');
        include('header.php');
?>

<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 ">
        <div class="">
            <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Total Token</p>
                        <h5 class="mb-0">              <?php  $getToken = $conn->query("SELECT * FROM `token`");
                echo $getTotal = $getToken->num_rows;
                ?></h5>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">  <i class='bx bx-dots-horizontal-rounded font-22 text-white'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="sendnotifications.php">Send Notification</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0">Page Views</p>
                        <h5 class="mb-0">              <?php  $getToken = $conn->query("SELECT * FROM `token`");
                echo $getTotal = $getToken->num_rows;
                ?></h5>
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
            </div>
        </div>
    </div>
  <?php include("footer.php"); ?>
 