<?php

declare(strict_types=1);

session_set_cookie_params([
    'httponly' => true,
    'secure' => !empty($_SERVER['HTTPS']),
    'samesite' => 'Lax',
]);
session_start();

$_SESSION['visits'] = ($_SESSION['visits'] ?? 0) + 1;
echo 'Visits: ' . (int) $_SESSION['visits'];
