<?php
include '../components/connect.php';

session_start();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_UNSAFE_RAW);
    $password = sha1($_POST['password']);
    $password = filter_var($password, FILTER_UNSAFE_RAW);

    $select_admin = $conn->prepare("SELECT * FROM admins WHERE name = ? AND password = ?;");
    $select_admin->execute([$name, $password]);
    $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);

    if($select_admin->rowCount() > 0){
        $_SESSION['admin_id'] = $fetch_admin_id['id'];
        header('location:dashboard.php');
    }else{
        $message[] = 'Incorrect username or password';
    }
}

if(isset($_SESSION['admin_id'])){
    header('location:dashboard.php');
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
    <link rel="stylesheet" type="text/css" href="../css/admin_styles.css">
</head>
<body> 

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
    <!-- admin login form section starts -->
    <section class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <input type="text" name="name" maxlength="20" required placeholder="Enter Your Username" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="password" maxlength="20" required placeholder="Enter Your Password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="Login Now" name="submit" class="btn">
        </form>
    </section>
    <!-- admin login form section ends -->
</body>
</html>