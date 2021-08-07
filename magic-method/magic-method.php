<?php

use second as GlobalSecond;

class first{
    public function one(){
        echo "This is a number<br>";
    }
}
$mix=new first();
$mix->one();

//----------------------------//

class second{
    public function two(){
        echo "This is a line<br>";
    }
}

$mixx= new second();
$mixx->two();

//-----------------------------------normal method used with creat object----------------------------------//

class third{
    public function __construct()
    {
        echo "This is a cat<br>";
    }
}

$mixer=new third();


//-----------------------------//

class four{
    public function __construct()
    {
        echo "This is a tiger<br>";
    }
}

$mixed= new four();

//------------------------------------magic method construct used without creat object--------------------------------------//

?>