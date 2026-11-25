<?php

declare(strict_types=1);

$quantity = 3;
$unitPrice = 4.5;
$total = $quantity * $unitPrice;
$displayName = $_GET['name'] ?? 'Guest';

echo $total . PHP_EOL;
echo $displayName;
