<?php 
// variable fuction mtlb k ak function ko variable ma store kr k variavle ko call krna
function  test(){
    echo "Test function calling";
}

function apple(){

}


$test = "test";
$apple="apple";
function main($a){
    $a();
}
main($test);
main($apple);
?>