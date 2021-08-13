<?php 

function name($animal){
    if($animal <=10){
        echo "$animal<br>";
        name($animal+1);
    }
}

name(1);



function names($nishat){
    if($nishat <= 20){
        echo "$nishat<br>";
        names($nishat+1);
    }
}
names(1);



function animal($lion){

    if($lion <=100){
        echo "$lion<br>";
        animal($lion +5);
    }
}
animal(2);



?>