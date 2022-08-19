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
    $password = sha1($_POST['password']);
    $password = filter_var($password, FILTER_UNSAFE_RAW);
    $cpassword = sha1($_POST['cpassword']);
    $cpassword = filter_var($cpassword, FILTER_UNSAFE_RAW);

    $select_admin = $conn->prepare("SELECT * FROM admins WHERE name = ?;");
    $select_admin->execute([$name]);
    $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);

    if($select_admin->rowCount() > 0){
        $message[] = 'Username already exists!';
    }
    else if($password != $cpassword){
        $message[] = 'Confirm Password does not match password!';
    }else{
        $insert_admin = $conn->prepare("INSERT INTO admins (name, password) VALUES (?, ?);");
        $insert_admin->execute([$name, $password]);
        $message[] = 'New Admin Registered';
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
    <link rel="stylesheet" type="text/css" href="../css/admin_styles.css">
    <script src="../js/admin_script.js" async></script>
</head>
<body>

    <?php include '../components/admin_header.php'; ?>

    <!-- register admin section starts -->
    <section class="form-container">
        <form action="" method="post">
            <h3>Register</h3>
            <input type="text" name="name" maxlength="20" required placeholder="Enter Your Username" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="password" maxlength="20" required placeholder="Enter Your Password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="cpassword" maxlength="20" required placeholder="Confirm Your Password" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="Register Now" name="submit" class="btn">
        </form>
    </section>
    <!-- register admin section ends -->

</body>
</html>