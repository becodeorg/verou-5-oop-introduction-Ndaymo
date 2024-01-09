<?php

declare(strict_types=1);
require 'exercise2.php';


$cola = new Beverage('black', 2);
$cola->getInfo();
echo '<br>';
$duvel = new Beer('Light', 3.5, 'Duvel', 8.5);
$duvel->getAlcoholPercentage();
echo '<br>';
$duvel->getInfo();
echo '<br>';
echo 'The color of Duvel is ' . $duvel->color;
echo '<br>';
echo 'The alcohol percentage of Duvel is ' . $duvel->alcoholPercentage;
echo '<br>';
//This will result into the error: $cola->getAlcoholPercentage();

echo "The new color of Duvel is {$duvel->color}";
