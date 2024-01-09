<?php

declare(strict_types=1);


require 'Beverage.php';

class Beer extends Beverage
{
    private $name;
    private $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        echo "The acohol percentage is $this->alcoholPercentage";

    }

    public function beerInfo()
    {
        echo "Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a $this->color color.";
    }
    public function getAlcoholPercentageValue()
    {
        return $this->alcoholPercentage;
    }
}