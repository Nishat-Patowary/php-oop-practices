<?php

use student as GlobalStudent;


class best{
    public $shanto="moda";
    private $shihab;
    private $omer;

    public function setname($fname,$lname){
        $this->shihab = $fname;
        $this->omer = $lname;
    }

    public function __unset($name){
        unset($this->shihab);
    }
}

$mix= new best();
$mix->setname("shanto","bishal");
unset($mix->shihab);
echo "<pre>";
print_r($mix);
echo "</pre>";

//---------------------------------//

class animalss{
    public $monkey="forest";
    private $lion;
    private $tiger;


    public function setname($fname,$lname){
        $this->lion = $fname;
        $this->tiger = $lname;
    }

    public function __unset($name)
    {
        unset($this->tiger);
    }
}

$calcu=new animalss();
$calcu->setname("fox","wolf");
unset($calcu->tiger);
echo "<pre>";
print_r($calcu);
echo "</pre>";
?>