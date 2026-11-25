<?php
// Example expects DB_DSN, DB_USER, and DB_PASS environment variables.
declare(strict_types=1);

$pdo = new PDO(
    getenv('DB_DSN') ?: 'mysql:host=127.0.0.1;dbname=course;charset=utf8mb4',
    getenv('DB_USER') ?: 'root',
    getenv('DB_PASS') ?: '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$stmt = $pdo->prepare('SELECT id, full_name FROM students WHERE id = :id');
$stmt->execute(['id' => 1]);
var_dump($stmt->fetch(PDO::FETCH_ASSOC));
