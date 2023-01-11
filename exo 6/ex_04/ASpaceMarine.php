<?php

include_once("IUnit.php");

abstract class ASpaceMarine {
    protected $name;
    protected $hp=0;
    protected $ap=0;
    // protected $damage=0;
    // protected $apcost=0;

    public function __construct($name) {
        $this->name=$name;

    }
        
      public function getName(){
        return $this->name;
      }
        
      public function getHp(){
        return $this->hp;
      }
      public function getAp(){
        return $this->ap;
      }

public function equip($par){}
public function attack($par){}
public function receiveDamage($par){}
public function moveCloseTo($par){}
public function recoverAP(){}


    }
