<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "varaprasadchilumula@gmail.com"; // Replace with your Gmail
    $subject = "New Contact Form Message";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        // Redirect back with a success message
        header("Location: index.html?success=1");
        exit();
    } else {
        // Redirect back with an error message
        header("Location: index.html?error=1");
        exit();
    }
}
?>
