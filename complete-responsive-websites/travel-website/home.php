<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" defer></script>
    <script src="js/script.js" defer></script>
</head>
<body>
    <!-- header section starts -->
    <header class="header">
        <a href="home.php" class="logo">Travel.</a>
        <nav class="navigation">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel Around The World</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section ends -->

    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="images/icon-4.png">
                <h3>Campfire</h3>
            </div>
            <div class="box">
                <img src="images/icon-5.png">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="images/icon-6.png">
                <h3>Camping</h3>
            </div>
        </div>
    </section>
    <!-- services section ends -->

    <!-- home about section starts -->
    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus expedita quos, ratione voluptatibus temporibus atque.</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!-- home about section ends -->

    <!-- home packages section starts -->
    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat inventore quas, modi ipsum deleniti a est eum optio..</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat inventore quas, modi ipsum deleniti a est eum optio..</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat inventore quas, modi ipsum deleniti a est eum optio..</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
    </section>
    <!-- home packages section ends -->

    <!-- home offer sections starts -->
    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% Off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, at vitae eius officia nisi doloribus consequuntur.</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </section>
    <!-- home offer sections ends -->

    <!-- footer section starts -->
    <footer class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
        </div>
        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Home</a>
            <a href="#"><i class="fas fa-angle-right"></i> About</a>
            <a href="#"><i class="fas fa-angle-right"></i> Package</a>
            <a href="#"><i class="fas fa-angle-right"></i> Book</a>
        </div>
        <div class="box">
            <h3>Contact Links</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i> testds@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> United States</a>
        </div>
        <div class="box">
            <h3>Quick Links</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
        </div>
    </div>
    <div class="credit">Created By <span>D.S.</span> | All Rights Reserved!</div>
</footer>
<!-- footer section ends -->
</body>
</html>