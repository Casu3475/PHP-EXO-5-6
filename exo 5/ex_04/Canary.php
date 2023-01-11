<?php

include_once ("Animal.php");

class Canary extends Animal{
private $eggs;

public function __construct($name){
    $this->eggs=0;
    Animal :: __construct($name,2,2);
    echo "Yellow and smart? Here I am!\n";

}

public function layEgg(){
    $this->eggs+=1;
}

public function getEggsCount(){
    return $this->eggs;
}
}

// $willy = new Shark("Willy"); // Yes , Willy is a shark here!
// $willy->status();
// $titi = new Canary("Titi");
// $willy->smellBlood(true);
// $willy->status();
// $titi->layEgg();
// echo $titi->getEggsCount() . "\n";

