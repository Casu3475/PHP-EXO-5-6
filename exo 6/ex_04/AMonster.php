<?php

include_once("IUnit.php");
// enlever abstract quand on teste
abstract class AMonster implements IUnit{
    protected $name;
    protected $hp;
    protected $ap;
    protected $damage;
    protected $apcost;
    protected $closetotarget;
    protected $target;
    protected $dead;


public function __construct($name) {
    $this->name=$name;
    $this->hp=0;
    $this->ap=0;
    $this->damage=0;
    $this->apcost=0;
    $this->closetotarget = false;
    $this->dead= false;
    $this->target= NULL;
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
public function getDamage(){
        return $this->damage;
      }

public function isCloseToTarget(){
    return $this->closetotarget;
}

public function setCloseToTarget($par){
    if (is_bool($par)){
    $this->closetotarget = $par;
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
    
public function equip($par){
    if ($this->dead){
        return false;
    } else {
   
    }
    echo "Monsters are proud and fight with their own bodies."."\n";
    }

public function attack($par){
    if(!($par instanceof IUnit)){
        throw new Exception ("Error in AMonster. Parameter is not an IUnit.");
    }
    if ($this->dead){
        return false;
    } else {
        if ($this->isCloseToTarget() && $this->target == $par && $par != $this){
            if ($this->ap >= $this->apcost) {
            $this->ap = $this->ap - $this->apcost;
            echo $this->name . " attacks " . $par->name . "."."\n";
            $par->receiveDamage($this->damage);
        }
        } elseif ($this->target != $par && $par != $this) { 
        echo $this->name . ": I'm too far away from " . $par->name . "."."\n";
        }
    }
  }

        // if ($this->dead){
        // echo "$this->name is dead";
        //     return False;
        // }
        // elseif ($this->close_to_attack){            // check réserves pour attaquer
        //     if($this->ap > $this->apcost){
        //        $this->ap -= $this->apcost;
        //        echo "$this->name attacks ".$target_name->getName().".\n";
        //        $target_name->receiveDamage($this->damage);
        //     }
    //     else {
    //     echo "$this->name: I'm too far away from ".$target_name->getName().".\n";  
    // }

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
        throw new Exception("Error in AMonster. Parameter is not an IUnit.");
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
        if ($this->ap + 7 <= 50) {
            $this->ap = $this->ap + 7;
        } else {
            $this->ap=50;
        }
        }
    }
}




// class Ares extends AMonster{}

// $mons = new Ares("Bill");
// $mons2 = new Ares("Ana");
// $mons3 = new Ares("Carlos");

// $mons->attack($mons2):
// $mons->moveCloseTo($mons2):
// $mons->moveCloseTo($mons3):

// public function receiveDamage($receiveDamage);
// public function moveCloseTo($moveCloseTo);
// public function recoverAP();

// $monstre1=new AMonster("papy");
// $monstre2=new AMonster("mamie");
// $monstre1->moveCloseTo($monstre2);
// $monstre1->attack($monstre2);
// echo $monstre2->getHp()."\n";
// $monstre1->recoverAP();
// echo $monstre2->getAp()."\n";