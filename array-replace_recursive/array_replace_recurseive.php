<?php


$animal=["cat","dog","bird","goat"];
$forest=["lion","Tiger","fox"];

$new = array_replace($animal,$forest);
echo "<pre>";
print_r($new);
echo "</pre>";

$name=["first","second","third","four","five"];
$names=["six","seven"];

$mix=array_replace($name,$names);
echo "<pre>";
print_r($mix);
echo "</pre>";

$first=["one","two","three","four"];
$second=["five","six"];


?>