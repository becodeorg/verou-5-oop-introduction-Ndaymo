<?php
declare(strict_type=1);
class Beverage
{
    public $color;
    public $price;
    public $temperature;

    public function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
    }
    public function getInfo()
    {
        echo "This beverage is $this->color and $this->temperature";
    }

}