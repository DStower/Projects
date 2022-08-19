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
        <a href="dashboard.php" class="logo">Admin<span>Panel</span></a>
        <nav class="navigation">
            <a href="dashboard.php">Home</a>
            <a href="products.php">Products</a>
            <a href="placed_orders.php">Orders</a>
            <a href="admin_accounts.php">Admins</a>
            <a href="users_accounts.php">Users</a>
            <a href="messages.php">Messages</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fa fa-bars"></div>
            <div id="user-btn" class="fa fa-user"></div>
        </div>
        <div class="profile">
            <?php
                $select_profile = $conn->prepare("SELECT * FROM admins WHERE id = ?;");
                $select_profile->execute([$admin_id]);
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
            <p><?php echo $fetch_profile['name']; ?></p>
            <a href="update_profile.php" class="btn">Update Profile</a>
            <div class="flex-btn">
                <a href="admin_login.php" class="option-btn">Login</a>
                <a href="register_admin.php" class="option-btn">Register</a>
            </div>
            <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('Logout from this website?');">Logout</a>
        </div>
    </section>
</header>