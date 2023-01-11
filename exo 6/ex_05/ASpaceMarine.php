<?php

include_once("IUnit.php");

abstract class ASpaceMarine implements IUnit{
    protected $name;
    protected $hp;
    protected $ap;
    protected $weapon;
    protected $dead;
    protected $closetotarget;
    protected $target;


    public function __construct($name) {
        $this->name=$name;
        $this->hp=0;
        $this->ap=0;
        $this->weapon=false;
        // $this->setweapon = false;
        $this->target= NULL;
        $this->closetotarget = false;
        $this->dead= false;

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
      public function getWeapon(){
        return $this->weapon;
      }

      public function setWeapon($par){
        if (is_bool($par)){
            $this->weapon = $par;
        } 
        }

      public function getDead(){
        return $this->dead;
      }
    
      public function setDead($par){
        if (is_bool($par)){
            $this->dead = $par;
        } 
        }

    public function isCloseToTarget(){
        return $this->closetotarget;
      }
      
    public function setCloseToTarget($par){
        if (is_bool($par)){
        $this->closetotarget = $par;
          }
      }

public function equip($par){
  if(!($par instanceof AWeapon)){
    throw new Exception ("Error in ASpaceMarine. Parameter is not an AWeapon.");
} if ($this->dead){
  return false;
} else {
     if ($this->getWeapon() && $par != $this){
  echo $this->name . " has been equipped with a ". $par->weapon . "."."\n";
  $this->setWeapon(true);
  $this->weapon = $par;
} else {
  echo $this->name . " has already been taken by a SpaceMarine ". $par->weapon . "."."\n";
}
}
}

public function attack($par){
  if(!($par instanceof IUnit)){
      throw new Exception ("Error in ASpaceMarine. Parameter is not an IUnit.");
  }
  if ($this->dead){
      return false;
  } else {
      if (!($this->getWeapon() && $this->weapon == $par && $par != $this)){
      echo $this->name . "Hey, this is crazy. I'm not going to fight this empty handed."."\n";
      }
      if ($this->weapon != $par && $par != $this && $this->target) { 
        echo $this->name . ": I'm too far away from " . $par->name . "."."\n";
      }
      elseif ($this->isCloseToTarget() && $this->target == $par && $par != $this){
          if ($this->ap >= $this->apcost) {
          $this->ap = $this->ap - $this->apcost;
          $par->attack($this->attack);
          $par->receiveDamage($this->damage);
          }
          else {
          echo $this->name . " attacks" . $par->name . " with a ". $par->weapon . "."."\n";
          }
      }
      }
}

public function receiveDamage($par){
  if ($this->hp - $par >0){
     $this->hp = $this->hp - $par; 
  } else {
      $this->hp = 0;
      $this->setDead(true);
  }
  }

public function moveCloseTo($par){
  if (!($par instanceof IUnit)){
      throw new Exception("Error in ASpaceMarine. Parameter is not an IUnit.");
  } 
  if ($this->dead){
      return false;
  } else {
      if (!$this->isCloseToTarget() && $par != $this){
      echo $this->name . " is moving closer to ". $par->name . "."."\n";
      $this->setCloseToTarget(true);
      $this->target = $par;
}}}


public function recoverAP(){
  if ($this->isDead){
      return false;
      }
  else{
      if ($this->ap + 9 <= 50) {
          $this->ap = $this->ap + 9;
      } else {
          $this->ap=50;
      }
      }
  }

}
