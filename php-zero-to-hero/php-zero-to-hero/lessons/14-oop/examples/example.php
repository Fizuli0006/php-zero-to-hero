<?php

declare(strict_types=1);

final class User
{
    public function __construct(
        public readonly string $name,
    ) {}

    public function greeting(): string
    {
        return "Hello, {$this->name}";
    }
}

echo (new User('Aylin'))->greeting();
