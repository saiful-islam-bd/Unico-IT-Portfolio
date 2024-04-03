<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 

$id = $_GET['id'];
$sql = "SELECT * FROM about_uses where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image      = $row['image'];
        $title      = $row['title'];
        $about_text  = $row['about_text'];
        $our_goal_text  = $row['our_goal_text'];
    }
}
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Edit: About Us</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="about_us_update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="<?php echo $title ?>" name="title" required>
                                </div>
                            </div>


                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Short Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" value="" name="about_text" required><?php echo $about_text ?></textarea>
                                </div>
                            </div>
<!-- 
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Our Goal Text</strong></label>
                                <div class="col-sm-9">
                                <textarea class="summernote" value="" name="our_goal_text" required><?php echo $about_text ?></textarea>


                                 
                                </div>
                            </div> -->


                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="uploadfile">Update</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>