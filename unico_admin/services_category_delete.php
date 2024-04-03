<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM services_category WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: services_category.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
