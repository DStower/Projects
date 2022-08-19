<?php
include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:admin_login.php');
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_UNSAFE_RAW);

    $empty_password = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
    $prev_password = $_POST['prev_password'];
    $old_password = sha1($_POST['old_password']);
    $old_password = filter_var($old_password, FILTER_UNSAFE_RAW);
    $new_password = sha1($_POST['new_password']);
    $new_password = filter_var($new_password, FILTER_UNSAFE_RAW);
    $confirm_password = sha1($_POST['confirm_password']);
    $confirm_password = filter_var($confirm_password, FILTER_UNSAFE_RAW);

    if($old_password == $empty_password){
        $message[] = 'Please enter old password';
    }
    elseif($old_password != $prev_password){
        $message[] = 'Old password does not match';
    }
    elseif($new_password != $confirm_password){
        $message[] = 'Confirm password does not match';
    }
    elseif($new_password == $empty_password || $confirm_password == $empty_password){
        $message[] = 'Please enter the new password';
    }else{
        $update_name = $conn->prepare("UPDATE admins SET name = ? WHERE id = ?;");
        $update_name->execute([$name, $admin_id]);

        $update_password = $conn->prepare("UPDATE admins SET password = ? WHERE id = ?;");
        $update_password->execute([$confirm_password, $admin_id]);
        $message[] = 'Account updated successfully';
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin_styles.css">
    <script src="../js/admin_script.js" async></script>
</head>
<body>

<?php include '../components/admin_header.php'; ?>

    <!-- admin profile update section starts -->
    <section class="form-container">
        <form action="" method="post">
            <h3>Update Profile</h3>
            <input type="hidden" name="prev_password" value="<?php echo $fetch_profile['password']; ?>">
            <input type="text" name="name" maxlength="20" required placeholder="Enter Your Username" class="box" oninput="this.value = this.value.replace(/\s/g, '')" value="<?php echo $fetch_profile["name"]; ?>">
            <input type="password" name="old_password" maxlength="20" placeholder="Enter Your Old Password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="new_password" maxlength="20" placeholder="Enter Your New Password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="confirm_password" maxlength="20" placeholder="Confirm Your New Password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="Update Now" name="submit" class="btn">
        </form>
    </section>
    <!-- admin profile update section ends -->
</body>
</html>