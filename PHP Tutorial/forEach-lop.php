<<<<<<< HEAD
<?php 
// forEach lop in php
// is ma do qism k berak point hoty h 
// break; is k bd kuch b ni hota exicute
// continue jis py lgao gy wo ni hoga show baki sb data show hoga

// pehla trika forEach lop ko likhny ka

$users = ["rehmi khan","junaid khan","awais khan","hayyat khan","hammad khan"];

forEach($users as $a){
     if($a == "junaid khan"){
        continue;
    }
    echo "<h3>".$a."</h3>";
    echo "<br>";
    // if($a=="junaid khan"){
    //     break;
    // }    
}

// Second Trika lop ko likhnhy ka
echo "Seoond example for Each lop <br>";
foreach($users as $a):
echo $a;
echo "<br>";
endforeach;




=======
<?php 
// forEach lop in php
// is ma do qism k berak point hoty h 
// break; is k bd kuch b ni hota exicute
// continue jis py lgao gy wo ni hoga show baki sb data show hoga

// pehla trika forEach lop ko likhny ka

$users = ["rehmi khan","junaid khan","awais khan","hayyat khan","hammad khan"];

forEach($users as $a){
     if($a == "junaid khan"){
        continue;
    }
    echo "<h3>".$a."</h3>";
    echo "<br>";
    // if($a=="junaid khan"){
    //     break;
    // }    
}

// Second Trika lop ko likhnhy ka
echo "Seoond example for Each lop <br>";
foreach($users as $a):
echo $a;
echo "<br>";
endforeach;




>>>>>>> 2327da399a8fc7486d103895b98ec7f7a0e56f5e
?>