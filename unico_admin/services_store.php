<?php include("config.php");

echo  $title      = ($_REQUEST['title']);
echo  $short_description  = ($_REQUEST['short_description']);
echo  $long_description  = ($_REQUEST['long_description']);



// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename1 = $_FILES["choosefile1"]["name"];

    $tempname1 = $_FILES["choosefile1"]["tmp_name"];

    $folder1 = "../public/assets/img/test/" . $filename1;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname1, $folder1)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename1;

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


$sql = "INSERT INTO services (image, large_image, title, short_description, long_description) VALUES ('$filename', '$filename1', '$title', '$short_description', '$long_description')";

if (mysqli_query($conn, $sql)) {
    header("Location: services.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
