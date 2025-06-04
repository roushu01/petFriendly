<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "roushnikumari439@gmail.com";
    $subject = "New Volunteer Submission";
    $body = "Full Name: " . $_POST["fullName"] . "\n" .
            "City: " . $_POST["city"] . "\n" .
            "Role: " . $_POST["role"] . "\n" .
            "Message: " . $_POST["message"];
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mail sent successfully!";
    } else {
        echo "Mail sending failed.";
    }
}
?>
