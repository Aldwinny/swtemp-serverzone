<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/services/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/general.php';

$item = 1;

if (isset($_GET['item'])) {
    /**
     * Protects against SQL Injections by ensuring that the input is a number
     */
    $item = intval(trim($_GET['item'])); // Turn it to an actual integer
}

$stmt = mysqli_prepare($connection, "SELECT * FROM items WHERE item_id = ? LIMIT 1");
$stmt->bind_param("i", $item);
$stmt->execute();

$result = $stmt->get_result();


html_header();
?>

<body>

    <?php navbar(2) ?>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="menu.php">Menu</a></li>
                <li class="breadcrumb-item"><a href="motherboard.php">Motherboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">MSI B550M PRO Motherboard</li>
            </ol>
        </nav>
    </div>

    <div id="details" class="container">
        <div id="productMain" class="row row-cols-1 row-cols-md-2">
            <?php
            if ($result->num_rows === 0) {
            ?>
                <p>
                    ¯\_(ツ)_/¯ - Sorry man didnt find it..
                </p>
                <?php
            } else {
                while ($result->fetch_assoc()) {
                ?>
                    <div class="col mb-4">
                        <div id="mainImage">
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/MSIPROMotherboard.png" class="d-block w-100" alt="Slide 1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="box">
                            <h1 class="text-left">MSI B550M PRO Motherboard</h1>
                            <p>
                                <li>MD B550
                                <li>Supports AM4 socket 3rd Gen AMD Ryzen processors, and future AMD Ryzen processors with BIOS update<br>
                                <li>Supports DDR4 4400+/ 4266/ 4133/ 4000/ 3866/ 3733/ 3600/ 3466/ 3200/ 3066/ 3000/ 2933/ 2800/ 2667 MHz by A-XMP OC MODE<br>
                                <li>Supports DDR4 3200/ 3066/ 3000/ 2933/ 2800/ 2667/ 2400/ 2133/ 1866 MHz by JEDEC<br>
                                <li>1DPC 1R max speed 4400 MHZ<br>
                                <li>1DPC 2R max speed 3733 MHZ<br>
                                <li>2DPC 1R max speed 3866 MHZ<br>
                                <li>2DPC 2R max speed 3466 MHZ<br>
                            </p>
                            <p style="color: #9e1515; font-size: 32px;font-weight: 400px;">PHP 7,980.00</p>
                            <form action="MSI B550M PRO Motherboarddetails.php" class="form-horizontal" method="post">
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
            <?php }
            } ?>
        </div>
    </div>

    <?php
    html_footer();
    $stmt->close();
    ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>

</body>

</html>