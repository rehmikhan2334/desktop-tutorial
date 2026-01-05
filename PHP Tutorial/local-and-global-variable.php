<<<<<<< HEAD
<?php 
// local and golbal variable 

// local ko hum function k ander e call kr skty h bhir ni kr skty
function getName(){
    $name = 'Rehmi khan';
    echo $name;
    echo "<br>";
}
getName();
echo "<br>";
echo "<br>";
echo "<br>";


//Global variable ko hum ksi b function or bhir kahin b use kr skty ha
 $name = 'rehmi khan';
 
 function  test(){
    global $name;
    echo $name;
    echo "<br>";

    // nested function 
    function test2(){
        $name = 'awais khan';
        echo $name;
    }
 }
 test();
 test2();



=======
<?php 
// local and golbal variable 

// local ko hum function k ander e call kr skty h bhir ni kr skty
function getName(){
    $name = 'Rehmi khan';
    echo $name;
    echo "<br>";
}
getName();
echo "<br>";
echo "<br>";
echo "<br>";


//Global variable ko hum ksi b function or bhir kahin b use kr skty ha
 $name = 'rehmi khan';
 
 function  test(){
    global $name;
    echo $name;
    echo "<br>";

    // nested function 
    function test2(){
        $name = 'awais khan';
        echo $name;
    }
 }
 test();
 test2();



>>>>>>> 2327da399a8fc7486d103895b98ec7f7a0e56f5e
?>