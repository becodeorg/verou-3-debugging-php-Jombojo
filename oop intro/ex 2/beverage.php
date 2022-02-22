<?php

declare(strict_types=1);

class Beverage
{
    public string $color;
    public float $price;
    public string $temp;

    public function __construct(string $color, float $price, string $temp)
    {
        $this->color = ($color);
        $this->price = ($price);
        $this->temp = ($temp);
    }

}