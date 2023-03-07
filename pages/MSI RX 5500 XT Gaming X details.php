<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Server Zone</title>
</head>

<body>

    <div id="Top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 contact">
                    <p class="Text-Muted"><i class="fa fa-phone"></i> +63 912 345 6789</p>
                    <p class="Text-Muted"><i class="fa fa-envelope"></i> ServerZone@gmail.com</p>
                </div>
                <div class="col-md-6">
                    <ul class="menu">
                        <li><a href="">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="navbar" class="navbar navbar-expand-lg">
        <div class="container">
            <div class="navbar-header">
                <a href="" class="navbar-brand">
                    <img src="images/Logo.png" alt="Server Zone Logo" class="hidden-xs">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="file.php" class="nav-link">Maintenance</a></li>
                </ul>
                <a style="color: #ffffff;" href="cart.php" class="btn navbar-btn right  hidden-xs">

                    <i class="fa fa-shopping-cart"></i>
                    <span class="badge">5</span>

                </a>
            </div>

        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="menu.php">Menu</a></li>
                <li class="breadcrumb-item"><a href="graphicscard.php">Graphics Card</a></li>
                <li class="breadcrumb-item active" aria-current="page">MSI RX 5500 XT Gaming X </li>
            </ol>
        </nav>
    </div>

    <div id="details" class="container">
        <div id="productMain" class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div id="mainImage">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/5500xt.png" class="d-block w-100" alt="Slide 1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="box">
                    <h1 class="text-left">MSI RX 5500 XT Gaming X </h1>
                   <p>Boost Clock / Game Clock* / Base Clock / Memory SpeedUp to 1845 MHz / Up to 1737 MHz / 1685 MHz / 14Gbps<br>
                    8GB GDDR6<br>
                    DisplayPort x 3 (v1.4) / HDMI 2.0b x 1<br>
                    Dispersion fan blade: Steeper curved blade accelerating the airflow.<br>
                    Traditional fan blade: Provides steady airflow to massive heat sink below.<br>
                    Customize colors and LED effects with exclusive MSI software and synchronize the look & feel with other components.<br>
                    Wireless control through Android / iOS devices.<br>
                    Predator: In-game video recording.<br>
                    A consolidated platform that offers all software including MYSTIC LIGHT functionality for your MSI Gaming product.<br></p>
                    <p style="color: #9e1515; font-size: 32px;font-weight: 400px;">PHP 13,399.00</p>
                    <form action="MSI RX 5500 XT Gaming X details.php" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label for="" class="col-md-5 control-label">Product Quantity</label>

                            <div class="col mb-4">
                                <input class="form-control" type="number" min="0" max="10" value="1">
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="form-group">
                                <label for="" class="col-md-6 control-label">Order Description <font style="color:red;">*optional</font></label>

                                <div class="col mb-4">
                                    <textarea class="form-control" style="resize: none;height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>

                        <p class="text-center buttons"><button style="background-color: #ffa600;color: #ffffff;" class=" form-control btn i fa fa-shopping-cart">Add to cart</button></p>
                    </form>
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
