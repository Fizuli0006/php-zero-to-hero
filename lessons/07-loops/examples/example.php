<?php

declare(strict_types=1);

$topics = ['variables', 'conditions', 'loops'];
foreach ($topics as $index => $topic) {
    echo ($index + 1) . '. ' . $topic . PHP_EOL;
}
