<?php

try{
    $db_name = 'mysql:host=localhost;dbname=book_db';
    $username = 'root';
    $password = 'root';

    $conn = new PDO($db_name, $username, $password);
}catch(PDOException $e){
    echo 'Connection Failed: ' . $e->getMessage();
}

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arriving = date('Y-m-d', strtotime($_POST['arriving']));
    $leaving = date('Y-m-d', strtotime($_POST['leaving']));


    $book_trip = $conn->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arriving, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
    $book_trip->execute([$name, $email, $phone, $address, $location, $guests, $arriving, $leaving]);
    
    header('location:book.php');
}else{
    echo 'Something went wrong. Please try again.';
}
?>