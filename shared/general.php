
<?php
function html_header($title = 'Server Zone')
{
    echo <<<HTML
    <!DOCTYPE HTML>
    <html lang='en'>
    
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale-1' />
        <link rel='icon' href='/assets/Logo.png' />
        <link rel='stylesheet' href='/styles/bootstrap.min.css' />
        <link rel='stylesheet' href='/styles/font-awesome.min.css' />
        <link rel='stylesheet' href='/styles/style.css' />
        <title>$title</title>
    </head>
    HTML;
}

function html_footer()
{
    echo <<<HTML
    <footer>
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
                <p class="pull-left"> Server Zone &copy; 2021 All Rights Reserved</p>
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
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    HTML;
}

function navbar($index = 0)
{
    echo "
    <header>
        <div id='Top'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-6 contact'>
                        <p class='Text-Muted'><i class='fa fa-phone'></i> +63 912 345 6789</p>
                        <p class='Text-Muted'><i class='fa fa-envelope'></i> ServerZone@gmail.com</p>
                    </div>
                    <div class='col-md-6'>
                        <ul class='menu'>
                            <li><a href=''>Register</a></li>
                            <li><a href='login.php'>Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav id='navbar' class='navbar navbar-expand-lg'>
            <div class='container'>
                <div class='navbar-header'>
                    <a href='' class='navbar-brand'>
                        <img src='/assets/Logo.png' alt='Server Zone Logo' class='hidden-xs'>
                    </a>
                </div>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarNav'>
                    <ul class='navbar-nav left'>
                        <li class='nav-item" . ($index === 1 ? ' active' : '') . "'><a href='/index.php' class='nav-link'>Home</a></li>
                        <li class='nav-item" . ($index === 2 ? ' active' : '') . "'><a href='/pages/menu.php' class='nav-link'>Menu</a></li>
                        <li class='nav-item" . ($index === 3 ? ' active' : '') . "'><a href='/pages/contact.php' class='nav-link'>Contact Us</a></li>
                        <li class='nav-item" . ($index === 4 ? ' active' : '') . "'><a href='/pages/about.php' class='nav-link'>About Us</a></li>
                        <li class='nav-item" . ($index === 5 ? ' active' : '') . "'><a href='/pages/file.php' class='nav-link'>Maintenance</a></li>
                    </ul>
                    <a style='color: #ffffff;' href='/pages/cart.php' class='btn navbar-btn right hidden-xs'>
                        <i class='fa fa-shopping-cart'></i>
                        <span class='badge'>5</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>";
}
