<?php 
// add and remove element in array and diffeernets place to remove and add element structure

$users = ["rehmi khan","junaid khan","hayyat khan"];
// add singal and multiple element add
array_push($users, "awais khan","zeeshan khan");
// singal elemnt ko delete krny ka trika
array_pop($users);
// multiple element delete 
array_splice($users,-1  );
foreach($users as $s){
    echo "<h4>".$s."</h4>";
    echo "<br>";
}

?>