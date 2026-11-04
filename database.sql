CREATE DATABASE IF NOT EXISTS abrham_portfolio
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE abrham_portfolio;

CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender_name VARCHAR(100) NOT NULL,
    sender_email VARCHAR(150) NOT NULL,
    subject VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
