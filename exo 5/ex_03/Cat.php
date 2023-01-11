<?php

include_once("Animal.php");

class Cat extends Animal{

private $color;

public function __construct($name,$color="grey"){
    $this->color=$color;
    Animal :: __construct($name,4,0);    
    echo $name .": MEEEOOWWWW\n";
}

public function getColor(){
    return $this->color;
}

public function setColor($color="grey"){
    $this->color = $color;
}

public function meow(){
    echo "$this->name the $this->color kitty is meowing.\n";

}
}

// $isidore = new Cat("Isidore", "orange");
// echo $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a " .
// $isidore->getType() . ".\n";
// $isidore->meow();

