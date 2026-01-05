<<<<<<< HEAD
<?php  
$users = ["rehmi","khan","awais","hammad","hammad","khan"];
$user = ["name"=>"rehmi", "age"=>20,"email"=>"rehmi3ha"];
// agr hum bs aray ms sy keys ko niklna chahty h uski value ni to hm us k liya ya functon use kry gy
print_r(array_keys($user));
// is_array ya check krta h k jo aray hum ny put ki ha wo array ha ya ni 

if(is_array($users)){
    echo "This is array";
}else{
    echo "This is not array";
}
echo "<br/>";
// users ko count ksy krty h 
echo count($users);
echo "<br/>";

// agr hum ny bech ma ya ksi b jaga sy koi users ko select krna ha to ksy kry gy
unset($users[2]);
print_r($users);
echo "<br>";
// age hum ny ak aray ma ak or user ko add krna ha to ksy kry gy
array_push($users,"fawad");
print_r($users);
echo "<br>";
// agr num y lst m sy ak user ko delt kr na ha 
array_pop($users);
print_r($users);
echo "<br>";
// agr hum ny ksi array ko strinf ma show krwana ha
echo implode($users);
echo "<br>";

// agr hu ny ksi string ko array ma convert krna ha

$str = "hello how are you";
print_r(explode(" ",$str));
echo "<br>";

// agr hm ny do array ko merge krna mtln dono ko milana h to ya wala function user hoga

$data = array_merge($user,$users);
print_r($data);

echo "<br>";

// agr hum ny array ma do value wali same value ko khtmm krna chahgtu h

$users=array_unique($users);
print_r($users);






=======
<?php  
$users = ["rehmi","khan","awais","hammad","hammad","khan"];
$user = ["name"=>"rehmi", "age"=>20,"email"=>"rehmi3ha"];
// agr hum bs aray ms sy keys ko niklna chahty h uski value ni to hm us k liya ya functon use kry gy
print_r(array_keys($user));
// is_array ya check krta h k jo aray hum ny put ki ha wo array ha ya ni 

if(is_array($users)){
    echo "This is array";
}else{
    echo "This is not array";
}
echo "<br/>";
// users ko count ksy krty h 
echo count($users);
echo "<br/>";

// agr hum ny bech ma ya ksi b jaga sy koi users ko select krna ha to ksy kry gy
unset($users[2]);
print_r($users);
echo "<br>";
// age hum ny ak aray ma ak or user ko add krna ha to ksy kry gy
array_push($users,"fawad");
print_r($users);
echo "<br>";
// agr num y lst m sy ak user ko delt kr na ha 
array_pop($users);
print_r($users);
echo "<br>";
// agr hum ny ksi array ko strinf ma show krwana ha
echo implode($users);
echo "<br>";

// agr hu ny ksi string ko array ma convert krna ha

$str = "hello how are you";
print_r(explode(" ",$str));
echo "<br>";

// agr hm ny do array ko merge krna mtln dono ko milana h to ya wala function user hoga

$data = array_merge($user,$users);
print_r($data);

echo "<br>";

// agr hum ny array ma do value wali same value ko khtmm krna chahgtu h

$users=array_unique($users);
print_r($users);






>>>>>>> 2327da399a8fc7486d103895b98ec7f7a0e56f5e
?>