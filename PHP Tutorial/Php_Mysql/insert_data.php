<form action="" method="post">
    <input type="text" name="name" id="" placeholder="enter your name">
    <br>
    <br>
    <input type="text" name="course" id="" placeholder="enter your course">
    <br>
    <br>
    <input type="text" name="batch" id="" placeholder="enter your batch">
    <br>
    <br>
    <input type="text" name="city" id="" placeholder="enter your city">
    <br>
    <br>
    <input type="text" name="year" id="" placeholder="enter your year">
    <br>
    <br>
    <button>Add New Student</button>
</form>


<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $course=$_POST['course'];
    $batch=$_POST['batch'];
    $city=$_POST['city'];
    $year=$_POST['year'];
    include("./config.php");

$students = $conn->prepare("
    INSERT INTO students (id, name, course, batch, city, year)
    VALUES (NULL, '$name', '$course', '$batch', '$city', '$year')
");

$result = $students->execute();

if($result){
    echo "Data Inserted Successfully";
}else{
    echo "Operation Failed";
}
}

?>
