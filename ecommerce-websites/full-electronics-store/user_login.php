<?php
include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}

if(isset($_POST['submit'])){
    $username_email = $_POST['username_email'];
    $username_email = filter_var($username_email, FILTER_UNSAFE_RAW);
    $password = sha1($_POST['password']);
    $password = filter_var($password, FILTER_UNSAFE_RAW);
 
    $select_user = $conn->prepare("SELECT * FROM users WHERE name = ? OR email = ? AND password = ?;");
    $select_user->execute([$username_email, $username_email, $password]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);
 
    if($select_user->rowCount() > 0){
       $_SESSION['user_id'] = $row['id'];
       header('location:home.php');
    }else{
       $message[] = 'Incorrect username or password!';
    }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" async></script>
</head>
<body>
<?php include 'components/user_header.php'; ?>
    <!-- user login form section starts -->
    <section class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <input type="text" name="username_email" maxlength="50" required placeholder="Enter Your Username Or Email" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="password" maxlength="20" required placeholder="Enter Your Password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="Login Now" name="submit" class="btn">
            <p>Don't have an account?</p>
            <a href="user_register.php" class="option-btn">Register Now</a>
        </form>
    </section>
    <!-- user login form section ends -->
<?php include 'components/footer.php'; ?>
</body>
</html>