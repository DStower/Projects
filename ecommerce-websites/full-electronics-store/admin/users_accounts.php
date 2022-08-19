<?php
include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:admin_login.php');
}

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_user = $conn->prepare("DELETE FROM users WHERE id = ?;");
    $delete_user->execute([$delete_id]);
    $delete_order = $conn->prepare("DELETE FROM orders WHERE user_id = ?;");
    $delete_order->execute([$delete_id]);
    $delete_cart = $conn->prepare("DELETE FROM cart WHERE user_id = ?;");
    $delete_cart->execute([$delete_id]);
    $delete_wishlist = $conn->prepare("DELETE FROM wishlist WHERE user_id = ?;");
    $delete_wishlist->execute([$delete_id]);
    $delete_messages = $conn->prepare("DELETE FROM messages WHERE user_id = ?;");
    $delete_messages->execute([$delete_id]);
    header('location:users_accounts.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin_styles.css">
    <script src="../js/admin_script.js" async></script>
</head>
<body>
    
<?php include '../components/admin_header.php'; ?>

    <!-- users accounts section starts -->
    <section class="accounts">
        <h1 class="heading">Users Accounts</h1>
        <div class="box-container">
            <?php
                $select_account = $conn->prepare("SELECT * FROM users;");
                $select_account->execute();
                if($select_account->rowCount() > 0){
                    while($fetched_accounts = $select_account->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="box">
                <p>User id: <span><?php echo $fetched_accounts['id']; ?></span></p>
                <p>Username: <span><?php echo $fetched_accounts['name']; ?></span></p>
                <a href="users_accounts.php?delete=<?php echo $fetched_accounts['id']; ?>" class="delete-btn" onclick="return confirm('Delete this account?');">Delete</a>
            </div>
            <?php
                    }
                }else{
                    echo '<p class="empty">No Accounts Available</p>';
                }
            ?>
        </div>
    </section>
    <!-- users accounts section ends -->

</body>
</html>