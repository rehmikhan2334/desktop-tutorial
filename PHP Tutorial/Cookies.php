<?php 
setcookie("fruit", "Apple", time() + 44646464);
setcookie("color", "blue", time() + 44646464);

if (isset($_COOKIE['fruit'])) {
    echo "Current fruit name is: " . $_COOKIE['fruit'];
} else {
    echo "No fruit set";
}
echo "<br/>";
if (isset($_COOKIE['color'])) {
    echo "Current color name is: " . $_COOKIE['color'];
} else {
    echo "No color set";
}
?>
