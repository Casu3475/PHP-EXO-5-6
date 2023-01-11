<?php

class Animal{
 const MAMMAL = 0;
 const FISH = 1;
 const BIRD = 2;
 protected $name;
 protected $legs;

 protected $type; 
 private $array_type=["mammal", "fish", "bird"];
 public function __construct($name, $legs, $type){
 $this->name = $name; 
 $this->legs= $legs;
 $this->type = $type;
 echo "My name is $this->name and I am a ".$this->array_type[$this->type]."!\n";

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

// public function setType($type){
//     $this->type=$type;
// }

}

// $isidore = new Animal("Isidore", 4, Animal::MAMMAL);
// echo $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a " .$isidore->getType() . ".\n";
// $isidore->setName("Pepito");
// $isidore->getName();
