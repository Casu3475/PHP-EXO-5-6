<?php

abstract class AWeapon {
  protected $name;
  protected $apcost;
  protected $damage;
  protected $melee=false;
    
  public function __construct($name,$apcost,$damage) {

    if (!is_string($name) || !is_integer($apcost) || !is_integer($damage)){
    
        throw new Exception("Error in AWeapon constructor. Bad parameters.");
}

$this->name = $name;
$this->apcost = $apcost;
$this->damage = $damage;
}

  public function getName(){
    return $this->name;
  }
    
  public function getApcost(){
    return $this->apcost;
  }
  public function getDamage(){
    return $this->damage;
  }
  public function isMelee(){
    return $this->melee;
  }
    
//   public function setSize($size)
//   {
//      $this->size=$size;
//   }

abstract public function attack();
}

// $boum = new AWeapon ("kk",1,0);
