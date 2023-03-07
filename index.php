<?php
//  session_start();  
//  $conn=mysqli_connect("localhost","root","","admin");  
//  if (!isset($_SESSION['USER_ID'])) {  
//       header("location:login.php");  
//       die();  
//  }  
?>



<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/general.php';

html_header();
?>

<body>
    <?php navbar(1) ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay-image1"></div>
                <!---<img src="admin_area/slides_images/slider-1.jpg" class="d-block w-100" alt="Slide 1">--->
                <div class="carousel-caption d-none d-md-block">
                    <span>
                        <h1>Welcome To</h1>
                        <h1 class="Company-Name"><strong>Server <font style="color:#ffffff;">Zone</font></strong></h1>
                    </span>
                    <p>Good Quality Products, Get In the Game, Upgrade for the better!</p>
                    <button type="button" class="btn btn-outline-light">
                        <a href="menu.php" class="nav-link">
                            <font color=white>Explore Products</font>
                        </a></a>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div id="hot">

        <div class="box">

            <div class="container">

                <div class="col-md-12">

                    <h2>
                        Our Top Selling Products
                    </h2>

                </div>

            </div>

        </div>

    </div>

    <div id="content" class="container">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div class="card best-seller1">
                    <a href="Nvidia RTX 3070 details.php">
                        <img src="/assets/images//RTX-3070.jpg" class="card-img-top" alt="NVIDIA RTX 3070">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">NVIDIA RTX 3070 <span class="badge badge-danger">Hot!</span>
                            <h4 style="color: #9e1515;">PHP 39,990.00</h4>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card best-seller2">
                    <a href="MSI B550M PRO Motherboarddetails.php">
                        <img src="/assets/images//MSIPROMotherboard.png" class="card-img-top" alt="MSI B550M PRO Motherboard">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">MSI B550M PRO Motherboard<span class="badge badge-success">Best Deal!</span>
                            <h4 style="color: #9e1515;">PHP 7,980.00</h4>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card best-seller3">
                    <a href="Ryzen 9 3950xdetails.php">
                        <img src="/assets/images//Ryzen-9.png" class="card-img-top" alt="Ryzen 9 3950x">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Ryzen 9 3950x <span class="badge badge-danger">Hot!</span> <span class="badge badge-success">Best Deal!</span>
                            <h4 style="color: #9e1515;">PHP 44,950.00</h4>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card best-seller4">
                    <a href="HyperX Fury 8gb 2400mhz DDR4 details.php">
                        <img src="/assets/images//HyperxFury.png" class="card-img-top" alt="HyperX Fury 8gb 2400mhz DDR4 ">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">HyperX Fury 8gb 2400mhz DDR4 <span class="badge badge-danger">Hot!</span> <span class="badge badge-success">Best Deal!</span>
                            <h4 style="color: #9e1515;">PHP 2,150.00</h4>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card best-seller5">
                    <a href="Kingston A2000 250GB M.2 NVMe details.php">
                        <img src="/assets/images//kingston.png" class="card-img-top" alt="Kingston A2000 250GB M.2 NVMe">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Kingston A2000 250GB M.2 NVMe <span class="badge badge-success">Best Deal!</span>
                            <h4 style="color: #9e1515;">PHP 2,392.00</h4>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card best-seller5">
                    <a href="Nvidia GTX 1660 details.php">
                        <img src="/assets/images//NvidiaGTX1660.jpg" class="card-img-top" alt="Nvidia GTX 1660">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Nvidia GTX 1660<span class="badge badge-success">Best Deal!</span>
                            <h4 style="color: #9e1515;">PHP 692.00</h4>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php html_footer() ?>
</body>

</html>