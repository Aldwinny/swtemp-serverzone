<?php
// TODO: THIS FEELS LIKE IT BELONGS TO SERVICES FOLDER???
include "connection.php";
$id = $_GET["id"];

$brand = "";
$nameofproduct = "";
$specs = "";
$price = "";
$image = "";

$res = mysqli_query($link, "select * from table1 where Id=$id");
while ($row = mysqli_fetch_array($res)) {
  $brand = $row["brand"];
  $nameofproduct = $row["nameofproduct"];
  $specs = $row["specs"];
  $price = $row["price"];
  $image = $row["image"];
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/general.php';
html_header();
?>

<body>
  <div class="container">
    <div class="col-lg-4">
      <h2>Basic Database Connection</h2>
      <form action="" name=form1 method="post" enctype="multipart/form-data">

        <img src="<?php echo $image; ?> " height="100" width="100">
        <div class="form-group">
          <label for="brand">Brand:</label>
          <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand" value="<?php echo $brand; ?>" </div>

          <div class="form-group">
            <label for="nameofproduct">Name of product:</label>
            <input type="text" class="form-control" id="nameofproduct" placeholder="Enter nameofproduct" name="nameofproduct" value="<?php echo $nameofproduct; ?>" </div>

            <div class="form-group">
              <label for="specs">Specs:</label>
              <input type="text" class="form-control" id="specs" placeholder="Enter specs" name="specs" value="<?php echo $specs; ?>">
            </div>

            <div class="form-group">
              <label for="price">Price:</label>
              <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" value="<?php echo $price; ?>">
            </div>

            <div class="form-group">
              <label for="price">Image:</label>
              <input type="file" class="form-control" name="f1">
            </div>

            <button type="submit" name="update" class="btn btn-default">Update</button>

      </form>
    </div>
  </div>



  </div>



</body>

<?php
if (isset($_POST["update"])) {
  $tm = md5(time());
  $fnm = $_FILES["f1"]["name"];

  if ($fnm == "") {
    mysqli_query($link, "update table1 set brand='$_POST[brand]',nameofproduct='$_POST[nameofproduct]',specs='$_POST[specs]',price='$_POST[price]' where id=$id");
  } else {
    $dst = "./images/" . $tm . $fnm;
    $dst1 = "images/" . $tm . $fnm;
    move_uploaded_file($_FILES["f1"]["tmp_name"], $dst);


    mysqli_query($link, "update table1 set brand='$_POST[brand]',nameofproduct='$_POST[nameofproduct]',specs='$_POST[specs]',price='$_POST[price]',image='$dst1' where id=$id");
  }

?>
  <script type="text/javascript">
    window.location = "file.php";
  </script>
<?php
}

?>

</html>