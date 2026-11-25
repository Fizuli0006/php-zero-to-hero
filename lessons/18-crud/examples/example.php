<?php
// Minimal PDO insert example.
declare(strict_types=1);

$pdo = new PDO(
    'mysql:host=127.0.0.1;dbname=course;charset=utf8mb4',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$stmt = $pdo->prepare('INSERT INTO students (full_name, email) VALUES (:name, :email)');
$stmt->execute(['name' => 'Nigar Aliyeva', 'email' => 'nigar@example.test']);
echo 'Created student ID: ' . $pdo->lastInsertId();
