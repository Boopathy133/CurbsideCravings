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
            <!-- <li><a href="" id="popup" onclick="openPopup()">Register</a></li> -->
            <!-- <li><a href="#">Login</a></li> -->
        </ul>
        <div class="nav-icons">
            <div class="box"><input type="text" placeholder="Search..">
                <a href=""><i class='bx bx-search-alt search-icon'></i></a>
            </div>
            <a href="#"><i class='bx bx-cart-alt'></i></a>
        </div>
    </header>
    <div class="section">
        <div class="home_section">
            <div class="card">
                <div class="image">
                    <img src="Assets/Dishes/Chicken Rice.png" alt="">
                </div><hr>
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
            <!-- <div class="card">
                <div class="image">
                    <img src="Assets/Dishes/Dosa.png" alt="">
                </div><hr>
                <div class="caption">
                    <p class="rate">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </p>
                    <p class="product_name">Product Name</p>
                    <p class="price">Rs.300</p>
                    <p class="discount"><del>Rs.450</del></p>
                </div>
                <input type="button" value="Add To cart">
            </div>
            <div class="card">
                <div class="image">
                    <img src="Assets/Dishes/Chicken-Noodles.png" alt="">
                </div><hr>
                <div class="caption">
                    <p class="rate">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </p>
                    <p class="product_name">Product Name</p>
                    <p class="price">Rs.300</p>
                    <p class="discount"><del>Rs.450</del></p>
                </div>
                <input type="button" value="Add To cart">
            </div>
            <div class="card">
                <div class="image">
                    <img src="Assets/Dishes/Chicken-Chinese.png" alt="">
                </div><hr>
                <div class="caption">
                    <p class="rate">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </p>
                    <p class="product_name">Product Name</p>
                    <p class="price">Rs.300</p>
                    <p class="discount"><del>Rs.450</del></p>
                </div>
                <input type="button" value="Add To cart">
            </div> -->
        </div>
    </div>

    <!-- Register -->
    <!-- <section>
        <div class="form-box login">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">E-mail</label>
                    </div>
                    <div class="input-box">
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for="">
                            <input type="checkbox">Remenber Me
                            <a href="#">Forget Password</a>
                        </label>
                    </div>
                    <button>Login</button>
                    <div class="register">
                        <label for="">
                            Don't have an account
                            <a href="#">Register</a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-box register">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="input-box">
                        <input type="text" required>
                        <label for="">E-mail</label>
                    </div>
                    <div class="input-box">
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for="">
                            <input type="checkbox">Remenber Me
                            <a href="#">Forget Password</a>
                        </label>
                    </div>
                    <button>Login</button>
                    <div class="register">
                        <label for="">
                            Don't have an account
                            <a href="#">Register</a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </section> -->


    <!-- HOME SECTION
    <section class="home" id="home">

    </section>
    DISHES SECTION
    <section class="dishes" id="dishes">
        <img src="uIsTKZsJPHUuaiVJn+YVKbqoxWFAa7G6kTHtm9_t2HA=.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, distinctio saepe deserunt nostrum architecto mollitia autem iusto porro quia, ipsam esse tempore nisi quos veniam. Dolorem quasi voluptatum id sequi!</p>
    </section>
    <section class="shop" id="shop">
        
    </section>
    <section class="service" id="service">
        
    </section> -->


    <!-- scrool top -->
    <a href="#home" class="scroll">
        <i class='bx bx-up-arrow-alt'></i>
    </a>
    <script src="script.js"></script>
</body>

</html>