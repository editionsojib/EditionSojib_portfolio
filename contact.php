<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <h1>Contact Us</h1>
    <form action="contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required placeholder="Enter Name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Enter Email">

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required placeholder="Enter Message"></textarea>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php 


require 'vendor/autoload.php';  // This includes PHPMailer and other libraries

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']))

{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];



   

$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'editionsojib@gmail.com';
    $mail->Password = 'jsncgimyrpagjeug';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('editionsojib@gmail.com', 'Contact');
    $mail->addAddress('editionsojib@gmail.com', 'Sojib');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Portfolio Contact Form';
    $mail->Body    = "Sender Name = $name <br> Sender Email = $email <br> Message = <br>$message";
    
    $mail->send();
    echo "<div class='success'>Message has been sent!</div>";
} catch (Exception $e) {
    echo "<div class='alert'>Message could not be sent!</div>";
}
    
}

?>

