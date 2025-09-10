<?php 
include("./config.php");

$getstudent = $conn->prepare("SELECT * FROM students");
$getstudent->execute();
$result = $getstudent->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>";

foreach ($result as $student) {
    echo "<tr>
        <td>" . $student['Name'] . "</td>
        <td>" . $student['Course'] . "</td>
        <td>" . $student['Batch'] . "</td>
        <td>" . $student['City'] . "</td>
        <td>" . $student['Year'] . "</td>
        <td>
            <form method='post'>
                <button type='submit' name='delete' value='" . $student['Id'] . "'>Delete</button>
            </form>
        </td>
        <td><a href='update.php?id=".$student['Id']."'>edit</td>
    </tr>";
}
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $delete = $conn->prepare("DELETE FROM students WHERE ID = :id");
    $delete->bindParam(':id', $id, PDO::PARAM_INT);

    if ($delete->execute()) {
        // record delete hote hi page reload
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Delete failed!";
    }
}

echo "</table>";

?>
