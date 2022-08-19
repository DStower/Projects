<?php
include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_UNSAFE_RAW);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_UNSAFE_RAW);
    $password = sha1($_POST['password']);
    $password = filter_var($password, FILTER_UNSAFE_RAW);
    $cpassword = sha1($_POST['cpassword']);
    $cpassword = filter_var($cpassword, FILTER_UNSAFE_RAW);
 
    $select_user = $conn->prepare("SELECT * FROM users WHERE email = ?;");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);
 
    if($select_user->rowCount() > 0){
       $message[] = 'Email already exists!';
    }else{
       if($password != $cpassword){
          $message[] = 'Confirm password not matched!';
       }else{
          $insert_user = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?);");
          $insert_user->execute([$name, $email, $cpassword]);
          $message[] = 'Registered successfully, login now please!';
       }
    }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" async></script>
</head>
<body>
<?php include 'components/user_header.php'; ?>
    <!-- user register section starts -->
    <section class="form-container">
        <form action="" method="post">
            <h3>Register</h3>
            <input type="text" name="name" maxlength="20" required placeholder="Enter Your Username" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="email" name="email" required placeholder="Enter Your Email" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="password" maxlength="20" required placeholder="Enter Your Password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="cpassword" maxlength="20" required placeholder="Confirm Your Password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="Register Now" name="submit" class="btn">
            <p>Already have an account?</p>
            <a href="user_login.php" class="option-btn">Login Now</a>
        </form>
    </section>
    <!-- user register section ends -->
<?php include 'components/footer.php'; ?>
</body>
</html>