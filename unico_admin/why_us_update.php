<?php include("config.php");

echo  $id          = $_GET['id'];
echo  $title       = ($_REQUEST['title']);
echo  $short_description   = ($_REQUEST['short_description']);






$sql = "UPDATE  why_uses SET  title='$title', short_description='$short_description' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: why_us.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
