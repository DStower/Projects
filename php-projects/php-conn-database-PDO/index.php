<?php
    include 'includes/class-autoload-inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect To A Database</title>
</head>
<body>
    <?php
        $usersObj = new UsersView();
        $usersObj->showUsers("Mary");

        $usersObj2 = new UsersContr();
        $usersObj2->createUser("6", "James", "Cameron", "1968-03-24");
    ?>
</body>
</html>