<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Php Function</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value="call_btn">
            Call Function
        </button>
    </form>
    
</body>
</html>
<?php
function btn_click_fun(){
    echo "function called on button click";
}
if(isset($_REQUEST['button'])){
    btn_click_fun(); 
}

?>