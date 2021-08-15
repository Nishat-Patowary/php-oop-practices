<?php

class nishatt{

}

if (class_exists("nishat")){
    $mix= new nishatt();
    echo "The class is exists<br>";
}else{

    echo "The class is not exists";
}

//------------------------first---------------------------//

class niloy{

}

if(class_exists("niloys")){
    $mixer=new niloy();
    echo "The class is exists";
}else{
    echo "The class is not exists";
}

//------------------------second---------------------------//


class nihal{

}

if(class_exists("nihal")){
    $mic= new nihal();
    echo "This is my name";
}else{
    echo "This is not my name";
}

//------------------------third---------------------------//


class nisa{

}

if(class_exists("nisal")){
    $mixed= new nisa();
    echo "This is nisa";
}else{
    echo "This is not nisa";
}

//------------------------four---------------------------//


//---------------------this class is not exists-----------------------//


interface myname{

}

if(interface_exists("myname")){
    echo "the interface is exists";
}else{
    echo "The interface is not exists";
}

//---------------------------------------------------------------//

interface home{

}

if(interface_exists("home")){
    echo "The interface is exists";
}else{
    echo "The interface is not exists";
}
//---------------------------------------------------------------//


interface mynames{

}

if(interface_exists("mynames")){
    echo "This is my name";
}else{
    echo "This is not my name";
}
//---------------------------------------------------------------//

interface shihab_moda{

}

if(interface_exists("shihab_moda")){
    echo "Shihab is my closs friend";
}else{
    echo "shihab is not my closs friend";
}

//---------------------------------------------------------------//

interface cat{

}

if(interface_exists("dog")){
    echo "The interface is exists";
}else{
    echo "The interface is not exists";
}
//--------------------------interface used-----------------------------//


class tiger{
    public function mymethod(){

    }
}

$animal= new tiger();
if(method_exists($animal,"mymethod")){
    echo "The method is exists";
}else{
    echo "The method is not exists";
}

//---------------------------------------------------------------//


class shantoo{

    public function shanto(){

    }
}

$shantos=new shantoo();
if(method_exists($shantos,"shantoo")){
    echo "The method is exists";
}else{
    echo "The method is not exists";
}
//---------------------------------------------------------------//

class first{
    public function second(){

    }
}

$third= new first();
if(method_exists($third,"first")){
    echo "The method is exists";
}else{
    echo "The method is not exists";
}
//---------------------------------------------------------------//

class lions{
    public function king(){

    }
}
$animalking= new lions();
if(method_exists($animalking,"king")){
    echo "The method is exists";
}else{
    echo "The method is not exists";
}

//---------------------------------------------------------------//

class  monkey{
    public function zoo(){

    }
}
$animals= new monkey();
if(method_exists($animals,"zoo")){
    echo "The method is exists";
}else{
    echo "The method is not exists";
}

//-------------------------method exists used---------------------------//


trait children{
    public function cute(){

    }
}

if(trait_exists("children")){
    echo "The trait is exists";
}else{
    echo "The trait is not exists";
}

//---------------------------------------------------------------//

trait bishal{
    public function pakna(){

    }
}

if(trait_exists("bishal")){
    echo "The trait is exists";
}else{
    echo "The trait is not exists";
}

//---------------------------------------------------------------//

trait myhome{

}

if(trait_exists("myhome")){
    echo "The trait is exits";
}else{
    echo "The trait is not exists";
}
//---------------------------------------------------------------//

trait tamim{
    public function oil(){

    }
}

if(trait_exists("tanim")){
    echo "The trait is exists";
}else{
    echo "The trait is not exists";
}

//----------------------------trait_exists  used-----------------------------------//

class school{
    public $student;
}
if(property_exists("school","student")){
    echo "The property is exists";
}else{
    echo "The property is not exists";
}

//---------------------------------------------------------------//

class friend{
    public $bishal;
}

if(property_exists("friend","bishal")){
    echo "The property is exists";
}else{
    echo "The property is not exists";
}
class animal{
    public $bird;
}

if(property_exists("animal","bird")){
    echo "The property is exists";
}else{
    echo "The propery is not exists";
}

//---------------------------------------------------------------//


class shihab{
    public $moda;
}

if(property_exists("shihab","moda")){
    echo "The property is exists";
}else{
    echo "The property is not exists";
}


//----------------------------property_exists <used-------------------------------/>/

class tanvir{

}

$narayon= new tanvir();
if(is_a($narayon,"tanvir")){
    echo "The object is a class";
}else{
    echo "The object is not a class";
}

//---------------------------------------------------------------//


class tahsin{

}

$dhaka= new tahsin();
if(is_a($dhaka,"tahsin")){
    echo "This is a object in this class";
}else{
    echo "This is not a object in this class";
}

//---------------------------------------------------------------//


class shanto{

}

$rayer= new shanto();
if(is_a($rayer,"shanto")){
    echo "This is a object in this class";
}else{
    echo "This is not a object in this class";
}

//---------------------------is_a method used-----------------------------------//



       
        
   





?>