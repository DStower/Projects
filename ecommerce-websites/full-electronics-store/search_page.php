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
    <title>Search Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" async></script>
</head>
<body>
<?php include 'components/user_header.php'; ?>
    <!-- search section starts -->
    <section class="search-form">
        <form action="" method="post">
            <input type="text" name="search_box" class="box" placeholder="Search products..." maxlength="100" required>
            <button type="submit" class="fa fa-search" name="search_btn"></button>
        </form>
    </section>
    <!-- search section ends -->

    <!-- display products section starts -->
    <section class="products" style="padding-top: 0; min-height: 100vh;">
        <div class="box-container">
            <?php
                if(isset($_POST['search_box']) || isset($_POST['search_btn'])){
                    $search_box = $_POST['search_box'];
                    $select_products = $conn->prepare("SELECT * FROM products WHERE name LIKE '%{$search_box}%';");
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
                        echo '<p class="empty">No products found!</p>';
                    }
                }
            ?>
        </div>
    </section>
    <!-- display products section ends -->
<?php include 'components/footer.php'; ?>
</body>
</html>