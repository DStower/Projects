<?php 
    include 'personClass.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Class</title>
</head>
<body>
    <?php
        $person1 = new Person();
        $person1->setName("simba");
        echo $person1->name;
        
        $person2 = new Person("Marcy", "Red");
        echo $person2->getName();
        echo $person2->name;
    ?>
</body>
</html>