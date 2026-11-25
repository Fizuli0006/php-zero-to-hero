<?php

declare(strict_types=1);

$score = 82;
$grade = match (true) {
    $score >= 90 => 'A',
    $score >= 80 => 'B',
    $score >= 70 => 'C',
    default => 'Needs improvement',
};

echo $grade;
