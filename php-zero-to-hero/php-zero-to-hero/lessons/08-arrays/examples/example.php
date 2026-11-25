<?php

declare(strict_types=1);

$student = [
    'name' => 'Murad',
    'scores' => [85, 90, 78],
];

$average = array_sum($student['scores']) / count($student['scores']);
echo $student['name'] . ': ' . $average;
