<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    
    $to = "your_email@example.com";  // 🔁 Replace with your email
    $subject = "New Newsletter Subscription";
    $body = "New user subscribed to the newsletter:\n\nEmail: $email";
    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for subscribing!";
    } else {
        echo "Subscription failed. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
