<form action="" method="post">
    <input type="text" name="search" placeholder="enter name for search">
    <br><br>
    <button>Search</button>
</form>
<?php 
include("./config.php");
if(isset($_POST['search'])){
    $search = $_POST['search'];
    // $student = $conn -> prepare("select * from students where name = '$search'");
    $student = $conn -> prepare("select * from students where name like '%$search%'");
    $student->execute();
    $result= $student->fetchAll();
   echo "<table border='1'>";

foreach($result as $student){
    echo "<tr>";
    echo "<td>" . $student['Name'] . "</td>";
    echo "<td>" . $student['Course'] . "</td>";
    echo "<td>" . $student['Batch'] . "</td>";
    echo "<td>" . $student['City'] . "</td>";
    echo "<td>" . $student['Year'] . "</td>";
    echo "</tr>";
}

echo "</table>";
}
?>