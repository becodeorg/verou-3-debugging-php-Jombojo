<?php


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require './beverage.php';
class Beer extends Beverage
{
    public string $name;
    public float $alcoholpercentage;
    
    public function __construct(string $color, float $price, string $temp, string $name, float $alcoholpercentage)
    {
        parent::__construct($color, $price, $temp);
        $this->name = ucfirst($name);
        $this->alcoholpercentage = ($alcoholpercentage);
    }

    public function getAlcoholPercentage()
    {
        return $this->alcoholpercentage;
    }
}
$duvel = new Beer("Blond", 3.5, "cold", "duvel", 8.5);

echo $duvel->getAlcoholPercentage() ." %";
echo nl2br ("\n");
var_dump ($duvel->getAlcoholPercentage() . " %");