<?php

use friend as GlobalFriend;

class base{
    public $name;
    public function __construct($n)
    {
        $this->name = $n;
    }
    public function show(){
        echo "This is my " .$this->name . "<br>";
    }
}
$mix=new base("Home");
$mix->show();

//----------------------------------------//

class animal{
    public $lion;
    public function __construct($l)
    {
        $this->lion = $l;
    }

    public function show(){
        echo "The lion is a ". $this->lion . "<br>";
    }
}

$mixer=new animal("king of a forest");
$mixer->show();

//----------------------------------------//


class  animals{
    public $tiger;
    public function __construct($t)
    {
        $this->tiger = $t;
    }

    public function show(){
        echo "There is a " .$this->tiger . "<br>";
    }
}

$mixed= new animals("tiger in a forest");
$mixed->show();

//---------------------------------------------------//

class friend{
    public $closs;
    public function __construct($c)
    {
        $this->closs = $c;
    }

    public function show(){
        echo "This is my " . $this->closs . "<br>";
    }
}

$mixers= new friend("closs friend");
$mixers->show();
?>