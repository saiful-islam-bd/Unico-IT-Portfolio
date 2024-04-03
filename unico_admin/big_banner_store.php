<?php include("config.php");

echo  $title      = ($_REQUEST['title']);
echo  $sub_title  = ($_REQUEST['sub_title']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "../public/assets/img/test/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "INSERT INTO bg_banners (image, title, sub_title) VALUES ('$filename', '$title', '$sub_title')";

if (mysqli_query($conn, $sql)) {
    header("Location: big_banner.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
