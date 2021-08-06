<?php 

trait hello{
    public function sayhello(){
        echo "This is a cat";
    }
}

class hy{
    public function sayhello(){
        echo "This is a cow";
    }
}

class nishat extends hy{
    use hello;
    public function sayhello()
    {
        echo "This is a lion<br>";
    }
}

$mix=new nishat();
$mix->sayhello();

//--------------------------first-------------------------------//


trait first{
    public function one(){
        echo "This is number one<br>";
    }
}

trait second{
    public function one(){
        echo "This is number two";
    }
}

class three {
    use first,second{
        first::one insteadof second;
    }
}

$mixer= new three();
$mixer->one();

//--------------------------second-------------------------------//


trait one{
    public function first(){

        echo "This is  a bike<br>";
    }
}

trait two{
    public function first(){

        echo "This is a car";
    }
}

class five{

    use one,two{
        one::first insteadof two;
    }
}

$mixed= new five();
$mixed->first();

//--------------------------third-------------------------------//


trait bishal{
    public function name(){
        echo "My name is bishal";
    }
}

class shanto{
    public function name(){
        echo "My name is shanto";
    }
}

class shihab extends shanto{
    use bishal;
    public function name(){
        echo "MY name is shihab<br>";
    }
}

$calculate= new shihab();
$calculate->name();

//--------------------------four------------------------------//


trait car{
    public function one(){
        echo "This is a car";
    }
}
trait bike{
    public function one(){
        echo "This is a bike";
    }
}

class both{
    use car,bike{
       bike::one insteadof car;
    }
}

$mixers= new both();
$mixers->one();
?>