<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the email address
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Recipient email
        $to = "editionsojib@gmail.com";  // Replace with your actual email address
        
        // Subject of the email
        $subject = "New Newsletter Subscription";
        
        // Message
        $message = "You have a new subscriber: " . $email;
        
        // Headers
        $headers = "From: editionsojib@gmail.com\r\n";  // Replace with your domain email address
        $headers .= "Reply-To: " . $email . "\r\n";
        
        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Thank you for subscribing!";
        } else {
            echo "There was an error sending your subscription. Please try again.";
        }
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
} else {
    echo "Invalid request method.";
}
?>
