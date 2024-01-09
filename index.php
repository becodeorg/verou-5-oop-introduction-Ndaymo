<?php

declare(strict_types=1);
require 'exercise2.php';

$cola = new Beverage('black', 2);
$cola->getInfo();
echo '<br>';
$Duvel = new Beer('Blond', 3.5, 'Duvel', 8.5);
$Duvel->getAlcoholPercentage();
echo '<br>';
$Duvel->getInfo();
echo '<br>';
$Duvel->getInfo();
echo '<br>';
echo 'The color of Duvel is ' . $Duvel->color;
echo '<br>';
echo 'The alcohol percentage of Duvel is ' . $Duvel->alcoholPercentage;
echo '<br>';

//This will result into the error $cola->getAlcoholPercentage();
