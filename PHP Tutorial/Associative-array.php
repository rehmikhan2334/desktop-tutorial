<?php 
// associative array ma hum us k sth uski keys b print krty h


$userDetails = [ 
    "Name" => "Rehmi khan",
    "Age" => 19,
    "City" => "Lahore",
    "Email" => "test@gmail.com",
    "Street" => "Badami Bagh",
];

foreach($userDetails as $key => $data){
    echo $key ." is : " .$data;
    echo "<br>";
}

echo "<br>";
foreach($userDetails as $key => $userData):
echo $key . " is :" .$userData;
 echo "<br>";
endforeach;



?>