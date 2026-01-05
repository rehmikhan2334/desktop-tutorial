<?php 
include("./config.php");

// Fetch record
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getstudent = $conn->prepare("SELECT * FROM students WHERE ID = :id");
    $getstudent->bindParam(':id', $id, PDO::PARAM_INT);
    $getstudent->execute();
    $student = $getstudent->fetch(PDO::FETCH_ASSOC);

    $name = $student['Name'];
    $course = $student['Course'];
    $batch = $student['Batch'];
    $city = $student['City'];
    $year = $student['Year'];
}
?>

<form action="" method="post">
    <input type="text" name="name" value="<?php echo $name; ?>" />
    <br><br>
    <input type="text" name="course" value="<?php echo $course; ?>" />
    <br><br>
    <input type="text" name="batch" value="<?php echo $batch; ?>" />
    <br><br>
    <input type="text" name="city" value="<?php echo $city; ?>" />
    <br><br>
    <input type="text" name="year" value="<?php echo $year; ?>" />
    <br><br>
    <button type="submit" name="update" value="<?php echo $id; ?>">Update Student Data</button>
</form>

<?php 
// Update logic
if(isset($_POST['update'])){
    $id = $_POST['update'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    $updateStudent = $conn->prepare("UPDATE students 
        SET Name = :name, Course = :course, Batch = :batch, City = :city, Year = :year 
        WHERE ID = :id");

    $updateStudent->bindParam(':name', $name);
    $updateStudent->bindParam(':course', $course);
    $updateStudent->bindParam(':batch', $batch);
    $updateStudent->bindParam(':city', $city);
    $updateStudent->bindParam(':year', $year);
    $updateStudent->bindParam(':id', $id, PDO::PARAM_INT);

    if($updateStudent->execute()){
        header("Location: delete_Edit.php"); // refresh page
        exit;
    } else {
        echo "Data not updated!";
    }
}
?>
