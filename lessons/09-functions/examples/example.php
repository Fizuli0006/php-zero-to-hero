<?php

declare(strict_types=1);

function calculateTotal(float $price, int $quantity = 1): float
{
    return $price * $quantity;
}

echo calculateTotal(5.5, 3);
