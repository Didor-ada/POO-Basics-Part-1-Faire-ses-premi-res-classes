<?php

// instancier un objet de cette classe
// déclarer une classe : class
//comment accéder à une méthode depuis l'extérieur de la classe ? : $objet->methodName( )
// comment appeler une méthode depuis une méthode de cette classe ? : $this->methodName()
// la méthode est une fonction, on la trouvera avec des parenthèses avec paramètres
// Comment accéder ) une propriété depuis l'extérieur de la classe ? impossile car propriété est private
// $this : représente l'objet sur lequel est appelé la méthode. Va être remplacé par un objet, comme une variable qui prendra à chaque fois la valeur de l'objet sur lequel on appelle la méthode ex: $chat1-> uneMethode; $this prendra la valeur de $chat1
// private pour les variables et public pour les functions

require_once 'Bicycle.php'; // le localhost affiche une error, class a besoin d'un require de PHP pour récupérer le fichier de la classe
$bike = new Bicycle('red'); //$bike est alors ce que l'on appelle une instance de Bicycle© construct

$bike->setCurrentSpeed(5);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>'; //get prend de private et rend public
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');
var_dump($rockrider);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');
var_dump($tornado);

$tornado->forward();

var_dump($bike);

require_once 'car.php';
$car = new Car('green', 4, 'diesel');
var_dump($car);

echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> La voiture stop à : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';


