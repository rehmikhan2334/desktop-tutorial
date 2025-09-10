<form action="" method="post">
    <input type="text" name="user" id="" placeholder="enter your name">
    <br>
    <br>
    <button name="button" value="set">Set Cookies</button>
      <br>
    <br>
    <button name="button" value="display">Display Cookies</button>
      <br>
    <br>
    <button name="button" value="delete">Delete Cookies</button>
</form>
<?php 
if(isset($_POST['button'])){
    if($_POST['button'] == 'set'){
        $val= $_POST['user'];
        setcookie("user",$val);
        echo "cookie is set";
    }
    if($_POST['button']== 'display'){
        if(isset($_COOKIE['user'])){
            echo "Cookie value is :" .$_COOKIE['user'];
        }
    }

     if($_POST['button']== 'delete'){
        if(isset($_COOKIE['user'])){
            setcookie("user",null,-1);
        }
    }

}

?>