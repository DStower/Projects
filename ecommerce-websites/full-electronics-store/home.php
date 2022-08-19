<?php
include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}

include 'components/wishlist_cart.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" async></script>
</head>
<body>
<?php include 'components/user_header.php'; ?>
    <div class="home-bg">
        <section class="home">
            <div class="slide">
                <div class="image">
                    <img src="images/home-img-1.png">
                </div>
                <div class="content">
                    <span>Upto 50% off</span>
                    <h3>Latest Smartphone</h3>
                    <a href="shop.php" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="slide">
                <div class="image">
                    <img src="images/home-img-2.png">
                </div>
                <div class="content">
                    <span>Upto 25% off</span>
                    <h3>Latest Camera</h3>
                    <a href="shop.php" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="slide">
                <div class="image">
                    <img src="images/home-img-3.png">
                </div>
                <div class="content">
                    <span>Upto 50% off</span>
                    <h3>Latest Tablet</h3>
                    <a href="shop.php" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="dot-nav">
                <span class="dot" onclick="currentSlide(1);"></span>
                <span class="dot" onclick="currentSlide(2);"></span>
                <span class="dot" onclick="currentSlide(3);"></span>
            </div>
        </section>
    </div>

    <!-- home category section starts -->
    <section class="home-category">
        <h3 class="heading">Shop By Category</h3>
        <div class="box-container">
            <a href="category.php?category=laptop" class="box">
                <img src="images/icon-1.png">
                <h3>Laptop</h3>
            </a>
            <a href="category.php?category=tv" class="box">
                <img src="images/icon-2.png">
                <h3>Tv</h3>
            </a>
            <a href="category.php?category=camera" class="box">
                <img src="images/icon-3.png">
                <h3>Camera</h3>
            </a>
            <a href="category.php?category=mouse" class="box">
                <img src="images/icon-4.png">
                <h3>Mouse</h3>
            </a>
            <a href="category.php?category=fridge" class="box">
                <img src="images/icon-5.png">
                <h3>Fridge</h3>
            </a>
            <a href="category.php?category=washing" class="box">
                <img src="images/icon-6.png">
                <h3>Washing Machine</h3>
            </a>
            <a href="category.php?category=phone" class="box">
                <img src="images/icon-7.png">
                <h3>Smartphone</h3>
            </a>
            <a href="category.php?category=watch" class="box">
                <img src="images/icon-8.png">
                <h3>Watch</h3>
            </a>
        </div>
    </section>
    <!-- home category section ends -->

    <!-- home products section starts -->
    <section class="products">
        <h3 class="heading">Latest Products</h3>
        <div class="box-container">
                <?php
                    $select_products = $conn->prepare("SELECT * FROM products LIMIT 6;");
                    $select_products->execute();
                    if($select_products->rowCount() > 0){
                        while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
                ?>
            <form action="" method="post" class="box">
                <input type="hidden" name="pid" value="<?php echo $fetch_product['id']; ?>">
                <input type="hidden" name="name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="price" value="<?php echo $fetch_product['price']; ?>">
                <input type="hidden" name="image" value="<?php echo $fetch_product['image_01']; ?>">
                <button class="fa fa-heart" type="submit" name="add_to_wishlist"></button>
                <a href="quick_view.php?pid=<?php echo $fetch_product['id']; ?>" class="fa fa-eye"></a>
                <img src="uploaded_img/<?php echo $fetch_product['image_01']; ?>">
                <div class="name"><?php echo $fetch_product['name']; ?></div>
                <div class="flex">
                    <div class="price"><span>$</span><?php echo $fetch_product['price']; ?><span>/-</span></div>
                    <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                </div>
                <input type="submit" value="Add to cart" class="btn" name="add_to_cart">
            </form>
                <?php
                        }
                    }else{
                        echo '<p class="empty">No products added yet!</p>';
                    }
                ?>
        </div>
    </section>
    <!-- home products section ends -->
<?php include 'components/footer.php'; ?>
</body>
</html>