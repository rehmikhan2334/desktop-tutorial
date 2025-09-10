<?php 
$user_need = 5;

// break Lopp   

// for($i=0; $i<=10; $i++){
//     echo $i;
//     echo "<br>";
//     if($i==$user_need){
//         break;
//     }
// }

// continew Loop

for($i=0; $i<=10; $i++){
    if($i==3 || $i==8){
        continue;
    }
    echo $i;
    echo "<br>";
}

?>