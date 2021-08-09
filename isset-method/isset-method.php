<?php 

class friends{
    public $closs;
    private $shanto;
    private $shihab;

    public function setname($a,$b){
        $this->shanto = $a;
        $this->shihab =$b;
    }
}

$mix=new friends();
$mix->setname="tanvirul";
echo isset($mix->setname);

//-------------------------------------//

class cat{
    public $bishal;
    private $momin;
    private $sobuj;

    public function setname($a,$b){
        $this->momin = $a;
        $this->tanvir = $b;
    }
}

$mixer=new cat();
$mixer->setname="Tanvirul HQ nishat";
echo isset($mixer->setname);

//------------------------------------------//

class cow{
    public $tiger;
    private $lion;
    private $fox;

    public function setname($x,$y){
        $this->lion = $x;
        $this->fox = $y;
    }
}

$mixed= new cow();
$mixed->tiger="THis is a tiger";
echo isset($mixed->tiger);

//----------------------------------------------//

class students{
    public $nishat;
    private $parvez;
    private $shipon;

    public function setnames($first,$second){
        $this->parvez = $first;
        $this->shipon = $second;
    }
    public function __isset($name)
    {
        echo isset($this->$name);
    }
}

$calculate=new students();
$calculate->setnames("Tanvir","Nishat");
echo isset($calculate->parvez);


//----------------------------------//

class brillant{
    public $pervej;
    private $nurul;
    private $arif;

    public function setname($fname,$lname){
        $this->nurul= $fname;
        $this->arif= $lname;
    }

    public function __isset($name)
    {
        echo isset($this->$name);
    }
}

$calcu=new brillant();
$calcu->setname("Tanvir","momin");
echo isset($calcu->arif);

