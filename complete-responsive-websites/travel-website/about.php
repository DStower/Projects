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

    <div class="heading" style="background: url(images/header-bg-1.png) no-repeat;">
        <h1>About Us</h1>
    </div>

    <section class="about">
        <div class="image">
            <img src="images/about-img.jpg">
        </div>
        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nostrum perferendis cumque vero! Dicta iure temporibus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae blanditiis ducimus, adipisci culpa, repellendus.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>Top Destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Affordable Price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Guide Service</span>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <h1 class="heading-title">Clients' Reviews</h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, ut? Temporibus nemo at culpa inventore repellat velit laboriosam fugiat nihil.</p>
                    <h3>Somebody Special</h3>
                    <span>Traveler</span>
                    <img src="images/review-1.jpg">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, ut? Temporibus nemo at culpa inventore repellat velit laboriosam fugiat nihil.</p>
                    <h3>Somebody Special</h3>
                    <span>Traveler</span>
                    <img src="images/review-2.jpg">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, ut? Temporibus nemo at culpa inventore repellat velit laboriosam fugiat nihil.</p>
                    <h3>Somebody Special</h3>
                    <span>Traveler</span>
                    <img src="images/review-3.jpg">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, ut? Temporibus nemo at culpa inventore repellat velit laboriosam fugiat nihil.</p>
                    <h3>Somebody Special</h3>
                    <span>Traveler</span>
                    <img src="images/review-4.jpg">
                </div>
            </div>
        </div>
    </section>

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