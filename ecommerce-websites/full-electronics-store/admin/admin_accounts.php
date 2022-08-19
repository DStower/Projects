<?php
include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:admin_login.php');
}

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_admin = $conn->prepare("DELETE FROM admins WHERE id = ?;");
    $delete_admin->execute([$delete_id]);
    header('location:admin_accounts.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Accounts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin_styles.css">
    <script src="../js/admin_script.js" async></script>
</head>
<body>

<?php include '../components/admin_header.php'; ?>

    <!-- admins accounts section starts -->
    <section class="accounts">
        <h1 class="heading">Admins Accounts</h1>
        <div class="box-container">
            <div class="box">
                <p>Register New Admin</p>
                <a href="register_admin.php" class="option-btn">Register</a>
            </div>
            <?php
                $select_account = $conn->prepare("SELECT * FROM admins;");
                $select_account->execute();
                if($select_account->rowCount() > 0){
                    while($fetched_accounts = $select_account->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="box">
                <p>Admin id: <span><?php echo $fetched_accounts['id']; ?></span></p>
                <p>Username: <span><?php echo $fetched_accounts['name']; ?></span></p>
                <div class="flex-btn">
                    <a href="admin_accounts.php?delete=<?php echo $fetched_accounts['id']; ?>" class="delete-btn" onclick="return confirm('Delete this account?');">Delete</a>
                    <?php
                        if($fetched_accounts['id'] == $admin_id){
                            echo '<a href="update_profile.php" class="option-btn">Update</a>';
                        }
                    ?>
                </div>
            </div>
            <?php
                    }
                }else{
                    echo '<p class="empty">No Accounts Available</p>';
                }
            ?>
        </div>
    </section>
    <!-- admins accounts section ends -->
</body>
</html>