<?php

use second as GlobalSecond;
use subject as GlobalSubject;

class student{
    public $name;
    public $section;

    public function __construct($n)
    {
        $this->name = $n;
    }
}

$srudent1= new student("Tanvirul HQ");
$student2= $srudent1;
$student2->name="niloy<br>";
echo $srudent1->name;

//---------------------------------------------------------------------------//


class nishat{
    public $names;
    public $address;

    public function __construct($a)
    {
        $this->address = $a;
    }
}

$mix=new nishat("dhaka");
$mixer= $mix;
$mixer->address="chandpur<br>";
echo $mix->address;

//-----------------------------------------------------------------//

class animal{
    public $monkey;
    public $tiger;
    
    public function __construct($t)
    {
        $this->tiger = $t;
    }
}

$mixed= new animal("tiger in a forest");
$mixedd= $mixed;
$mixedd->tiger="tiger in a zoo<br>";
echo $mixed->tiger;

//-----------------------------------------------------------------//
class friend{
    public $shanto;
    public function __construct($s)
    {
        $this->shanto = $s;
    }
}

$closs= new friend("shanto is my friend");

$best= $closs;
$best->shanto="shanto is my closs friend<br>";
echo $closs->shanto;

//-----------------------------------------------------------------//


class closs{
    public $shanto;
    public $shihab;

    public function __construct($st)
    {
        $this->shanto = $st;
    }

    public function setname(shihab $sb){
        $this->shihab = $sb;
    }
}

class shihab{
    public $best;
    public function __construct($bt)
    {
        $this->best= $bt;
    }
}

$friend=new closs("they are my friends");
$shihabs=new shihab("moda ailsa");

$friends= clone $friend;
$friend->setname($shihabs);
$shihabs->shanto= "This is a moda";
print_r($friend);

//-----------------------------------------------------------------//

class animals{
    public $tiger;
    public $lion;

    public function __construct($tg)
    {
        $this->tiger = $tg;
    }

    public function setname(lion $ln){
        $this->lion =$ln;
    }
}

class lion{
    public $king;
    public function __construct($kg)
    {
        $this->king = $kg;
    }
}

$mixx= new animals("This is a zoo");

$lions= new lion("This is a king");

$mixe= clone $mixx;

$mixx->setname($lions);
$lions->tiger="This is a tiger";

print_r($mixx);

?>