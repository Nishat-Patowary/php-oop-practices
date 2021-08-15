<?php

use second as GlobalSecond;

class nishatt{
    public function myhome(){
        echo "class name is :" . get_class($this) . "<br>";
    }
}

$mix= new nishatt();
$mix->myhome();

//---------------------------------------------------------------//

class niloy{
    public function mybrother(){
        echo "class name is :" . get_class($this) . "<br>";
    }
}

$mixer= new niloy();
$mixer->mybrother();

//---------------------------------------------------------------//

class lions{
    public function animal(){
        echo "The animal name is " .get_class($this) . "<br>";
    }
}

$miv= new lions();
$miv->animal();

//---------------------------------------------------------------//

class tiger{
    public function animals(){
        echo "The animals name is " . get_class($this) . "<br>";
    }
}

$fox= new tiger();
$fox->animals();

//------------------get_class used------------------------------//

class abc{

}

class xyz extends abc{
    public function new(){
        echo "The present class is :" . get_parent_class($this) . "<br>";

    }
}

$mixx= new xyz();
$mixx->new();

//---------------------------------//

class nishats{
  
}

class niloys extends nishats{

    public function brother(){
        echo "The present class is:" . get_parent_class($this) . "<br>";
    }
}

$mixers= new niloys();
$mixers->brother();


//---------------------------------------------------------------//

class bishall{

}
class friends extends bishall{
    public function closs(){
        echo "The present class is:" . get_parent_class($this) . "<br>";
    }
}

$best= new friends();
$best->closs();

//---------------------------------------------------------------//

class nishattt{}
class farmer extends nishattt{
    public function brother(){
        echo "The present class is " . get_parent_class($this) . "<br>";
    }
}

$vai= new farmer();
$vai->brother();
//---------------------- get_present_class used-----------------------------//


class func{

 
    function __construct()
    {
        
    }
    function myfunction1(){}
    function myfunction2(){}
}

$allfunction= get_class_methods("func");
print_r($allfunction);

//--------------------------------------//

class total{
    function myname(){

    }
    function myhome(){

    }
    
    function __construct()
    {
        
    }
}

$totals= get_class_methods("total");
print_r($totals);

//-------------------------get_class_method used---------------------------------//


class tamim{
    public $first;
    public $second= "hello";
    public $third;
    private $four;

    function __construct()
    {
        print_r(get_class_vars(__CLASS__));
    }
}

$col= new tamim();
$col2= get_class_vars(get_class($col));
print_r($col2);


class momin{
    public $one;
    public $two;
    public $three="brother";
    private $four;

    function __construct()
    {
        print_r(get_class_vars(__CLASS__));
    }
}

$news= new momin();
$newss= get_class_vars(get_class($news));

print_r($newss);



//----------------get_class_vars used-------------------------//


class fire{
    static public function temp(){
        var_dump(get_called_class());
    }
}

class fired extends fire{

}

fire::temp();
fired::temp();


//--------------------------//

class sobuj{
    static public function bondhu(){
        var_dump(get_called_class());
    }
}

class sobuijja extends sobuj{

}

sobuj::bondhu();
sobuijja::bondhu();

//------------------------------------------//

class sabbir{

    static public function college(){
        var_dump(get_called_class());
    }
}

class sabbirs extends sabbir{

}

sabbir::college();
sabbirs::college();

//-----------------------------get_called_class used--------------------------------------//

interface name{

}

class bisha{

}

class bishu extends bisha{

}

print_r(get_declared_interfaces());


//------------------------------------//


class tuhin{

}

class himel extends tuhin{

}

print_r(get_declared_interfaces());

//------------------------------------//


interface names{

}

class himu{

}

class himi extends himu{

}

print_r(get_declared_interfaces());

//----------------------get_declare_interface used-------------------------------//


trait one{

}

class first1{
    use one;
}

print_r(get_declared_traits());

//------------------------------------//


trait first2{

}
trait first3{

}

trait first4{

}

trait first5{

}

class first6{
    use first2,first3,first4,first5;
}

print_r(get_declared_traits());

//-------------------------used get_declared_traits---------------------------//

?>