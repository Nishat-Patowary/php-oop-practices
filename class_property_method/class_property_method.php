<?php 

class cars{  // class creat
    public $premio;  //property used
    public $korolla;
    public $toyota;
    private $marcedis;

    public function setname($marcedis){  //methos called
        return $this;
    }
}

$car= new cars();  //object creat
echo $car->premio="1 lak taka<br>";
echo $car->korolla= "2 lak taka<br>";
echo $car->toyota= "3 lak taka<br>";

echo $car->setname="20 lak taka<br>";




class bike{  //class creat
    public $yamaha;  //property used
    public $suzuki;
    private $royel;
 
    public function king($royel){  //method used  
        return $this;
    }
}

$mix=new bike(); //object used  
echo $mix->yamaha="This is first<br>";
echo $mix->suzuki="This is second<br>";
echo $mix->king="This is third<br>";





?>