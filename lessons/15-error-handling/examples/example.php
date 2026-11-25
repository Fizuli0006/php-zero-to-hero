<?php

declare(strict_types=1);

function divide(float $a, float $b): float
{
    if ($b === 0.0) {
        throw new InvalidArgumentException('Divisor cannot be zero.');
    }
    return $a / $b;
}

try {
    echo divide(10, 2);
} catch (InvalidArgumentException $exception) {
    error_log($exception->getMessage());
    echo 'Invalid calculation.';
}
