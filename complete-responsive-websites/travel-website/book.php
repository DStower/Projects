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

    <div class="heading" style="background: url(images/header-bg-3.png) no-repeat;">
        <h1>Book Now</h1>
    </div>

    <section class="booking">
        <h1 class="heading-title">Book A Trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name: </span>
                    <input type="text" name="name" placeholder="Enter your name">
                </div>
                <div class="inputBox">
                    <span>Email: </span>
                    <input type="email" name="email" placeholder="Enter your email">
                </div>
                <div class="inputBox">
                    <span>Phone: </span>
                    <input type="tel" name="phone" minlength="10" maxlength="10" placeholder="Enter your phone number">
                </div>
                <div class="inputBox">
                    <span>Address: </span>
                    <input type="text" name="address" placeholder="Enter your address">
                </div>
                <div class="inputBox">
                    <span>Where To: </span>
                    <input type="text" name="location" placeholder="Place you want to visit">
                </div>
                <div class="inputBox">
                    <span>How Many Guests: </span>
                    <input type="text" name="guests" placeholder="Number of guests">
                </div>
                <div class="inputBox">
                    <span>Arriving: </span>
                    <input type="date" name="arriving">
                </div>
                <div class="inputBox">
                    <span>Leaving: </span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" value="submit" name="send" class="btn">
        </form>
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