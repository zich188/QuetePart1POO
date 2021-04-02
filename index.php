<?php

require_once 'Bicycle.php';
require_once 'Car.php';

//creation d'un nouvel objet mercedes de la class Car.
$mercedes = new Car("black", 4, "essence");


$mercedes->setEnergyLevel(20);
$mercedes->setCurrentSpeed(12);

echo "<br>" .$mercedes->start() .'<br> Vitesse de la voiture : ' . $mercedes->getCurrentSpeed() . ' km/h' . '<br>';
echo $mercedes->brake();
echo '<br> Vitesse de la voiture : ' . $mercedes->getCurrentSpeed() . ' km/h' . '<br>';
echo $mercedes->brake();


echo "<br/>";


//Creation d'un nouvel objet bike de la class Bicycle.
$bike = new Bicycle("red", 10);

echo "<br/>" .$bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();







