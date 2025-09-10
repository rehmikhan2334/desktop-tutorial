<?php 
if(isset($_POST['filename'])){
$fileName="Files/".$_POST['filename'];
$content = $_POST['content'];
$file = fopen($fileName,"w") or die("unable to create file");
fwrite($file,$content);
fclose($file);
echo "file created";
}

?>
<form action="" method="post">
    <input type="text" name="filename" id="" placeholder="enter file name">
    <br>
    <br>
    <textarea name="content" id="">

    </textarea>
    <br>
    <button>Create File</button>
</form>