<?php include("config.php");

echo  $title      = ($_REQUEST['title']);
echo  $short_description  = ($_REQUEST['short_description']);
$msg = "";



$sql = "INSERT INTO why_uses (title, short_description) VALUES ( '$title', '$short_description')";

if (mysqli_query($conn, $sql)) {
    header("Location: why_us.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
