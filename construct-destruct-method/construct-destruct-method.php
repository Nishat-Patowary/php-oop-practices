<?php 

class nishat{
    public function student(){
        echo "I am a student<br>";
    }
}
$mix=new nishat();
$mix->student();

//------------------------------//

class nishatt{
    public function students(){
        echo "I am a student<br>";
    }
}
$mixer= new nishatt();
$mixer->students();

//-------------------this 2 program is normal used----------------------------//


class niloy{
    public function  __construct()
    {
       echo "This is my brother<br>";
    }
}

$mixers=new niloy();

//------------------------------//


class niloys{
    public function __construct()
    {
        echo "This is my brother<br>";
    }
}

$cal=new niloys();

//---------------construct used ---------------//


class number{
    public function __destruct()
    {
        echo "This is a number<br>";    
    }
}
$calcu= new number();

//------------------------------//


class numbers{
    public function __destruct()
    {
        echo "This is number of this item<br>";
    }
}
$calculate= new numbers();

//------------------------------//

class animal{
    public function __destruct()
    {
        echo "The lion is a king<br>";
    }
}
$calculated= new animal();

//--------------distruct used ----------------//

?>