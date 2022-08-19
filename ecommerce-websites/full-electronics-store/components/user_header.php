<?php
if(isset($message)){
    foreach($message as $message){
        echo '   
        <div class="message">
            <span>'.$message.'</span>
            <i class="fa fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>
<header class="header">
    <section class="flex">
        <a href="home.php" class="logo"><span>Elect</span>tronix</a>
        <nav class="navigation">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <?php
                if(isset($_SESSION['user_id'])){
            ?>
            <a href="orders.php">Orders</a>
            <?php
                }
            ?>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
        </nav>
        <div class="icons">
            <?php
                $count_wishlist_items = $conn->prepare("SELECT * FROM wishlist WHERE user_id = ?;");
                $count_wishlist_items->execute([$user_id]);
                $total_wishlist_items = $count_wishlist_items->rowCount();

                $count_cart_items = $conn->prepare("SELECT * FROM cart WHERE user_id = ?;");
                $count_cart_items->execute([$user_id]);
                $total_cart_items = $count_cart_items->rowCount();
            ?>
            <div id="menu-btn" class="fa fa-bars"></div>
            <a href="search_page.php"><i class="fa fa-search"></i></a>
            <a href="wishlist.php"><i class="fa fa-heart"></i><span>(<?php echo $total_wishlist_items; ?>)</span></a>
            <a href="cart.php"><i class="fa fa-shopping-cart"></i><span>(<?php echo $total_cart_items; ?>)</span></a>
            <div id="user-btn" class="fa fa-user"></div>
        </div>
        <div class="profile">
            <?php
                $select_profile = $conn->prepare("SELECT * FROM users WHERE id = ?;");
                $select_profile->execute([$user_id]);
                if($select_profile->rowCount() > 0){
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
            <p><?php echo $fetch_profile['name']; ?></p>
            <a href="update_user.php" class="btn">Update Profile</a>
            <div class="flex-btn">
                <a href="user_login.php" class="option-btn">Login</a>
                <a href="user_register.php" class="option-btn">Register</a>
            </div>
            <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('Logout from this website?');">Logout</a>
            <?php
                }else{
            ?>
            <p>Please login first!</p>
            <div class="flex-btn">
                <a href="user_login.php" class="option-btn">Login</a>
                <a href="user_register.php" class="option-btn">Register</a>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
</header>