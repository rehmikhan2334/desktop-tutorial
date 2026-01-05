<?php 
include("./config.php");

$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents->execute();

// Important: fetch associative array
$students = $getStudents->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>";

foreach($students as $student){
    echo "<tr>";
    echo "<td>" . $student['Name'] . "</td>";
    echo "<td>" . $student['Course'] . "</td>";
    echo "<td>" . $student['Batch'] . "</td>";
    echo "<td>" . $student['City'] . "</td>";
    echo "<td>" . $student['Year'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
