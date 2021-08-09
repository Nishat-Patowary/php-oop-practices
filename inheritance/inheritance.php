<?php

use student as GlobalStudent;

class student{
    public $name;
    public $age;
    public $section;

    public function __construct($n,$a,$s)
    {
        $this->name = $n;
        $this->age =$a;
        $this->section = $s;
    }

    public function info(){
        echo "<h2>student Details</h2>";
        echo "student name is :" .$this->name . "<br>";
        echo "student age is :" . $this->age . "<br>";
        echo "student section is :" .$this->section . "<br>";
    }
}
$students= new student("Tanvirul",21,"A");
$students->info();

class teacher extends student{

}

$teacher=new teacher("nazmul",35,"A");
$teacher->info();

//----------------------------------------------------------//


class workers{
    public $name;
    public $age;
    public $salary;

    public function __construct($n,$a,$s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    public function total(){
        echo "<h2>Workets info</h2>";
        echo "workers name is :" . $this->name . "<br>";
        echo "workers age is :" .$this->age . "<br>";
        echo "workers salary is :" . $this->salary .  "<br>";
    }
}

$worker= new workers("Tanvirul HQ",21,10000);
$worker->total();


class chairman extends workers{
    public $phone=5000;
    public $car=10000;
    public $buisness=10000;
    public $salary=50000;
    public $totalsalary;

    function totalammount(){
        $this->totalsalary= $this->salary + $this->phone + $this->car + $this->buisness;

        echo "<h2>chairman details</h2>";
        echo "chairman name is :" . $this->name . "<br>";
        echo "chairman age is :" .$this->age . "<br>";
        echo "chairman salary is :" .$this->totalsalary . "<br>";

    }
}

$chairmans= new chairman("Niloy",20,5000);
$chairmans->totalammount();

//------------------------------------------------------------//


class nishats{
    public $name;
    public $age;
    public $salary;

    public function __construct($n,$a,$s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary =$s;
    }


    public function total(){
        echo "<h2>Nishat Details</h2>";
        echo "My name is :" . $this->name . "<br>";
        echo "MY age is :" . $this->age . "<br>";
        echo "MY salary is :" . $this->salary . "<br>";
    }

}

$nishatt= new nishats("Tanvirul HQ",21,5000);
$nishatt->total();


class sabbir extends nishats{
    public $shopping=10000;
    public $car=5000;
    public $phone=3000;
    public $salary=5000;
    public $totalsalary;

    public function ammount(){
        $this->totalsalary= $this->salary + $this->shopping + $this->car + $this->phone;

        echo "<h2>Chairman Details</h2>";
        echo "chairman name is :" . $this->name . "<br>";
        echo "chairman age is :" .$this->age . "<br>";
        echo "chairman salary is :". $this->totalsalary . "<br>";
    }
}

$chairman= new sabbir("shanto",21,5000);
$chairman->ammount();


?>