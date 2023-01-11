<?php

include_once("AWeapon.php");

class PowerFist extends AWeapon{

    public function __construct()
{
    $this->melee=true;
    AWeapon::__construct("Power Fist",8,50);
    // $this->name="PlasmaRifle";
    // $this->apcost=5;
    // $this->damage=21;
    // $this->melee=false;
}

public function attack(){
    echo "SBAM\n";
    }
}

// $gun= new PowerFist();
// $gun->attack();

