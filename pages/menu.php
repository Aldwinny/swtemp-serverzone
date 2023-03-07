<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/services/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/general.php';



html_header();
?>

<body>

    <?php
    navbar(2)
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
            <?php
            $result = mysqli_query($connection, "SELECT * FROM categories");
            if (mysqli_num_rows($result) == 0) {
            ?>
                <div class="col mb-4">
                    <div class="card best-seller1">
                        <div class="card-body">
                            <h5 class="card-title">No categories found.</h5>
                        </div>
                    </div>
                </div>
                <?php } else {
                while ($row = mysqli_fetch_array($result)) { ?>
                    <div class="col mb-4">
                        <div class="card best-seller1">
                            <a href="/pages/categories.php?category=<?php echo strtolower($row['name']) ?>"><img src="/assets/<?php echo $row['img_link']; ?>" class="card-img-top" alt="Motherboard"></a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
    <?php html_footer() ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/scripts/main.js"></script>

</body>

</html>