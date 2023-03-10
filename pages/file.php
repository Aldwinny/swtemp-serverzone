<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/services/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/general.php';

html_header();
?>

<body>

    <?php navbar(5) ?>

    <div class="container">
        <div class="col-lg-4">
            <h2>Server Zone Database </h2>
            <form action="" name=form1 method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="brand">Brand:</label>
                    <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand">
                </div>

                <div class="form-group">
                    <label for="nameofproduct">Name of Product:</label>
                    <input type="text" class="form-control" id="nameofproduct" placeholder="Enter nameofproduct" name="nameofproduct">
                </div>

                <div class="form-group">
                    <label for="specs">Specs:</label>
                    <input type="text" class="form-control" id="specs" placeholder="Enter specs" name="specs">
                </div>

                <div class="form-group">
                    <label for="price">price:</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
                </div>

                <div class="form-group">
                    <label for="price">Image:</label>
                    <input type="file" class="form-control" name="f1">
                </div>

                <button type="submit" name="insert" class="btn btn-default">Insert</button>
                <button type="submit" name="update" class="btn btn-default">Update</button>
                <button type="submit" name="delete" class="btn btn-default">Delete</button>
            </form>
        </div>
    </div>

    <div class="col-lg-12">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Brand</th>
                    <th>Name of Product</th>
                    <th>Specs</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $res = mysqli_query($link, "select* from table1");
                while ($row = mysqli_fetch_array($res)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $row["id"];
                    echo "</td>";
                    echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
                                                                                                        echo "<td>";
                                                                                                        echo $row["brand"];
                                                                                                        echo "</td>";
                                                                                                        echo "<td>";
                                                                                                        echo $row["nameofproduct"];
                                                                                                        echo "</td>";
                                                                                                        echo "<td>";
                                                                                                        echo $row["specs"];
                                                                                                        echo "</td>";
                                                                                                        echo "<td>";
                                                                                                        echo $row["price"];
                                                                                                        echo "</td>";
                                                                                                        echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>" <button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
                                                                                                                                                                                                                                        echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>" <button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
                                                                                                                                                                                                                                                                                                                                                                            echo "</tr>";
                                                                                                                                                                                                                                                                                                                                                                        }

                                                                                                                                                                                                                                                                                                                                                                            ?>

            </tbody>
        </table>


    </div>
    <?php
    if (isset($_POST["insert"])) {
        $tm = md5(time());
        $fnm = $_FILES["f1"]["name"];
        $dst = "./pics/" . $tm . $fnm;
        $dst1 = "pics/" . $tm . $fnm;
        move_uploaded_file($_FILES["f1"]["tmp_name"], $dst);

        mysqli_query($link, "insert into table1 values(NULL,'$_POST[brand]','$_POST[nameofproduct]','$_POST[specs]','$_POST[price]','$dst1')");

    ?>
        <script type="text/javascript">
            window.location.href = window.location.href;
        </script>

    <?php

    }
    if (isset($_POST["delete"])) {
        mysqli_query($link, "delete from table1 where brand='$_POST[brand]'") or die(mysqli_error($link));

    ?>
        <script type="text/javascript">
            window.location.href = window.location.href;
        </script>

    <?php

    }
    if (isset($_POST["update"])) {
        mysqli_query($link, "update table1 set brand='$_POST[nameofproduct]' where brand='$_POST[brand]'") or die(mysqli_error($link));

    ?>
        <script type="text/javascript">
            window.location.href = window.location.href;
        </script>

    <?php
    }

    html_footer();
    ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>

</body>

</html>