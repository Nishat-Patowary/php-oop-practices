<?php


class friends{
    public $closs="shanto moda";
    private $shihab;
    private $omer;

    public function setname($fname,$lname){
        $this->shihab = $fname;
        $this->omer = $lname;
    }

    public function __sleep()
    {
        return array("shihab","omer");
    }
}

$mix=new friends();
$mix->setname("Tanvirul","Nishat");
$mixer= serialize($mix);
echo $mixer;


//--------------------------------------------//

class students{
    public $student1="bishal";
    private $student2;
    private $student3;

    public function setname($firststudent,$laststudent){
        $this->student2 = $firststudent;
        $this->student3 = $laststudent;
    }

    public function __sleep()
    {
        return array("student2","student3");
    }
}

$mixer=new students();
$mixer->setname("mahmudul","hasan");
$mixx= serialize($mixer);
echo $mixx;


?>