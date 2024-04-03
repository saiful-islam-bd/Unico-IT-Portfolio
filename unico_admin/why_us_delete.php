<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM why_uses WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: why_us.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
