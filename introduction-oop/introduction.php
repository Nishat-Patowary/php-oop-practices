<?php 

class calculate{
    public $a,$b,$c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1= new calculate();
$c1->a =100;
$c1->b =30;

echo "THe value of c1: " .$c1->sum(). "<br>";
echo "The value of c1: " .$c1->sub(). "<br>";

//---------------------------first-----------------------//

class calculation{
    public $x,$y,$z;

    function sum(){
        $this->z = $this->x + $this->y;
        return $this->z;
    }

    function sub(){
        $this->z = $this->x - $this->y;
        return $this->z;
    }
}

$z1= new calculation();
$z1->x = 200;
$z1->y =60;
echo "The value of z1: " . $z1->sum() . "<br>";
echo "The value of z1: " .$z1->sub() . "<br>";

//------------------------second-------------------------------//


class calcu{
    public $d,$g,$t;

    function sum(){
        $this->g = $this->d + $this->t;
        return $this->g;
    }

    function sub(){
        $this->g = $this->d - $this->t;
        return $this->g;
    }
}

$G1= new calcu();
$G1->d = 500;
$G1->t = 200;

echo "The value of G1: " .$G1->sum() . "<br>";
echo "The value of G1: " .$G1->sub() . "<br>";

//------------------------third-------------------------------//

?>