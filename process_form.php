<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient_email = "worldvirtual917@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission from Website";
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    // $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    // $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";
    
    // Send the email
    $success = mail($recipient_email, $subject, $email_body);
    
    if ($success) {
        echo "Thank you for contacting us!";
    } else {
        echo "Oops! Something went wrong.";
    }
} else {
    // Redirect or display an error message if accessed directly without POST data.
    echo "Invalid request.";
}
?>
