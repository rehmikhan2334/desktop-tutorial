<<<<<<< HEAD
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



=======
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



>>>>>>> 2327da399a8fc7486d103895b98ec7f7a0e56f5e
?>