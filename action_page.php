<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];
    
    $to = "1970sagm@gmail.com";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    // Redirect back to your webpage after sending the email.
    header("Location: your_thankyou_page.html");
    exit();
}
?>
