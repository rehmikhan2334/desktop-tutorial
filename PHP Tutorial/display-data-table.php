<?php 

// Multidimensional array to represent table rows
$users = [
    [1, "Rehmi khan", "rehmi@gmail.com"],
    [2, "junaid khan", "junaid@gmail.com"],
    [3, "fawad khan", "fawad@gmail.com"],
    [4, "Awais khan", "awais@gmail.com"],
    [5, "zeeshan khan", "zeeshan@gmail.com"],
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>ID</th><th>NAME</th><th>EMAIL</th></tr>";

foreach($users as $a){
    echo "<tr>" ;
    foreach($a as $b){
        echo "<td>$b </td>";
    }
      echo "</tr>" ;
}   
echo "</table>"


?>
