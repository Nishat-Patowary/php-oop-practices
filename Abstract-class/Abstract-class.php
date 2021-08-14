<?php

use shanto as GlobalShanto;
use shihab as GlobalShihab;

abstract class name{
    public $names;
    abstract protected function num($a,$b);
}

class named extends name{
    public function num($a,$b){
        echo $a + $b;
    }
}

$mix= new named();
$mix->num(50,80);

//--------------------------first-------------------------------//


abstract class first{
    public $name;
    abstract protected function ones($x,$y);
}

class second extends first{
    public function ones($x,$y){
        echo $x + $y;
    }
}

$mixer=new second();
$mixer->ones(100,90);

//--------------------------second-------------------------------//

abstract class nishat{
    public $exam;
    abstract protected function two($a,$b); 
}

class niloy extends nishat{
    public function two($a,$b){
        echo $a + $b;
    }
}

$mixed= new niloy();
$mixed->two(500,50);

//--------------------------third-------------------------------//


abstract class shanto{
    public $friend;
    abstract protected function best($x,$y);
}

class shihabs extends shanto{
    public function best($x,$y){
        echo $x - $y;
    }
}

$mixers= new shihabs();
$mixers->best(100,60);

//--------------------------four-------------------------------//


abstract class firstt{
    public $one;
    abstract protected function second($a,$b);
}

class seconds extends firstt{
    public function second($a,$b){

        echo $a * $b;
    }
}

$calculate= new seconds();
$calculate->second(10,8);

//--------------------------five-------------------------------//


abstract class bishal{
    public $number;
    abstract protected function call($a,$b);
}

class momin extends bishal{
    public function call($a,$b){
        echo $a / $b;
    }
}

$calcu= new momin();
$calcu->call(100,5);

//--------------------------six-------------------------------//

abstract class lion{
    public $king;
    abstract protected function tiger($a,$b);
}

class sheep extends lion{

    public function tiger($a,$b){
        echo $a + $b;
    }
}

$mic= new sheep();
$mic->tiger(50,50);

//--------------------------seven-------------------------------//

abstract class friend{
    public $Closs;
    abstract protected function name($first,$second);
}

class haters extends friend{
    public function name($first,$second){
        echo $first * $second;
    }
}

$result= new haters();
$result->name(50,60);
?>