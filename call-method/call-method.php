<?php 

class student{
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

$mix= new student();
$mix->setname("Tanvirul","Nishat");
//------------------------first-------------------------------//


class students{
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

$mixer= new students();
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

class friend{
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

$friend1= new friend();
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
?>