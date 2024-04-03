<?php include("config.php");

echo  $id          = $_GET['id'];
echo  $title       = ($_REQUEST['title']);
echo  $short_description   = ($_REQUEST['short_description']);
// echo  $long_description   = ($_REQUEST['long_description']);


$msg = "";
// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename1 = $_FILES["choosefile1"]["name"];

    $tempname1 = $_FILES["choosefile1"]["tmp_name"];

    $folder1 = "assets/img/" . $filename1;

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

    $folder = "assets/img/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;





$sql = "UPDATE  services_category SET image='$filename', title='$title', short_description='$short_description' WHERE id=$id";


if (mysqli_query($conn, $sql)) {
    header("Location: services_category.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}


// if (mysqli_query($conn, $sql)) {
//     header("Location: services.php");
// } else {
//     $error = mysqli_error($conn);
//     echo "ERROR: Could not able to execute  $error";
// }
