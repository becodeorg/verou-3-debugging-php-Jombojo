<?php

declare(strict_types=1);

class Beverage
{
    private string $color;
    private float $price;
    private string $temp;
    private string $name;
    private float $alcoholPercentage;

    private function __construct(string $color, float $price, string $temp, string $name, float $alcoholPercentage)
    {
        $this->color = ($color);
        $this->price = ($price);
        $this->temp = ($temp);
        $this->name = ucfirst($name);
        $this->alcoholPercentage = ($alcoholPercentage);
    }
    function getAlcoholPercentage()
    {
        return $this->alcoholpercentage;
    }
}
$duvel = new Beverage("Blond", 3.5, "cold", "duvel", 8.5);

echo $duvel->getAlcoholPercentage() ." %";
echo nl2br ("\n");
var_dump ($duvel->getAlcoholPercentage() . " %");
