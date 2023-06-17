<?php
if(isset($_POST['submit'])) {
    $to = "youremail@example.com"; // Your email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $shootType = $_POST['shoot-type'];
    $shootDate = $_POST['shoot-date'];
    $subject = "New booking from $name";
    $message = "Name: $name\nEmail: $email\nLocation: $location\nPhone: $phone\nShoot Type: $shootType\nShoot Date: $shootDate";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
    echo "Thank you for your booking!";
}
?>
