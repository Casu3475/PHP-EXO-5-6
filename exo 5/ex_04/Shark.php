<?php

include_once ("Animal.php");

class Shark extends Animal{
private $frenzy;

public function __construct($name, $frenzy=false){

$this->frenzy=$frenzy;
Animal :: __construct($name,0,1);
echo "A KILLER IS BORN!\n";
}

public function smellBlood($bool){
    if (is_bool($bool)){
    $this->frenzy=$bool;
}
}

public function status(){
    if($this->frenzy){
        echo "$this->name is smelling blood and wants to kill.\n";
    }

    else{
        echo "$this->name is swimming peacefully.\n";
    }
}
}

// $willy = new Shark("Willy"); // Yes , Willy is a shark here!
// $willy->status();
// $titi = new Canary("Titi");
// $willy->smellBlood(true);
// $willy->status();
// $titi->layEgg();
// echo $titi->getEggsCount() . "\n";
