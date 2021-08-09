<?php

use clossed as GlobalClossed;

trait base{
    public function first(){
        echo "This is a line<br>";
    }
}

class based {
    use base;
}

class baseds{
    use base; 
}

$mix= new based();
$mix->first();

$mixer=new baseds();
$mixer->first();

//------------------------------------//

trait friend{
    public function shihab(){
        echo "This is my friend<br>";
    }
}

class closss{
    use friend;
}

class best{
    use friend;
}

$mixx=new closss();
$mixx->shihab();

$mixxx=new best();
$mixx->shihab();

//-----------------------------------------//

trait hello{
    public function seyhello(){
        echo "HEllo everyone<br>";
    }
}

trait bye{
    public function seybye(){
        echo "bye everyone<br>";
    }
}

class hy{
    use hello;
}

class by{
    use bye;
}

$cal= new hy();
$cal->seyhello();

$calcu= new by();
$calcu->seybye();

//-----------------------------------------//


trait friends{
    public function bishal(){
        echo "His name is Bishal<br>";
    }
}

trait bondhu{
    public function tamim(){
        echo "His name is tamim<br>";
    }
}

class bests{
    use friends,bondhu;
}


class clossed{
    use bondhu;
}

$first=new bests();
$first->bishal();

$second=new clossed();
$second->tamim();
?>