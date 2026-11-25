<?php
// Password hashing demonstration. Do not print or store plaintext passwords.
declare(strict_types=1);

$password = 'change-this-example-password';
$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($password, $hash)) {
    echo 'Password verified.';
}
