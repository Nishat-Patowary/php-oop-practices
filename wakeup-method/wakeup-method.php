<?php 

class friends{
    public $normla="They are normal friends";
    private $closs;
    private $best;

    public function rename($bfriend,$cfriend){
        $this->best = $bfriend;
        $this->closs = $cfriend;
    }

    public function __sleep()
    {
        return array("closs","best");
    }
    
    public function __wakeup()
    {
        echo "This is wakeup method";
    }
}


$mix=new friends();
$mix->rename("shanto","shihab");
$mixer= serialize($mix);
$us= unserialize($mixer);
print_r($us);


//----------------------------------------//

class animalt{
    public $monkey="The monkey";
    private $lion;
    private $tiger;

    public function allanimal($l,$t){
        $this->lion = $l;
        $this->tiger = $t;

    }

    public function __sleep()
    {
        return array("lion","tiger");
    }

    public function __wakeup()
    {
        echo "This is a wakeup method";
    }
}

$cal=new animalt();
$cal->allanimal("fox","cat");
$calcu=serialize($cal);
$un= unserialize($calcu);
echo "<pre>";
print_r($un);
echo "</pre>";

?>