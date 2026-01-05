<?php 

// Multidimensional array to store multiple users' data
$usersDetails = [
    [2, "Rehmi khan", "Lahore", "rehmi@gamil.com"],
    [3, "junaid khan", "Lahore", "junaid@gamil.com"],
    [4, "hayyat khan", "Lahore", "hayat@gamil.com"],
    [1, "awais khan", "Lahore", "awais@gamil.com"],
    [5, "zeeshan khan", "Lahore", "zeeshan@gamil.com"],
    [6, "fawad khan", "Lahore", "fawad@gamil.com"],
];

// Loop through each user
foreach($usersDetails as $user){
   
    $count = count($user);  // total items in each row
    $i = 0; // index counter

    foreach($user as $detail){
     
        echo $detail;
        if ($i < $count - 1) {
            echo " _ "; // only add underscore if not last item
        }
        $i++;
    }

    echo "<br>"; // line break after each user's data
}
?>
