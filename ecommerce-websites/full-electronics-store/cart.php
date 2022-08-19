<?php
include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
    header('location:user_login.php');
}

if(isset($_POST['delete'])){
    $cart_id = $_POST['cart_id'];
    $delete_cart_item = $conn->prepare("DELETE FROM cart WHERE id = ?;");
    $delete_cart_item->execute([$cart_id]);
}

if(isset($_GET['delete_all'])){
    $delete_cart_item = $conn->prepare("DELETE FROM cart WHERE user_id = ?;");
    $delete_cart_item->execute([$user_id]);
    header('location:cart.php');
}

if(isset($_POST['update_qty'])){
    $cart_id = $_POST['cart_id'];
    $qty = $_POST['qty'];
    $qty = filter_var($qty, FILTER_UNSAFE_RAW);
    $update_qty = $conn->prepare("UPDATE cart SET quantity = ? WHERE id =?;");
    $update_qty->execute([$qty, $cart_id]);
    $message[] = 'Cart quantity updated';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" async></script>
</head>
<body>

<?php include 'components/user_header.php'; ?>

    <!-- cart section starts -->
    <section class="products shopping-cart">
        <h3 class="heading">Shopping Cart</h3>
        <div class="box-container">
            <?php
                $grand_total = 0;
                $select_cart = $conn->prepare("SELECT * FROM cart WHERE user_id = ?;");
                $select_cart->execute([$user_id]);
                if($select_cart->rowCount() > 0){
                    while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
            ?>
            <form action="" method="post" class="box">
                <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                <input type="hidden" name="pid" value="<?php echo $fetch_cart['pid']; ?>">
                <input type="hidden" name="name" value="<?php echo $fetch_cart['name']; ?>">
                <input type="hidden" name="price" value="<?php echo $fetch_cart['price']; ?>">
                <input type="hidden" name="image" value="<?php echo $fetch_cart['image']; ?>">
                <a href="quick_view.php?pid=<?php echo $fetch_cart['pid']; ?>" class="fa fa-eye"></a>
                <img src="uploaded_img/<?php echo $fetch_cart['image']; ?>">
                <div class="name"><?php echo $fetch_cart['name']; ?></div>
                <div class="flex">
                    <div class="price">$<?php echo $fetch_cart['price']; ?>/-</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="<?php echo $fetch_cart['quantity']; ?>">
                    <button type="submit" class="fa fa-edit" name="update_qty"></button>
                </div>
                <div class="sub-total"> sub total : <span>$<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</span> </div>
                <input type="submit" value="Delete item" onclick="return confirm('delete this from cart?');" class="delete-btn" name="delete">
            </form>
            <?php
            $grand_total += $sub_total;
                }
            }else{
                echo '<p class="empty">Your cart is empty</p>';
            }
            ?>
        </div>
        <div class="cart-total">
            <p>Grand total : <span>$<?php echo $grand_total; ?>/-</span></p>
            <a href="shop.php" class="option-btn">Continue Shopping</a>
            <a href="cart.php?delete_all" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('delete all from cart?');">Delete all items</a>
            <?php
                if($grand_total > 1){
            ?>
            <a href="checkout.php" class="btn">Proceed to checkout</a>
            <?php
                }
            ?>
        </div>
    </section>
    <!-- cart sections ends -->
<?php include 'components/footer.php'; ?>
</body>
</html>