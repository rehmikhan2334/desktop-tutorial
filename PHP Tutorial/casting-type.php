<?php 
// type casting mean ksi b data type ko change krna
// hum ksi b type ma krskty h change

// int ko string ma change krna

$a = 10;
$a = (string) $a;
var_dump($a);
echo "<br>";

// string ko int ma krna chnage

$a = "10";
$a = (int) $a;
var_dump($a);
echo "<br>";

// int ko boolaen ma change krna

$a = 10;
$a = (boolean) $a;
var_dump($a);
echo "<br>";

// float ma krna chnage 

$a = 1;
$a = (float) $a;
echo $a;
echo "<br>";


// array ma krna chnage
$a = 10;
$a = (array) $a;
var_dump($a);
echo "<br>";
?>