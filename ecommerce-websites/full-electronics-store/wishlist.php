<?php
include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
    header('location:user_login.php');
}

include 'components/wishlist_cart.php';

if(isset($_POST['delete'])){
    $wishlist_id = $_POST['wishlist_id'];
    $delete_wishlist_item = $conn->prepare("DELETE FROM wishlist WHERE id = ?;");
    $delete_wishlist_item->execute([$wishlist_id]);
}

if(isset($_GET['delete_all'])){
    $delete_wishlist_item = $conn->prepare("DELETE FROM wishlist WHERE user_id = ?;");
    $delete_wishlist_item->execute([$user_id]);
    header('location:wishlist.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" async></script>
</head>
<body>
<?php include 'components/user_header.php'; ?>

    <!-- wishlist section starts -->
    <section class="products">
        <h3 class="heading">Your Wishlist Items</h3>
        <div class="box-container">
            <?php
            $grand_total = 0;
            $select_wishlist = $conn->prepare("SELECT * FROM wishlist WHERE user_id = ?;");
            $select_wishlist->execute([$user_id]);
            if($select_wishlist->rowCount() > 0){
                while($fetch_wishlist = $select_wishlist->fetch(PDO::FETCH_ASSOC)){
            ?>
            <form action="" method="post" class="box">
                <input type="hidden" name="pid" value="<?php echo $fetch_wishlist['pid']; ?>">
                <input type="hidden" name="wishlist_id" value="<?php echo $fetch_wishlist['id']; ?>">
                <input type="hidden" name="name" value="<?php echo $fetch_wishlist['name']; ?>">
                <input type="hidden" name="price" value="<?php echo $fetch_wishlist['price']; ?>">
                <input type="hidden" name="image" value="<?php echo $fetch_wishlist['image']; ?>">
                <a href="quick_view.php?pid=<?php echo $fetch_wishlist['pid']; ?>" class="fa fa-eye"></a>
                <img src="uploaded_img/<?php echo $fetch_wishlist['image']; ?>">
                <div class="name"><?php echo $fetch_wishlist['name']; ?></div>
                <div class="flex">
                    <div class="price">$<?php echo $fetch_wishlist['price']; ?>/-</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                </div>
                <input type="submit" value="Add to cart" class="btn" name="add_to_cart">
                <input type="submit" value="Delete item" onclick="return confirm('Delete this from wishlist?');" class="delete-btn" name="delete">
            </form>
            <?php
                }
            }else{
                echo '<p class="empty">Your wishlist is empty!</p>';
            }
            ?>
        </div>
        <div class="wishlist-shopping">
            <a href="shop.php" class="option-btn">Continue Shopping</a>
            <a href="wishlist.php?delete_all" class="delete-btn" onclick="return confirm('Delete all items from wishlist?');">Delete all items</a>
        </div>
    </section>
    <!-- wishlist sections ends -->

<?php include 'components/footer.php'; ?>
</body>
</html>