<?php
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php#contact");
    exit;
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$subject = trim($_POST["subject"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $subject === "" || $message === "") {
    exit("Please go back and complete every field with a valid email address.");
}

$sql = "INSERT INTO messages (sender_name, sender_email, subject, message)
        VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    exit("Could not prepare the message. Please try again later.");
}

$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute()) {
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Message received</title><link rel="stylesheet" href="assets/style.css"></head><body><main class="section section-wrap"><div class="section-kicker">MESSAGE RECEIVED</div><h1 style="font-family:Manrope,sans-serif">Thank you for reaching out.</h1><p>Your message has been saved successfully.</p><a class="btn btn-dark" href="index.php">Back to portfolio ↗</a></main></body></html>';
} else {
    echo "Sorry, your message could not be saved. Please try again.";
}

$stmt->close();
$conn->close();
