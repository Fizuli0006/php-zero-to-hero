<?php
// Safe HTML output example.
declare(strict_types=1);

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$userInput = (string) ($_GET['name'] ?? 'Guest');
echo '<p>Hello, ' . e($userInput) . '</p>';
