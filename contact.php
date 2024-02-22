<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $to = "developer2.jgservices@gmail.com";
    $subject = "Customer Enquiry";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Message:\n$msg";


    $headers = "From: $name <$email>";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thankyou.html");
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
} else {
    header("Location: contact.php");
    exit;
}
?>