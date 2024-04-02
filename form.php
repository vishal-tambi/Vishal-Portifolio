<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// database connection
$con = new mysqli('localhost','root','','form_for_portfolio');
if($con->connect_error){
    die('Connection Failed :' .$con->connect_error);
}
else{
    $stmt = $con->prepare("insert into registration(name, email, subject, message)
    values(?,?,?,?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();
    echo "Your message has been sent !"
    $stmt->close();
    $con->close();
}

?>