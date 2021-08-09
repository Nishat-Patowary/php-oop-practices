<?php

use number as GlobalNumber;

class hyper{
    public $name="This is my name";
}

class niloy extends hyper{
    public $name="This is my brother<br>";
}

$result=new niloy();
echo $result->name;

//---------------------------//

class bishals{
    public $place= "dhaka";
}

class tamim extends bishals{
    public $place="pagla<br>";
}

$mix= new tamim();
echo $mix->place;

//------------------------------//

class badda{
    public $place="dhaka";
}

class uttora extends badda{
    public $place="dhaka-uttora<br>";
}

$mixx=new uttora();
echo $mixx->place;

//-----------------------------property_overtide used--------------------//


class number{
    public function word($a,$b){
        return $a + $b;
    }
}

class numbers extends number{
    public function word($a,$b){
        return $a - $b;
    }
}

$calcu= new number();
echo $calcu->word(50,50);

$calculate= new numbers();
echo $calculate->word(100,20);

//-----------------------------------------//


class mark{
    public function num($x,$y){
        return $x * $y;
    }
}

class marks extends mark{
    public function numb($x,$y){
        return $x - $y;
    }
}

$mic= new mark();
echo $mic->num(50,20);

$micc= new marks();
echo $micc->num(50,5);

//--------------------------method_overriding used-------------------------//

?>