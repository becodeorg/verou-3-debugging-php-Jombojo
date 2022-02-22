<?php

declare(strict_types=1);

class Person
{
    public string $name;
    public int $sweethearts;

    public function __construct(string $name, int $sweethearts)
    {
        $this->name = ucfirst($name);
        $this->sweethearts = $sweethearts;
    }

    public function talk() : string
    {
        return 'one thing';
    }
}