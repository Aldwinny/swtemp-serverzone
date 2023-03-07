<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/general.php';


html_header();
?>

<body>

    <?php navbar() ?>

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

    <?php html_footer() ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>

</body>

</html>