<?php
declare(strict_types=1);

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$name = trim((string) ($_GET['name'] ?? 'PHP learner'));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Zero to Hero</title>
</head>
<body>
    <h1>Hello, <?= escape($name) ?>!</h1>
    <p>Your first small PHP web project is running.</p>
</body>
</html>
