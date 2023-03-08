<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/services/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/general.php';

$category = 'motherboard';

if (isset($_GET['category'])) {
    /**
     * Protects against SQL Injections by adding escape character (\) to special characters that may ruin the SQL statement
     */
    $prepare_category = preg_replace('/\d+/u', '', $_GET['category']); // Remove all numbers
    $prepare_category = trim($prepare_category); // Remove all trailing space
    $category = mysqli_real_escape_string($connection, $prepare_category); // Assign to category
}

$stmt = mysqli_prepare($connection, "SELECT * FROM items WHERE category_id IN (SELECT category_id FROM categories WHERE name = ?)");
$stmt->bind_param("s", $category);
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
                <li class="breadcrumb-item active" aria-current="page"><?php echo $result->num_rows === 0 ? 'Unknown' : ucfirst($category) ?></li>
            </ol>
        </nav>
    </div>

    <div id="product" class="container">
        <div class="row row-cols-1 row-cols-sm-4">
            <?php
            if ($result->num_rows === 0) {
            ?>
                <div class="col mb-4">
                    Not found!
                </div>
                <?php } else {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="col mb-4">
                        <div class="card best-seller1">
                            <img src="/assets/<?php echo $row['img_link'] ?>" class="card-img-top" alt="<?php echo $row['brand'] . ' ' . $row['name']; ?>">
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $row['brand'] . ' ' . $row['name']; ?> <span class="badge badge-danger">Hot!</span>
                                    <h4 style="color: #9e1515;">PHP <?php echo $row['price'] ?></h4>
                                </h6>
                                <p class="button">
                                    <a class="btn btn-sm btn-default" href="/pages/items.php?item=<?php echo $row['item_id'] ?>">
                                        View Details
                                    </a>
                                    <a class="btn btn-sm btn-primary" href="/pages/items.php?item=<?php echo $row['item_id'] ?>">
                                        <i class='fa fa-shopping-cart'></i> Add to cart
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>

    <?php
    html_footer();

    $stmt->close(); ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>

</body>

</html>