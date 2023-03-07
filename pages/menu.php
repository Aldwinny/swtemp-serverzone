<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/Helmet.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/Navbar.php';

echo helmet();
?>

<body>

    <?php
    echo navbar(2)
    ?>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Menu</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div id="hot">

            <div class="box">

                <div class="container">

                    <div class="col-md-12">

                        <h2>
                            Choose Category
                        </h2>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <div id="menu" class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
                <div class="card best-seller1">
                    <a href="/motherboard.php"><img src="/assets/images/Motherboardbg.jpeg" class="card-img-top" alt="Motherboard"></a>
                    <div class="card-body">
                        <h5 class="card-title">Motherboard</h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card best-seller2">
                    <a href="/processor.php"><img src="/assets/images/Processorbg.jpg" class="card-img-top" alt="Processor"></a>
                    <div class="card-body">
                        <h5 class="card-title">Processor</h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card best-seller2">
                    <a href="graphicscard.php"><img src="/assets/images/GraphicsCardbg.jpg" class="card-img-top" alt="Graphics Card"></a>
                    <div class="card-body">
                        <h5 class="card-title">Graphics Card</h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card best-seller2">
                    <a href="memory.php"><img src="/assets/images/Memorybg.jpg" class="card-img-top" alt="Memory"></a>
                    <div class="card-body">
                        <h5 class="card-title">Memory</h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card best-seller3">
                    <a href="storage.php"><img src="/assets/images/Storagebg.jpg" class="card-img-top" alt="Storage"></a>
                    <div class="card-body">
                        <h5 class="card-title">Storage</h5>
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
    <script src="/scripts/main.js"></script>

</body>

</html>