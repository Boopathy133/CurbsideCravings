<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crubside Cravings</title>
    <link rel="stylesheet" href="style.css">
    <!-- box icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!-- header -->
    <header>
        <a href="#" class="logo"> <span>Crubside</span> Cravings</a>
        <ul class="navlist">
            <li><a href="#home" id="home" class="active">Home</a></li>
            <li><a href="#dishes">Dishes</a></li>
            <li><a href="#shop">Shop</a></li>
            <li><a href="#service">Service</a></li>
            <!-- <li><a href="" id="login">Login</a></li> -->
        </ul>
        <div class="nav-icons">
            <div class="box"><input type="text" placeholder="Search..">
                <a href=""><i class='bx bx-search-alt search-icon'></i></a>
            </div>
            <a href="#"><i class='bx bx-cart-alt'></i></a>
        </div>
    </header>
    <div class="section">
        <div class="home_section" id="home active">
            <div class="card">
                <div class="image">
                    <img src="Assets/Dishes/Chicken Rice.png" alt="">
                </div>
                <hr>
                <div class="caption">
                    <p class="rate">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </p>
                    <p class="product_name">Product Name</p>
                    <div class="price_discount">
                        <p class="price">Rs.50</p>
                        <!-- <p class="discount"><del>Rs.450</del></p> -->
                    </div>

                </div>
                <div class="button"><input type="button" value="Add to Cart"></div>
                <div class="shop_name"><small>From: New Supriya</small></div>
            </div>
        </div>
    </div>





    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Oru Service</a></li>
                        <li><a href="#">Privacy & Policy</a></li>
                        <li><a href="AddYours.php">Add Yours</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Payment Options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Online Shop</h4>
                    <ul>
                        <li><a href="#">Veg</a></li>
                        <li><a href="#">Non-Veg</a></li>
                        <li><a href="#">Chinese</a></li>
                        <li><a href="#">Traditional</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- LOGIN POPUP -->






    <!-- scrool top -->
    <a href="" id="home" class="scroll">
        <i class="login" style="cursor: pointer;">Login</i>
        <i class='bx bx-up-arrow-alt'></i>
    </a>
    <script src="script.js"></script>
</body>

</html>