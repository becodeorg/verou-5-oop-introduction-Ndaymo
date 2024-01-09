<?php

declare(strict_types=1);


require 'Beverage.php';

class Beer extends Beverage
{
    public $name;
    public $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    function getAlcoholPercentage()
    {
        echo "The acohol percentage is $this->alcoholPercentage";

    }

}