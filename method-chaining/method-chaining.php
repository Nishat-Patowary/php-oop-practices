<?php 

class animal{
    public function lion(){

        echo "This is a lion<br>";
    }

    public function tiger(){
        echo "This is a tiger<br>";
    }

    public function fox(){
        echo "This is a fox<br>";
    }
}

$mix=new animal();
$mix->lion();
$mix->tiger();
$mix->fox();

//----------------------------------//

class animals{

    public function monkey(){
        echo "This is a monkey<br>";
    }

    public function elephant(){
        echo "This is a elephant<br>";
    }

    public function wolf(){
        echo "This is a wolf<br>";
    }
}

$mixed= new animals();
$mixed->monkey();
$mixed->elephant();
$mixed->wolf();

//--------------------------this 2 program is a normal used with objetcs make and used---------------------------------//

class friend{
    public function shanto(){
        echo "My name is shanto<br>";
        return $this;
    }

    public function shihab(){
        echo "My name is shihab<br>";
        return $this;
    }

    public function omer(){
        echo "my name is omer<br>";
        return $this;
    }
}

$mixer=new friend();
$mixer->shanto()->shihab()->omer();

//--------------------------------//

class subject{
    public function math(){
        echo "the subject is math<br>";
        return $this;
    }

    public function english(){
        echo "The subject is english<br>";
        return $this;
    }

    public function bangla(){
        echo "The subject is bangla<br>";
        return $this;
    }
}

$mixed= new subject();
$mixed->math()->english()->bangla();

//-----------------------------used all object in one line so this is the method-chaining-----------------------//


?>