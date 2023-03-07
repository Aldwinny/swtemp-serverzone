 <?php
     session_start();
     $conn = mysqli_connect("localhost", "root", "", "admin");
     $msg = "";
     if (isset($_POST['submit'])) {
          //echo "<pre>";
          //print_r($_POST);
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $password = mysqli_real_escape_string($conn, $_POST['password']);
          $sql = mysqli_query($conn, "select * from login where username='$email' && password='$password'");
          $num = mysqli_num_rows($sql);
          if ($num > 0) {
               //echo "found";
               $row = mysqli_fetch_assoc($sql);
               $_SESSION['USER_ID'] = $row['id'];
               $_SESSION['USER_NAME'] = $row['username'];
               header("location:index.php");
          } else {
               $msg = "Please Enter Valid details !";
          }
     }
     ?>
 <?php
     include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/general.php';
     html_header();
     ?>

 <body>
      <div class="main">
           <div class="flex">
                <div class="content">
                     <h2 class="title">Login</h2>
                     <br>
                     <form method="post" action="">
                          <label for="username">Username</label>
                          <div class="field">
                               <input type="text" name="email" placeholder="Username" class="form-control" required>
                          </div>
                          <label for="password">Password</label>
                          <div class="field space">
                               <input type="password" name="password" placeholder="Password" class="form-control" required>
                          </div>
                          <div class="field space">
                               <input type="submit" name="submit" value="Login" class="btn submit-btn">
                          </div>
                          <div class="error">
                               <?php echo $msg ?>
                          </div>
                     </form>
                </div>
           </div>
      </div>
      <?php html_footer() ?>
 </body>

 </html>