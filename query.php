<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $to = "ashishkumawat022@gmail.com";
    $subject = "Customer Enquiry";

    $message .= "Email: $email\n";

    $message .= "Message:\n$msg";


    $headers = "From: $email <$email>";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thankyou.html");
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
} else {
    header("Location: query.php");
    exit;
}
?>