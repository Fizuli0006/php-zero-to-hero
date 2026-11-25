<?php

declare(strict_types=1);

$name = trim((string) ($_POST['name'] ?? ''));
if ($name === '') {
    echo 'Name is required.';
} else {
    echo 'Hello, ' . htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
