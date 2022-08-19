<?php
include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" async></script>
</head>
<body>
<?php include 'components/user_header.php'; ?>

    <!-- banner section starts -->
    <section class="banner">
        <div class="content">
            <h2><span>Why</span> Shop Here?</h2>
            <p>We provide the latest technology and provide free expedited shipping just for you. We strive for customer satisfaction and want you to have the best of the best.</p>
            <a href="shop.php" class="btn">Shop Now</a>
        </div>
    </section>
    <!-- banner section ends -->

    <!-- about section starts -->
    <section class="about">
        <div class="row">
            <div class="col50">
                <h2 class="title-text"><span>About</span>Us</h2>
                <p>We've been rated top 10 best seller across the United States. We are partnered with Fortune 500 companies and we make it our life's work to provide everything you may possibly need.</p>
            </div>
            <div class="col50">
                <div class="imageBox">
                    <img src="images/about-section.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- testimonials section starts -->
    <section class="testimonials">
        <div class="title">
            <h2><span>Testi</span>monials</h2>
            <p>What Customers Have Said About Us</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imageBox">
                    <img src="images/testi1.jpg">
                </div>
                <div class="text">
                    <p>They really offer nothing but the best!</p>
                    <h3>Somebody Special</h3>
                </div>
            </div>
            <div class="box">
                <div class="imageBox">
                    <img src="images/testi2.jpg">
                </div>
                <div class="text">
                    <p>I got exactly what I ordered. Color me impressed!</p>
                    <h3>Somebody Special</h3>
                </div>
            </div>
            <div class="box">
                <div class="imageBox">
                    <img src="images/testi3.jpg">
                </div>
                <div class="text">
                    <p>They have even the items you can't find in other places. Remarkable!</p>
                    <h3>Somebody Special</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials section ends -->
<?php include 'components/footer.php'; ?>
</body>
</html>