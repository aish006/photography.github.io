<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "mahant7843@gmail.com"; // Your email address
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = "<html><body>";
    $message .= "<h2 style='color:#006699;'>New message from your website contact form</h2>";
    $message .= "<table>";
    $message .= "<tr><td style='width:120px;'><strong>Name:</strong></td><td>" . $name . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong></td><td>" . $email . "</td></tr>";
    $message .= "<tr><td><strong>Subject:</strong></td><td>" . $subject . "</td></tr>";
    $message .= "<tr><td><strong>Message:</strong></td><td>" . $message . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
    $send = mail($to, $subject, $message, $headers);
    if($send) {
        echo '<div style="color:#008000;">Thank you for contacting us. We will get back to you soon.</div>';
    }
    else {
        echo '<div style="color:#ff0000;">Sorry, something went wrong. Please try again later.</div>';
    }
}
?>
