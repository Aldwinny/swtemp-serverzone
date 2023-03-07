<?php
//  session_start();  
//  $conn=mysqli_connect("localhost","root","","admin");  
//  if (!isset($_SESSION['USER_ID'])) {  
//       header("location:login.php");  
//       die();  
//  }  
?>



<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">

    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Server Zone</title>
</head>

<body>

    <?php
    /* Navbar import */
    include_once './shared/Navbar.php'
    ?>

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
                        <img src="images/RTX-3070.jpg" class="card-img-top" alt="NVIDIA RTX 3070">
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
                        <img src="images/MSIPROMotherboard.png" class="card-img-top" alt="MSI B550M PRO Motherboard">
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
                        <img src="images/Ryzen-9.png" class="card-img-top" alt="Ryzen 9 3950x">
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
                        <img src="images/HyperxFury.png" class="card-img-top" alt="HyperX Fury 8gb 2400mhz DDR4 ">
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
                        <img src="images/kingston.png" class="card-img-top" alt="Kingston A2000 250GB M.2 NVMe">
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
                        <img src="images/NvidiaGTX1660.jpg" class="card-img-top" alt="Nvidia GTX 1660">
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

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">

                    <h4>Pages</h4>

                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>

                    <hr>

                    <h4>User Section</h4>

                    <ul>
                        <li><a href="checkout.php">Login</a></li>
                        <li><a href="customer_register.php">Register</a></li>
                    </ul>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>

                <div class="com-sm-6 col-md-3">

                    <h4>Top Products Categories</h4>

                    <ul>


                        <li>
                            <a href="">Motherboard</a>
                        </li>
                        <li>
                            <a href="">Processor</a>
                        </li>
                        <li>
                            <a href="">Graphics Cards</a>
                        </li>
                        <li>
                            <a href="">Memory</a>
                        </li>
                        <li>
                            <a href="">Storages</a>
                        </li>

                    </ul>

                    <hr class="hidden-md hidden-lg">

                </div>

                <div class="col-sm-6 col-md-3">

                    <h4>Find Us:</h4>

                    <p>
                        <strong>Server Zone</strong>
                        <br>Quezon, City
                        <br>Metro Manila
                        <br>+63 912 345 6789
                        <br>ServerZone@gmail.com
                    </p>

                    <a href="contact.php">Check Our Contact Page</a>

                    <hr class="hidden-md hidden-lg">

                </div>

                <div class="col-sm-6 col-md-3">


                    <h4>Keep In Touch</h4>

                    <p class="social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google-plus"></a>
                        <a href="#" class="fa fa-envelope"></a>
                    </p>

                </div>

            </div>
        </div>

    </div>


    <div id="copyright">
        <div class="container">
            <div class="col-md-6">

                <p class="pull-left"> Server Zone &copy; 2021 All Rights Reserve

                </p>
                <ul>
                    <li><a href="#">Helps</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-6">

                <!--<p class="pull-right">Theme by: <a href="#">MrJan</a></p>-->

            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>

</body>

</html>