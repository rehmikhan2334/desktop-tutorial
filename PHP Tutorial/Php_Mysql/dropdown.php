<<<<<<< HEAD
<?php 
include("./config.php");

$getStudents = $conn->prepare("SELECT id, name FROM students");
$getStudents->execute();
$studentData = $getStudents->fetchAll(PDO::FETCH_ASSOC);

echo "<select>"; 
echo "<option value=''>Select Name</option>";

foreach($studentData as $student){
    echo "<option value'".$student['id']."'>".$student['name']."</option>";
}

echo "</select>"; 
?>
=======
<?php 
include("./config.php");

$getStudents = $conn->prepare("SELECT id, name FROM students");
$getStudents->execute();
$studentData = $getStudents->fetchAll(PDO::FETCH_ASSOC);

echo "<select>"; 
echo "<option value=''>Select Name</option>";

foreach($studentData as $student){
    echo "<option value'".$student['id']."'>".$student['name']."</option>";
}

echo "</select>"; 
?>
>>>>>>> 2327da399a8fc7486d103895b98ec7f7a0e56f5e
