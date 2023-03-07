<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/shared/general.php';

html_header();
?>

<body>

    <?php
    navbar(3)
    ?>

    <div id="content" class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact US</li>
            </ol>
        </nav>



        <div class="col mb-4">


            <div class="box-header">

                <center>

                    <h2> Feel free to Contact Us</h2>

                    <p class="text-muted" style="color:#707070;">
                        If you have any questions, feel free to contact us Our Customer Service work <strong>24/7</strong>
                    </p>

                </center>

                <form action="contact.php" method="post">

                    <div class="form-group">

                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">

                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">

                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" required>
                    </div>
                    <div class="form-group">

                        <label>Message</label>
                        <textarea name="message" id="" class="form-control"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="submit" style="background-color: #589b37;color: #ffffff;" class="btn">
                            <i class="fa fa-user-md"></i> Send Message</button>
                    </div>
                </form>

            </div>

        </div>

    </div>

    <?php html_footer() ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script>

</body>

</html>