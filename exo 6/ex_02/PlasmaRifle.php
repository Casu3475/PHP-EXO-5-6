<?php

include_once("AWeapon.php");

class PlasmaRifle extends AWeapon{

public function __construct(){
    AWeapon::__construct("Plasma Rifle", 5, 21);
//     $this->name="PlasmaRifle";
//     $this->apcost=5;
//     $this->damage=21;
//     $this->melee=false;
// }
}
public function attack(){
    echo "PIOU\n";
    }
}


// $fille = new PlasmaRifle();
// $fille->attack();
// echo $fille->melee;