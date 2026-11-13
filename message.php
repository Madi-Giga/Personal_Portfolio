<?php
require_once "connect.php";

header("Content-Type: application/json; charset=UTF-8");

function respond(int $status, bool $success, string $message): void {
    http_response_code($status);
    echo json_encode(
        ["success" => $success, "message" => $message],
        JSON_UNESCAPED_UNICODE
    );
    exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    respond(405, false, "This form only accepts submitted messages.");
}

// Quietly reject automated submissions caught by the hidden honeypot field.
if (!empty($_POST["website"])) {
    respond(200, true, "Thank you. Your message has been received.");
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$subject = trim($_POST["subject"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $email === "" || $subject === "" || $message === "") {
    respond(422, false, "Please complete all fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(422, false, "Please enter a valid email address.");
}

if (mb_strlen($name) > 100 || mb_strlen($email) > 150 ||
    mb_strlen($subject) > 150 || mb_strlen($message) > 3000) {
    respond(422, false, "One or more fields are too long.");
}

$sql = "INSERT INTO messages (sender_name, sender_email, subject, message)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    respond(500, false, "The message service is temporarily unavailable.");
}

$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute()) {
    $stmt->close();
    $conn->close();
    respond(200, true, "Thanks! Your message has been sent successfully.");
}

$stmt->close();
$conn->close();
respond(500, false, "Your message could not be saved. Please try again.");
