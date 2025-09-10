<?php 
// user data data ko hm json ma is trhn convert krty h api sy 
$users = ["name"=>"rehmi","age"=>"20","email"=>"rehmi@abc.com"];
$userJson = json_encode($users);
echo $userJson;

echo "<br>";
// age humy api sy data show ho ya usy array ma convert krna ho to is k liya ya code hoga
$data = '{"name":"rehmi","age":"20","email":"rehmi@abc.com"}';
$dataArray = json_decode($data,true);
print_r($dataArray);




?>