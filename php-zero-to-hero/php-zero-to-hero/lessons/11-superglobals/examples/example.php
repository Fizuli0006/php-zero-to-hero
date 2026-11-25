<?php

declare(strict_types=1);

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN';
$query = filter_input(INPUT_GET, 'q', FILTER_UNSAFE_RAW) ?? '';

echo $requestMethod . PHP_EOL;
echo htmlspecialchars((string) $query, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
