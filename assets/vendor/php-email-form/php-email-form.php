<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace 'your-email@example.com' with your real receiving email address
    $receiving_email_address = 'adityahendre27@gmail.com';

    // Get form data
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create email headers
    $headers = "From: $from_name <$from_email>\r\nReply-To: $from_email\r\n";

    // Compose the email message
    $email_message = "Name: $from_name\n";
    $email_message .= "Email: $from_email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Send the email
    if (mail($receiving_email_address, $subject, $email_message, $headers)) {
        echo "Success! Your message has been sent.";
    } else {
        echo "Error! Unable to send the message. Please try again later.";
    }
} else {
    // Redirect to the form page if accessed directly
    header("Location: your-form-page.php");
    exit();
}
?>
