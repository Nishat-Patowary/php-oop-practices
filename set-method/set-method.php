<?php

class students{
    private $name;

    public function __get($name)
    {
        echo "You are trying to access private property<br>";
    }

    public function __set($name, $value)
    {
        echo "You are trying to access not existing private property<br>";
    }
}

$mix=new students();
echo $mix->name="Tanvirul HQ Nishat";

//---------------------------------------------//


class friends{
    private $shanto;

    public function __get($name)
    {
        echo "You are trying to access private property<br>";
    }

    public function __set($name, $value)
    {
        echo "This is a private property<br>";
    }
}

$mixx=new friends();
echo $mixx->name="Tanvirul";

//---------------------------------------------//

class clossed{
    private $shihab;

    public function __get($name)
    {
        echo "You are trying to acess private property<br>";
    }

    public function __set($name, $value)
    {
        echo "This is a private property<br>";
    }
}

$mic= new clossed();
echo $mic->name="nishat";

//----------------------------------//


class bestfriend{
    private $omer;

    public function __get($name)
    {
        echo "you are trying to access not exists property<br>";
    }


    public function __set($name, $value)
    {
        echo "This is a private function<br>";
    }
}

$mixed=new bestfriend();
echo $mixed->name= "Tanvirul nishat";

//---------------------------------------------//


class bird{
    private $lovebird;

    public function cute(){
        echo $this->lovebird;
    }

    public function __get($name)
    {
        echo "This is a private property<br>";
    }

    public function __set($first,$second)
    {
        if(property_exists($this,$first)){
            $this->first = $second;
        }else{
            echo "The property is not exists";
        }
    }
}

$mix= new bird();
$mix->lovebird="The bird is so beautiful";
$mix->cute();
?>