<?php
include("CarClass.php");
include("WheelsClass.php");


//Create car 1
$car1 = new CarClass();

//Set car 1 wheels' state
$wheel1 = new WheelsClass();
$wheel1->setState(false);

$wheel2 = new WheelsClass();
$wheel2->setState(false);

$wheel3 = new WheelsClass();
$wheel3->setState(false);

$wheel4 = new WheelsClass();
$wheel4->setState(false);

//Put wheels in an array
$wheels = [
    $wheel1,
    $wheel2,
    $wheel3,
    $wheel4
];

//Set car 1
$car1->constructCar(1, true, "Porsche", $wheels);

//Car 1 is broken, repair
$car1->carRepair();

//Tire 4 is flat
$wheel4->setState(true);

//Update wheel 4 in array
$wheels[3] = $wheel4;

//Update wheels' list
$car1->setWheels($wheels);

//Get wheels array
$car1_wheels = $car1->getWheels();


//Test each tire, fix if broken
for ($i = 0; $i < 4; $i++){
    if($car1_wheels[$i]->getState() == true){
        $car1_wheels[$i]->setState(false);
    }
}
//other way to do it
/*
$car1->setBrand("Porsche");
$car1->setBroken(true);
$car1->setReference(1);
*/

//Car is broken
$car1->setBroken(true);

//Repair
$car1->carRepair();

//Create car 2
$car2 = new CarClass();

//Put wheels in an array (took car 1 wheels to make it quick)
$wheels2 = [
    $wheel1,
    $wheel2,
    $wheel3,
    $wheel4
];

//Set car 2
$car2->constructCar(1, true, "Fiat", $wheels2);


//Cars in parking lot
$parking = [$car1, $car2];
$myPorsche = null;


//Riding the porsche
foreach ($parking as $p) {
    if ($p->getBrand() == "Porsche")
        $myPorsche = $p;
}

//other way to display car info
/*echo $myPorsche->getBrand();
echo $myPorsche->getBroken();
echo $myPorsche->getReference();*/

//Display Porsche info (reference, state, brand)
$myPorsche->displayCarInfo();

