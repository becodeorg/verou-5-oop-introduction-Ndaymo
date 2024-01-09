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
