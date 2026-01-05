<<<<<<< HEAD
<?php 
$path = "Files";
$items = scandir($path);
$items = array_diff($items, array('.', '..'));

foreach ($items as $item) {
    echo "<a href='./Files/$item'>$item</a>";
    echo "<br/>";
}
?>
=======
<?php 
$path = "Files";
$items = scandir($path);
$items = array_diff($items, array('.', '..'));

foreach ($items as $item) {
    echo "<a href='./Files/$item'>$item</a>";
    echo "<br/>";
}
?>
>>>>>>> 2327da399a8fc7486d103895b98ec7f7a0e56f5e
