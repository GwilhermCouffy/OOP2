<?php

require_once 'Bicycle.php';
$bike = new Bicycle("blue");

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');


$tornado->dump();


// test car 

require_once 'Car.php';
$homerSedan = new Car( "pink", 5, "Diesel");

$homerSedan->start();
$homerSedan-> forward();
$homerSedan-> brake();
var_dump($homerSedan);

$plowCar = new Car("red", 3, "Sans-Plomb");
$plowCar->Start();
$plowCar-> forward();
var_dump($plowCar);