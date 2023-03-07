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
                    <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
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

    <div id="content" class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>


        <div id="cart" class="col mb-9">
            <div class="box">
                <form action="cart.php" method="post" enctype="multipart/form-data">
                    <h1>New Order List</h1>
                    <p class="text-muted">You currently have 5 item(s) in your cart</p>
                    <div class="table-responsive">
                        <table class="table">

                            <thead>

                                <tr>

                                    <th colspan="2"> Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="2">Sub-total</th>

                                </tr>

                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <img src="images/NvidiaGTX1660.jpg" alt="Product 1" style="width: 80px;" class="img-responsive">
                                    </td>
                                    <td>
                                        <a href="Nvidia GTX 1660 details.php">Nvidia GTX 1660</a>
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        12,820.00
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        12,820.00
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                        <img src="images/ryzen_3.png" alt="Product 2" style="width: 80px;" class="img-responsive">
                                    </td>
                                    <td>
                                        <a href="Ryzen 3 3100details.php">Ryzen 3 3100</a>
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        5,999.00
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        5,999.00
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                        <img src="images/HyperxFury.png" alt="Product 3" style="width: 80px;" class="img-responsive">
                                    </td>
                                    <td>
                                        <a href="HyperX Fury 8gb 2400mhz DDR4 details.php">HyperX Fury 8gb 2400mhz DDR4</a>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        2,150.00
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        4,300.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="images/westerndigital.png" alt="Product 4" style="width: 80px;" class="img-responsive">
                                    </td>
                                    <td>
                                        <a href="Western Digital 1TB HDD details.php">Western Digital 1TB HDD</a>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        2,300.00
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        4,600.00
                                    </td>
                                </tr>
								<tr>
                                    <td>
                                        <img src="images/a320mh.png" alt="Product 4" style="width: 80px;" class="img-responsive">
                                    </td>
                                    <td>
                                        <a href="Western Digital 1TB HDD details.php">Gigabyte GA-A320M-H</a>
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        3,180.00
                                    </td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        3,180.00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">

                        <div class="pull-left">

                            <a href="menu.php" class="btn btn-default">

                                <i class="fa fa-chevron-left"></i> Continue Shopping

                            </a>

                        </div>
                        <div class="pull-right">

                            <button type="submit" name="update" value="Update Cart" href="index.php" class="btn btn-default">

                                <i class="fa fa-refresh"></i> Update Cart

                            </button>

                            <a href="#" style="background-color: #ffa600;color: #ffffff;" class="btn">
                                Proceed Checkout <i class="fa fa-chevron-right"></i>
                            </a>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col mb-9">
                  <div id="order-summary" class="box">
                      
                      <div class="box-header">
                          
                          <h3>Order Summary</h3>
                          
                      </div>
                      
                      <p class="text-muted">
                          
                          Shipping and additional costs are calculated based on value you have entered
                          
                      </p>
                      
                      <div class="table-responsive">
                          
                          <table class="table">
                              
                              <tbody>
                                  <tr>
                                      
                                      <td>Order Sub-Total</td>
                                      <th>PHP 30,899.00</th>
                                      
                                  </tr>
                                  
                                  <tr>
                                      
                                      <td>Shipping and Handling</td>
                                      <th>PHP 0.00</th>
                                      
                                  </tr>
                                  
                                  <tr>
                                      
                                      <td>Tax</td>
                                      <th>PHP 0.00</th>
                                      
                                  </tr>
                                  <tr class="total">
                                      
                                      <td>Total</td>
                                      <th>PHP 30,899.00</th>
                                      
                                  </tr>
                              </tbody>
                              
                          </table>
                          
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
