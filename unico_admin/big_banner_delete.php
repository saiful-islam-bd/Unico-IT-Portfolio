<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM bg_banners WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: big_banner.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
