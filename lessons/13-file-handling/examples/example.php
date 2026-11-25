<?php

declare(strict_types=1);

$path = __DIR__ . '/notes.txt';
if (file_put_contents($path, "PHP file handling\n") === false) {
    throw new RuntimeException('Could not write file.');
}

echo file_get_contents($path);
