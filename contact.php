<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "alinhtet134@gmail.com"; // Replace with your email address

    // Set email subject
    $subject = "New Contact Form Submission";

    // Compose email message
    $emailMessage = "Name: $name\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Mobile Number: $mobile\n";
    $emailMessage .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    $mailResult = mail($to, $subject, $emailMessage, $headers);

    // Check if the email was sent successfully
    if ($mailResult) {
        echo "Thank you for contacting me. I will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>

