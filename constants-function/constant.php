<?php 

echo "Line number is :" . __LINE__ . "<br>";
echo "Line number is :" . __LINE__ . "<br>";
echo "Line number is :" . __LINE__ . "<br>";
echo "Line number is :" . __LINE__ > "<br>";

//----------------------used to show line number------------------------------//


echo "file location is :" . __FILE__  . "<br>";
echo "file location is :" . __FILE__  . "<br>";
echo "file location is :" . __FILE__ .  "<br>";

//------------------------used to show file location-------------------------------//

echo "file folder is :" . __DIR__ . "<br>";
echo "file folder is :" . __DIR__ . "<br>";

//---------------------------used to show folder----------------------------//


function nishat(){
    echo "function name is :" . __FUNCTION__ . "<br>";
}
nishat();


function niloy(){
    echo "function name is :" . __FUNCTION__ . "<br>";
}

niloy();


function nihal(){
    echo "function name is :" . __FUNCTION__ . "<br>";
}

nihal();

//--------------------------used to show function name--------------------------//

class nishatt{
    public function boy(){
        return __CLASS__;
    }
}

$mix= new nishatt();
echo $mix->boy();



class wife{
    public function Children(){
        return __CLASS__;
    }
}

$mixer= new wife();
echo $mixer->Children();

//--------------------------used to show class name-----------------------//


class school{
    public function student(){
        return __METHOD__;
    }
}

$mixer= new school();
echo $mixer->student();


class animalss{
    public function fox(){
        return __METHOD__;
    }
}

$mixx= new animalss();
echo $mixx->fox();

//----------------------------used to show method-------------------//



?>