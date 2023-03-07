<header>
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

    <nav id="navbar" class="navbar navbar-expand-lg">
        <div class="container">
            <div class="navbar-header">
                <a href="" class="navbar-brand">
                    <img src="/assets/images/Logo.png" alt="Server Zone Logo" class="hidden-xs">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav left">
                    <li class="nav-item active"><a href="/index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/pages/menu.php" class="nav-link">Menu</a></li>

                    <li class="nav-item"><a href="/pages/contact.php" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="/pages/about.php" class="nav-link">About Us</a></li>
                    <?php
                    // TODO: Maintenance should not be visible to normal user as part of UAC
                    ?>
                    <li class="nav-item"><a href="/pages/file.php" class="nav-link">Maintenance</a></li>
                </ul>
                <a style="color: #ffffff;" href="/pages/cart.php" class="btn navbar-btn right  hidden-xs">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="badge">5</span>
                </a>
            </div>
        </div>
    </nav>
</header>