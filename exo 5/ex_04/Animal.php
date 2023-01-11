<?php

class Animal{
 const MAMMAL = 0;
 const FISH = 1;
 const BIRD = 2;
 protected $name;
 protected $legs;
 protected $type; 
 private static $number_Animals=0;
 private static $number_Mammals=0;
 private static $number_Fishs=0;
 private static $number_Birds=0;

 private $array_type=["mammal", "fish", "bird"];

 public function __construct($name, $legs, $type){

 $this->name = $name; 
 $this->legs= $legs;
 $this->type = $type;
 echo "My name is $this->name and I am a ".$this->array_type[$this->type]."!\n";
 self::$number_Animals+=1;
 return self::animalIncrement($type);

 }

 private function animalIncrement($type){
    switch($type){
        case 0:
        self::$number_Mammals+=1;
        break;
        case 1:
        self::$number_Fishs+=1;
        break;
        case 2:
        self::$number_Birds+=1;
        break;
        default:
        return; 
        // break;
    }
 }

 private function animalDecrement($type){
    switch($type){
        case 0:
        self::$number_Mammals-=1;
        break;
        case 1:
        self::$number_Fishs-=1;
        break;
        case 2:
        self::$number_Birds-=1;
        break;
        // default:
        // return; 
        // break;
    }
 }

static function getNumberOfAnimalsAlive(){
    // return self::$number_Animals;
    switch (self::$number_Animals){
        case 0:
        echo "There are currently ".self::$number_Animals." animals alive in our world.\n";
        return self::$number_Animals;
        case 1:
        echo "There is currently ".self::$number_Animals." animal alive in our world.\n";
        return self::$number_Animals;
        default:
        echo "There are currently ".self::$number_Animals." animals alive in our world.\n";
        return self::$number_Animals;
    }
}

static function getNumberOfMammals(){

    switch (self::$number_Mammals){
        case 0:
        echo "There are currently ".self::$number_Mammals." mammals alive in our world.\n";
        return self::$number_Mammals;
        case 1:
        echo "There is currently ".self::$number_Mammals." mammal alive in our world.\n";
        return self::$number_Mammals;
        default:
        echo "There are currently ".self::$number_Mammals." mammals alive in our world.\n";
        return self::$number_Mammals;

    }
}

static function getNumberOfFishes(){

    switch (self::$number_Fishs){
        case 0:
        echo "There are currently ".self::$number_Fishs." fish alive in our world.\n";
        return self::$number_Fishs;
        case 1:
        echo "There is currently ".self::$number_Fishs." fish alive in our world.\n";
        return self::$number_Fishs;
        default:
        echo "There are currently ".self::$number_Fishs." fishes alive in our world.\n";
        return self::$number_Fishs;

    }
}

static function getNumberOfBirds(){

    switch (self::$number_Birds){
        case 0:
        echo "There are currently ".self::$number_Birds." birds alive in our world.\n";
        return self::$number_Birds;
        case 1:
        echo "There is currently ".self::$number_Birds." bird alive in our world.\n";
        return self::$number_Birds;
        default:
        echo "There are currently ".self::$number_Birds." birds alive in our world.\n";
        return self::$number_Birds;

    }
}

public function setName($name){
    $this->name=$name;
}

public function getName()
{
return $this->name;
}

public function getLegs()
{
return $this->legs;
}

public function getType()
{
return $this->array_type[$this->type];
}

public function __destruct(){
self::$number_Animals-=1;
self::animalDecrement($this->type);
}

}

// public function getNumberOfAnimalsAlive()
// {
// return $this->getNumberOfAnimalsAlive;
// }


// public function setType($type){
//     $this->type=$type;
// }


// $isidore = new Animal("Isidore", 4, Animal::MAMMAL);
// echo $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a " .$isidore->getType() . ".\n";
// $isidore->setName("Pepito");
// $isidore->getName();
// $simon = new Animal("Simon", 4, Animal::MAMMAL);
// $nathan = new Animal("Nathan", 2, Animal::BIRD);
// $ariane = new Animal("Ariane", 0, Animal::FISH);
//  echo Animal::getNumberOfAnimalsAlive()."\n";
// Animal::getNumberOfMammals()."\n";
// Animal::getNumberOfFishes()."\n";
// Animal::getNumberOfBirds()."\n";
// unset($simon);

