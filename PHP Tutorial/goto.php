<?php  


// $x = 20;
// echo "Before condition <br>";

// if ($x == 20){

//     goto jump;
//     // print_r(abs);
// }

// $name = 'Rehmi khan';
// echo $name;

// jump:
// echo "statement is jumped on line no. 14";

// Second Example  

for($i=0; $i<10; $i++){
    echo "$i <br>";

    if($i==8){
        goto abc;
    }
}

abc:
echo 'Loop is break';




?>