<?php
include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_UNSAFE_RAW);
    $email= $_POST['email'];
    $email = filter_var($email, FILTER_UNSAFE_RAW);
    $phone = $_POST['phone'];
    $phone = filter_var($phone, FILTER_UNSAFE_RAW);
    $msg = $_POST['msg'];
    $msg = filter_var($msg, FILTER_UNSAFE_RAW);

    $select_message = $conn->prepare("SELECT * FROM messages WHERE name = ? AND email = ? AND number = ? AND message = ?;");
    $select_message->execute([$name, $email, $phone, $msg]);

    if($select_message->rowCount() > 0){
        $message[] = 'Message Already Sent';
    }else{
        $insert_message = $conn->prepare("INSERT INTO messages (user_id, name, email, number, message) VALUES (?, ?, ?, ?, ?);");
        $insert_message->execute([$user_id, $name, $email, $phone, $msg]);

        $message[] = 'Message sent successfully';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js" async></script>
</head>
<body>
<?php include 'components/user_header.php'; ?>
    <!-- contact section starts -->
    <section class="contact">
        <form action="" method="post">
            <h3>Contact Us</h3>
            <input type="text" name="name" class="box" placeholder="Enter Your Name" maxlength="20" required>
            <input type="email" name="email" class="box" placeholder="Enter Your Email" maxlength="20" required>
            <input type="tel" name="phone" class="box" placeholder="Enter Your Phone Number" minlength="10" maxlength="10" required>
            <textarea name="msg" cols="30" rows="10" class="box" placeholder="Enter Your Message" required></textarea>
            <input type="submit" name="submit" value="Send Message" class="btn">
        </form>
    </section>
    <!-- contact section ends -->
<?php include 'components/footer.php'; ?>
</body>
</html>