<?php

require_once __DIR__.'/lib/Ship.php';

// annotation to notify phpStorm that the $someShip parameter passed is a Ship object.
/**
 * @param Ship $someShip
 */
 function printShipSummary($someShip)
 {
     echo 'Ship name: ' . $someShip->getName();
     echo '<hr>';
     $someShip->sayHello();
     echo '<hr>';
     echo $someShip->getName();
     echo '<hr>';
     echo $someShip->getWeaponPower();
     echo '<hr>';
     echo $someShip->getNameAndSpecs(false);
     echo '<hr>';
     echo $someShip->getNameAndSpecs(true);
 }



$myShip = new Ship();
$myShip->setName('Jedi Starship');
$myShip->getWeaponPower(10);


printShipSummary($myShip);

$otherShip = new Ship();
$otherShip->setName('Imperial Shuttle');
$otherShip->setWeaponPower(5);
$otherShip->setStrength(50);

echo '<hr>';
printShipSummary($otherShip);
echo '<hr>';
if ($myShip->doesGivenShipHaveMoreStrength($otherShip)){
    echo $otherShip->getName().' has more strength.';
}else{
    echo $myShip->getName().' has more strength.';

}