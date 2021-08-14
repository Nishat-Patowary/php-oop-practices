<?php 

class students{
    private $firstname;
    private $lastname;

    private function setname($fname,$lname){
        $this->firstname = $fname;
        $this->lastname = $lname;
    }

    public function __call($name, $arguments)
    {
        echo "This is a private method<br>";
    }
}

$mix= new students();
$mix->setname("Tanvirul","Nishat");
//------------------------first-------------------------------//


class studentc{
    private $firstname;
    private $lastname;

    private function setnames($finame,$laname){
        $this->firstname = $finame;
        $this->laname = $laname;
    }

    public function __call($name, $arguments)
    {
        echo "THis is a private method<br>";
        print_r($arguments);
    }
}

$mixer= new studentc();
$mixer->setnames("Tanvirul","HQ");

//------------------------second-------------------------------//


class girl{
    private $firstgirl;
    private $secondgirl;

    private function setname($fgirl,$sgirl){
        $this->firstgirl = $fgirl;
        $this->secondgirl = $sgirl;
    }

    public function __call($name, $arguments)
    {
        echo "This is a private function<br>";
    }
}

$girl1= new girl();
$girl1->setname("Tanvirul","Nishat");

//------------------------third-------------------------------//

class friends{
    private $firstfriend;
    private $secondfriend;

    private function setname($fifriend,$sefriend){
        $this->firstfriend = $fifriend;
        $this->secondfriend = $sefriend;
    }

    public function __call($name, $arguments)
    {
        echo "This is a private function<br>";
        print_r($arguments);
    }
}

$friend1= new friends();
$friend1->setname("Tanvirul","Nishat");

//------------------------four------------------------------//

class boys{
    private $firstboy;
    private $secondboy;

    private function setname($fboy,$sboy){
        $this->firstboy = $fboy;
        $this->secondboy = $sboy;
    }
    public function __call($name, $arguments)
    {
        if(method_exists($this,$name)){

            call_user_func_array([$this,$name], $arguments);

        }else{
            echo "The property exists";
        }
    }
}

$boy1= new boys();
$boy1->setname("Tanvirul","HQ","Nishat");
echo "<pre>";
print_r($boy1);
echo "</pre>";

//------------------------five-------------------------------//


class closs{
    private $closs1;
    private $closs2;

    private function setname($c1,$c2){
   
        $this->closs1 = $c1;
        $this->closs2 = $c2;
    }

    public function __call($name, $arguments)
    {
        if(method_exists($this,$name)){
           call_user_func_array([$this,$name],$arguments);
        }else{

            echo "THe property exists";
        }
    }
}

$clossed= new closs();
$clossed->setname("Tanvirul","HQ","Nishat");
echo "<pre>";
print_r($clossed);
echo "</pre>";
//------------------------five-------------------------------//

class animals{
    private $tiger;
    private $lion;

    private function setname($firstname,$secondname){
        $this->tiger = $firstname;
        $this->lion = $secondname;
    }

    public function __call($name, $arguments)
    {
        echo "This is a private function<br>";
    }
}

$zoo= new animals();
$zoo->setname("Tanvirul","Nishat");


//------------------------six-------------------------------//


class mobile{
    private $iphone;
    private $samsung;

    private function setname($brand1,$brand2){
        $this->iphone = $brand1;
        $this->samsung = $brand2;
    }

    public function __call($name, $arguments)
    {
        echo "This is a private function";
    }
}

$seller= new mobile();
$seller->setname("brands","phones");

//------------------------seven-------------------------------//


class bike{
    private $royel;
    private $yamaha;

    private function setname($one,$two){
        $this->royel = $one;
        $this->yamaha = $two;
    }

    public function __call($name, $arguments)
    {
        if(method_exists($this,$name)){
            call_user_func_array([$this,$name],$arguments);
            
        }else{
            echo "The property exists";
        }
    }
}

$bikers= new bike();
$bikers->setname("brnad","Bikes");
echo "<pre>";
print_r($bikers);
echo "</pre>";

//------------------------eight------------------------------//

class bird{
    private $first;
    private $second;

    private function setname($one,$two){
        $this->first = $one;
        $this->second = $two;
    }

    public function __call($name, $arguments)
    {
        if(method_exists($this,$name)){
            call_user_func_array([$this,$name],$arguments);
        }
    }
}

$mic= new bird();
$mic->setname("Tanvirul","HQ","Nishat");
echo "<pre>";
print_r($mic);
echo "</pre>";
?>