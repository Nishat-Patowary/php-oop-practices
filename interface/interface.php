<?php 

interface student1{
    function nishat($a,$b);
}

interface student2{
    function niloy($a,$b);
}

class student3 implements student1,student2{
    public function nishat($a, $b)
    {
        echo $a + $b;
    }

    public function niloy($a,$b){
        echo $a - $b;
    }
}

$mix= new student3();
$mix->nishat(50,80);
$mix->niloy(100,60);

//---------------------------------------------------------------//

interface worker1{
    function bishal($x,$y);
}

interface worker2{
    function tanvir($x,$y);
}

class worker3 implements worker1,worker2{
    public function bishal($x,$y){
        echo $x * $y;
    }

    public function tanvir($x,$y){
        echo $x / $y;
    }
}

$mixed= new worker3();
$mixed->bishal(50,40);
$mixed->tanvir(80,20);

//----------------------------------interface used-------------------------//
?>