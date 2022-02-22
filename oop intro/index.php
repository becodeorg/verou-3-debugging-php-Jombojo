<?php

declare(strict_types=1);

class Beverage 
{
    public string $name;
    public string $color;
    public string $price;
    public string $temp = "cold";

    public function __construct($color, $temp = "cold", $name, $price)
    {
        $this-> name = "Cola";
        $this-> color = "black";
        $this-> price = "2€";
    }
}
function getInfo($drink)
{
    echo "This beverage is " . $drink->temp . " and " . $drink->color;
}
$cola = new Beverage("black", "cold", 2, "cola" );
getInfo($cola);

echo nl2br ("\n");
echo $cola->temp;