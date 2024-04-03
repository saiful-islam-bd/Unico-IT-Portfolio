<?php include("config.php");

echo  $title      = ($_REQUEST['title']);
echo  $about_text  = ($_REQUEST['about_text']);
echo  $our_goal_text  = ($_REQUEST['our_goal_text']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "INSERT INTO about_uses (image, title, about_text, our_goal_text) VALUES ('$filename', '$title', '$about_text', '$our_goal_text')";

if (mysqli_query($conn, $sql)) {
    header("Location: about_us.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
