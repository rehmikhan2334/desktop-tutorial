<?php 
$path = "Files";
$items = scandir($path);
$items = array_diff($items, array('.', '..'));

foreach ($items as $item) {
    echo "<a href='./Files/$item'>$item</a>";
    echo "<br/>";
}
?>
