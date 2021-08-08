<?php

use animal as GlobalAnimal;

class animal{
    private static function lion(){
        echo "This is a lion";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "This is a callstatic function<br>";
    }
}

animal::lion();


//-----------------------------------------------------------------//

class animals{
    private static function tiger(){
        echo "This is a tiger<br>";
    } 
    public static function __callStatic($name, $arguments)
    {
        if(method_exists(__CLASS__,$name)){
            call_user_func_array([__CLASS__,$name],$arguments);
        }else{
            echo "Method doesnot exists";
        }
    }
}
animals::tiger();

//-----------------------------------------------------------------//

class friend{
    private static function best(){
        echo "This is my best friend<br>";
    }
    public static function __callStatic($name, $arguments)
    {
        if(method_exists(__CLASS__,$name)){
            call_user_func_array([__CLASS__,$name],$arguments);
        }else{
            echo "The method doesnot exists";
        }
    }
}

friend::best();

//-----------------------------------------------------------------//


class closs{
    private static function shanto(){
        echo "This is my closs friend<br>";
    }

    public static function __callStatic($name, $arguments)
    {
        if(method_exists(__CLASS__,$name)){
            call_user_func_array([__CLASS__,$name],$arguments);

        }else{
            echo "The method doesnot exists";
        }
    }
}
closs::shanto();

//-----------------------------------------------------------------//


class best{
    private static function shihab(){
        echo "This is my best friend";
    }

    public static function __callStatic($name, $arguments)
    {
        if(method_exists(__CLASS__,$name)){
            call_user_func_array([__CLASS__,$name],$arguments);
        }else{
            echo "the method doesnot exists";
        }
    }
}

best::shihab();

?>