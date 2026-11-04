<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "abrham_portfolio";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed. Please check connect.php and database.sql.");
}

$conn->set_charset("utf8mb4");
